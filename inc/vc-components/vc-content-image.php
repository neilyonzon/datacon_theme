<?php

//** ABOUT SECTION
add_action("vc_before_init", "content_image_integrateWithVC");

function content_image_integrateWithVC() 
{
vc_map(
array(
"name" => __("Content with Image", "my-text-domain"),
"base" => "content_image",
"class" => "",
"icon" => get_template_directory_uri() . "",
"category" => __("Components", "my-text-domain"),
"params" => array(
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Heading", "my-text-domain"),
        "param_name" => "heading",
        "value" => __("Heading", "my-text-domain"),
        "description" => __("Enter text for headline.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea_html",
        "holder" => "div",
        "class" => "",
        "heading" => __("Content", "my-text-domain"),
        "param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "description" => __("Enter your content.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "class" => "",
        "heading" => __("Image", "my-text-domain"),
        "param_name" => "image",
        'admin_label' => true,
        "description" => __("Choose image to be displayed left of the text area.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "vc_link",
        "holder" => "div",
        "class" => "",
        "heading" => __("Button Link", "my-text-domain"),
        "param_name" => "cta-link",
        "value" => __("Enter Link", "my-text-domain"),
        "description" => __("Enter link for call to action button.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => __('Theme', "my-text-domain"),
        "param_name" => "theme",
        "value" => array(
            __('Blue Background', "my-text-domain") => 'content-image__primary',
            __('Purple Background', "my-text-domain") => 'content-image__secondary',
            __('White Background with Blue Text', "my-text-domain" ) => 'content-image__primary-inverse',
            __('White Background with Purple Text', "my-text-domain") => 'content-image__secondary-inverse',
        ),
        'save_always' => true,
    ),
    array(
        "type" => "checkbox",
        "holder" => "div",
        "class" => "",
        "heading" => __("Reverse Content", "my-text-domain"),
        "param_name" => "reverse", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "value" => array(
            __('True', "my-text-domain") => 'true',
        ),
        "description" => __("Check to have image on the right column.", "my-text-domain"),
        'save_always' => true,
        'std' => "",
    ),
),
)
);
}

add_shortcode("content_image", "output_content_image");

function output_content_image($atts, $content, $tags) 
{
$heading = $atts['heading'];
$description1 = $atts['description_1'];
$description2 = $atts['description_2'];
$image_src = wp_get_attachment_image_src($atts['image'], 'full')[0];
$image_alt = get_post_meta($atts['image'], '_wp_attachment_image_alt', true);
$ctaBtn = vc_build_link($atts['cta-link']);
$ctaColor = "white";
$theme = $atts['theme'];
$reverse = "content-image--reverse";
$content = wpb_js_remove_wpautop($content, true);

if ($theme == "content-image__primary-inverse" ) {
    $ctaColor = "primary";
} elseif ($theme == "content-image__secondary-inverse") {
    $ctaColor = "secondary";
} elseif ($theme == "content-image__secondary") {
    $ctaColor = "white-secondary";
}

//Start of Parent Div
if ($atts['reverse'] == 'true') {
    $output .= '<div class="content-image ' . $theme . ' ' . $reverse . ' headspace-m">';
} else {
    $output .= '<div class="content-image ' . $theme . ' headspace-m">';
}

//Start of Image Column 

if ($image_src != '') {
$output .= '<div class="content-image__img-column">';
$output .=  '<img src="' . $image_src . '" alt="' . $image_alt . '"/>';
$output .= '</div>';
}

//End of Image Column


//Start of Text Column

$output .= '<div class="content-image__text-column">';
$output .= '<div class="header">'. $heading.'</div>';
$output .= $content;
if ($ctaBtn['url'] != '') 
{
    $output .= "<a href=\"{$ctaBtn['url']}\" target=\"{$ctaBtn['target']}\" class=\"btn btn--{$ctaColor}\">{$ctaBtn['title']}</a>";
}
$output .= '</div>';

//End of Text Column

//End Parent Div
$output .= "</div>";
return $output;
}