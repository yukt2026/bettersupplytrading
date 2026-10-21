<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Anti-spam honeypot
    if (!empty($_POST['honeypot'])) {
        die('Spam detected.');
    }

    $name = strip_tags(trim($_POST["name"] ?? ''));
    $company = strip_tags(trim($_POST["company"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"] ?? ''));
    $position = strip_tags(trim($_POST["position"] ?? ''));
    $project_name = strip_tags(trim($_POST["project_name"] ?? ''));
    $service = strip_tags(trim($_POST["service"] ?? ''));
    $location = strip_tags(trim($_POST["location"] ?? ''));
    $tonnage = strip_tags(trim($_POST["tonnage"] ?? ''));
    $required_date = strip_tags(trim($_POST["required_date"] ?? ''));
    $message = strip_tags(trim($_POST["message"] ?? ''));

    if (empty($name) || empty($email) || empty($phone)) {
        die('Missing required fields.');
    }

    $to = "sales@thedesertiron.com";
    $subject = "New RFQ: $project_name from $company";
    
    // File upload logic
    $upload_success = true;
    $attachment_info = "No attachment provided.";
    
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
        $allowed = [
            'pdf' => 'application/pdf',
            'doc' => 'application/msword',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'xls' => 'application/vnd.ms-excel',
            'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'dwg' => 'application/acad',
            'zip' => 'application/zip'
        ];
        $filename = $_FILES['attachment']['name'];
        $filesize = $_FILES['attachment']['size'];
        
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if (!array_key_exists($ext, $allowed) || $filesize > 10 * 1024 * 1024) {
            $upload_success = false;
            $attachment_info = "Invalid file type or size exceeded 10MB limit.";
        } else {
            // Save uploaded BOQ/drawing to public/uploads/
            $upload_dir = __DIR__ . '/public/uploads/';
            if(!is_dir($upload_dir)) mkdir($upload_dir, 0755, true);
            $safe_filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', basename($filename));
            if(move_uploaded_file($_FILES['attachment']['tmp_name'], $upload_dir . $safe_filename)){
                $attachment_info = "File attached: " . $safe_filename;
            } else {
                $attachment_info = "Failed to move uploaded file.";
            }
        }
    }

    $email_content = "New RFQ Submission:\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Company: $company\n";
    $email_content .= "Position: $position\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Project Name: $project_name\n";
    $email_content .= "Location: $location\n";
    $email_content .= "Service Category: $service\n";
    $email_content .= "Project Size/Area: $tonnage\n";
    $email_content .= "Required Date: $required_date\n\n";
    $email_content .= "Message/Specifications:\n$message\n\n";
    $email_content .= "Attachment Status: $attachment_info\n";

    $headers = "From: no-reply@thedesertiron.com\r\n";
    $headers .= "Reply-To: $email";

    @mail($to, $subject, $email_content, $headers);
    
    // Redirect with success
    $referer = $_SERVER['HTTP_REFERER'] ?? '';
    if (strpos($referer, 'contact.php') !== false) {
        header('Location: contact.php?success=1');
    } else {
        header('Location: quote.php?success=1');
    }
    exit;
} else {
    header('Location: quote.php');
    exit;
}
?>
