<?php
/**
 * Better Supply Trading Establishment - RFQ Lead Processing Handler
 * Validates specifications, secures file attachments, archives inquiry to JSON,
 * and notifies company procurement email.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$site_config = require __DIR__ . '/config.php';
require_once __DIR__ . '/i18n.php';

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

// 1. Anti-spam Honeypot Check
if (!empty($_POST['website_url_hp']) || !empty($_POST['honeypot'])) {
    // Silent drop to fool bots
    echo json_encode(['success' => true, 'message' => 'Request received.']);
    exit;
}

// 2. Extract and Sanitize Form Inputs
$name = trim(strip_tags($_POST['name'] ?? ''));
$company = trim(strip_tags($_POST['company'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone = trim(strip_tags($_POST['phone'] ?? ''));
$category = trim(strip_tags($_POST['category'] ?? ''));
$product_spec = trim(strip_tags($_POST['product_spec'] ?? ''));
$quantity = trim(strip_tags($_POST['quantity'] ?? ''));
$unit = trim(strip_tags($_POST['unit'] ?? ''));
$packaging = trim(strip_tags($_POST['packaging'] ?? ''));
$destination = trim(strip_tags($_POST['destination'] ?? ''));
$delivery_date = trim(strip_tags($_POST['delivery_date'] ?? ''));
$remarks = trim(strip_tags($_POST['remarks'] ?? ''));
$source_page = trim(strip_tags($_POST['source_page'] ?? 'general'));
$privacy_consent = !empty($_POST['privacy_consent']);

// 3. Validation
$errors = [];

if (empty($name)) {
    $errors['name'] = 'Full name is required.';
}
if (empty($company)) {
    $errors['company'] = 'Company name is required.';
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Valid business email is required.';
}
if (empty($phone)) {
    $errors['phone'] = 'Contact phone number is required.';
}
if (empty($category)) {
    $errors['category'] = 'Product category selection is required.';
}
if (empty($product_spec)) {
    $errors['product_spec'] = 'Product details and specification notes are required.';
}
if (empty($quantity) || !is_numeric($quantity) || floatval($quantity) <= 0) {
    $errors['quantity'] = 'Valid numerical quantity is required.';
}
if (empty($unit)) {
    $errors['unit'] = 'Unit of measure must be selected.';
}
if (empty($destination)) {
    $errors['destination'] = 'Delivery destination city and country are required.';
}
if (!$privacy_consent) {
    $errors['privacy_consent'] = 'You must agree to the procurement data processing terms.';
}

// 4. File Attachment Processing
$saved_attachment_path = null;
$attachment_original_name = null;

if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['attachment'];
    $max_bytes = $site_config['upload']['max_bytes'];
    $allowed_exts = $site_config['upload']['allowed_extensions'];
    
    $file_size = $file['size'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    
    if ($file_size > $max_bytes) {
        $errors['attachment'] = 'File size exceeds maximum allowed limit of 10 MB.';
    } elseif (!in_array($ext, $allowed_exts)) {
        $errors['attachment'] = 'File type .' . $ext . ' is not permitted. Please upload PDF, Word, Excel, or images.';
    } else {
        $upload_dir = __DIR__ . '/storage/uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
        
        $safe_name = 'rfq_' . date('Ymd_His') . '_' . bin2hex(random_bytes(4)) . '.' . $ext;
        $dest_path = $upload_dir . $safe_name;
        
        if (move_uploaded_file($file['tmp_name'], $dest_path)) {
            $saved_attachment_path = 'storage/uploads/' . $safe_name;
            $attachment_original_name = basename($file['name']);
        } else {
            $errors['attachment'] = 'Failed to store attachment file.';
        }
    }
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'errors' => $errors,
        'message' => t('rfq_form.error_msg', 'Please check the required fields highlighted below.')
    ]);
    exit;
}

// 5. Structure Lead Record
$lead = [
    'id' => 'RFQ-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3))),
    'timestamp' => date('c'),
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN',
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN',
    'source_page' => $source_page,
    'contact' => [
        'name' => $name,
        'company' => $company,
        'email' => $email,
        'phone' => $phone,
    ],
    'rfq_details' => [
        'category' => $category,
        'specification' => $product_spec,
        'quantity' => floatval($quantity),
        'unit' => $unit,
        'packaging' => $packaging,
        'destination' => $destination,
        'delivery_date' => $delivery_date,
        'remarks' => $remarks,
    ],
    'attachment' => [
        'original_name' => $attachment_original_name,
        'stored_path' => $saved_attachment_path,
    ]
];

// 6. Secure Storage to JSON File
$storage_file = __DIR__ . '/storage/rfqs.json';
$existing_rfqs = [];
if (file_exists($storage_file)) {
    $content = file_get_contents($storage_file);
    $decoded = json_decode($content, true);
    if (is_array($decoded)) {
        $existing_rfqs = $decoded;
    }
}
$existing_rfqs[] = $lead;
file_put_contents($storage_file, json_encode($existing_rfqs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX);

// 7. Dispatch Email Notification
$to_email = $site_config['contacts']['email'];
if (!empty($to_email) && filter_var($to_email, FILTER_VALIDATE_EMAIL)) {
    $subject = "New RFQ: [{$category}] - {$company} ({$lead['id']})";
    
    $body = "BETTER SUPPLY TRADING ESTABLISHMENT - RFQ NOTIFICATION\n";
    $body .= "=================================================\n\n";
    $body .= "Reference ID: {$lead['id']}\n";
    $body .= "Date / Time: {$lead['timestamp']}\n";
    $body .= "Source URL: {$source_page}\n\n";
    $body .= "CONTACT INFORMATION:\n";
    $body .= "Name: {$name}\n";
    $body .= "Company: {$company}\n";
    $body .= "Email: {$email}\n";
    $body .= "Phone: {$phone}\n\n";
    $body .= "MATERIAL SPECIFICATIONS:\n";
    $body .= "Category: {$category}\n";
    $body .= "Details / Formula: {$product_spec}\n";
    $body .= "Quantity: {$quantity} {$unit}\n";
    $body .= "Packaging: " . ($packaging ?: 'Standard / Bulk') . "\n";
    $body .= "Delivery Destination: {$destination}\n";
    $body .= "Required Delivery Schedule: " . ($delivery_date ?: 'Standard') . "\n";
    $body .= "Additional Remarks: " . ($remarks ?: 'None') . "\n\n";
    if ($saved_attachment_path) {
        $body .= "Attachment: {$site_config['base_url']}/{$saved_attachment_path} ({$attachment_original_name})\n";
    }
    $body .= "\n=================================================\n";
    
    $headers = "From: noreply@" . $site_config['domain'] . "\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    @mail($to_email, $subject, $body, $headers);
}

// 8. Return Success Response
echo json_encode([
    'success' => true,
    'lead_id' => $lead['id'],
    'title' => t('rfq_form.success_title', 'Quotation Request Received'),
    'message' => t('rfq_form.success_msg', 'Thank you. Our procurement team will review your specifications and prepare a commercial offer.'),
]);
exit;
