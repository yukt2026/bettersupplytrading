<?php
// reusable component library functions

function renderButton($text, $variant = 'primary', $isSubmit = false) {
    global $headingFontClass;
    $baseClasses = "inline-flex items-center justify-center px-6 py-3 font-semibold transition-all duration-300 rounded shadow-sm hover:shadow-md $headingFontClass ";
    
    $variants = [
        'primary' => 'bg-saudi text-white hover:bg-opacity-90',
        'secondary' => 'bg-charcoal text-white hover:bg-opacity-90',
        'outline' => 'border-2 border-saudi text-saudi hover:bg-saudi hover:text-white',
        'ghost' => 'text-saudi hover:bg-saudi hover:bg-opacity-10'
    ];
    
    $classes = $baseClasses . ($variants[$variant] ?? $variants['primary']);
    $tag = $isSubmit ? 'button' : 'a';
    $attr = $isSubmit ? 'type="submit"' : 'href="#"';
    
    return "<$tag $attr class=\"$classes\">$text</$tag>";
}

function renderSectionHeading($title, $subtitle = '') {
    global $headingFontClass, $lang;
    $align = $lang === 'ar' ? 'text-right' : 'text-left';
    $html = "<div class=\"mb-10 $align\">";
    $html .= "<h2 class=\"text-3xl md:text-4xl text-charcoal mb-3 $headingFontClass\">$title</h2>";
    if ($subtitle) {
        $html .= "<div class=\"w-16 h-1 bg-saudi mb-4\"></div>";
        $html .= "<p class=\"text-steel text-lg\">$subtitle</p>";
    }
    $html .= "</div>";
    return $html;
}

function renderServiceCard($title, $iconSvg, $desc) {
    global $headingFontClass;
    return "
    <div class=\"bg-white border border-gray-200 p-6 rounded shadow-sm hover:shadow-lg transition-shadow duration-300 group\">
        <div class=\"text-saudi mb-4 group-hover:scale-110 transition-transform duration-300\">
            $iconSvg
        </div>
        <h3 class=\"text-xl text-charcoal mb-2 $headingFontClass\">$title</h3>
        <p class=\"text-steel text-sm leading-relaxed\">$desc</p>
    </div>
    ";
}

function renderProjectCard($imagePlaceholderText, $title, $category) {
    global $headingFontClass;
    return "
    <div class=\"group relative overflow-hidden rounded bg-charcoal aspect-[4/3]\">
        <div class=\"absolute inset-0 bg-steel opacity-20 flex items-center justify-center text-white\">$imagePlaceholderText</div>
        <div class=\"absolute inset-0 bg-gradient-to-t from-charcoal via-transparent to-transparent opacity-80\"></div>
        <div class=\"absolute bottom-0 left-0 right-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300\">
            <span class=\"text-desert text-xs font-bold uppercase tracking-wider mb-2 block\">$category</span>
            <h3 class=\"text-offwhite text-lg $headingFontClass\">$title</h3>
        </div>
    </div>
    ";
}

function renderStatCounter($number, $label) {
    global $headingFontClass;
    return "
    <div class=\"text-center p-4 border border-steel border-opacity-20 rounded bg-white bg-opacity-50\">
        <div class=\"text-4xl text-saudi mb-2 $headingFontClass\">$number</div>
        <div class=\"text-charcoal font-medium text-sm uppercase tracking-wide\">$label</div>
    </div>
    ";
}

function renderCTABand($text, $btnText) {
    global $headingFontClass;
    $btn = renderButton($btnText, 'secondary');
    return "
    <div class=\"bg-saudi text-offwhite py-12 bg-saudi-pattern\">
        <div class=\"container mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-6\">
            <h2 class=\"text-2xl md:text-3xl $headingFontClass\">$text</h2>
            <div>$btn</div>
        </div>
    </div>
    ";
}

function renderBreadcrumb($links) {
    global $lang;
    $separator = $lang === 'ar' ? '<span class="mx-2 text-steel">/</span>' : '<span class="mx-2 text-steel">/</span>'; // can use arrows later
    
    $html = "<nav class=\"text-sm mb-6 flex items-center text-steel\">";
    $count = count($links);
    $i = 0;
    foreach ($links as $name => $url) {
        if ($i === $count - 1) {
            $html .= "<span class=\"text-charcoal font-medium\">$name</span>";
        } else {
            $html .= "<a href=\"$url\" class=\"hover:text-saudi transition-colors\">$name</a> $separator";
        }
        $i++;
    }
    $html .= "</nav>";
    return $html;
}

function renderFormFields() {
    global $lang;
    $name = $lang === 'ar' ? 'الاسم' : 'Full Name';
    $email = $lang === 'ar' ? 'البريد الإلكتروني' : 'Email Address';
    $message = $lang === 'ar' ? 'الرسالة' : 'Message';
    
    return "
    <div class=\"space-y-4\">
        <div>
            <label class=\"block text-sm font-medium text-charcoal mb-1\">$name</label>
            <input type=\"text\" class=\"w-full border border-steel border-opacity-30 p-3 rounded focus:border-saudi focus:ring-1 focus:ring-saudi outline-none transition-all bg-white\" placeholder=\"\">
        </div>
        <div>
            <label class=\"block text-sm font-medium text-charcoal mb-1\">$email</label>
            <input type=\"email\" class=\"w-full border border-steel border-opacity-30 p-3 rounded focus:border-saudi focus:ring-1 focus:ring-saudi outline-none transition-all bg-white\" placeholder=\"\">
        </div>
        <div>
            <label class=\"block text-sm font-medium text-charcoal mb-1\">$message</label>
            <textarea rows=\"4\" class=\"w-full border border-steel border-opacity-30 p-3 rounded focus:border-saudi focus:ring-1 focus:ring-saudi outline-none transition-all bg-white\" placeholder=\"\"></textarea>
        </div>
    </div>
    ";
}
?>

