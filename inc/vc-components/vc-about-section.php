<?php

//** ABOUT SECTION
add_action("vc_before_init", "about_section_integrateWithVC");

function about_section_integrateWithVC() 
{
vc_map(
array(
"name" => __("About Section", "my-text-domain"),
"base" => "about_section",
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
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Description 1", "my-text-domain"),
        "param_name" => "description_1", 
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter text for the first paragraph.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Description 2", "my-text-domain"),
        "param_name" => "description_2",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter text for the second paragraph.", "my-text-domain"),
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
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => __('Color Theme', "my-text-domain"),
        "param_name" => "color",
        "value" => array(
            __('Blue', "my-text-domain") => 'primary',
            __('Purple', "my-text-domain") => 'secondary',
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

add_shortcode("about_section", "output_about_section");

function output_about_section($atts, $content, $tags) {
{
//Call to Action Section Variables
$heading = $atts['heading'];
$description1 = $atts['description_1'];
$description2 = $atts['description_2'];
$image_src = wp_get_attachment_image_src($atts['image'], 'full')[0];
$image_alt = get_post_meta($atts['image'], '_wp_attachment_image_alt', true);
$color = $atts['color'];
$reverse = "about-section--reverse";

//Start of Parent Div
if ($atts['reverse'] == 'true') {
    $output .= '<div class="about-section ' . $reverse . '">';
} else {
    $output .= '<div class="about-section">';
}

//Start of Image Column 

if ($image_src != '') {
$output .= '<div class="about-section__img-column">';
$output .=  '<img src="' . $image_src . '" alt="' . $image_alt . '"/>';
$output .= '</div>';
}

//End of Image Column


//Start of Text Column

$output .= '<div class="about-section__text-column flex-align--center headspace-s--m">';
$output .= '<div class="callout callout--'. $color . '">'. $heading.'</div>';
$output .= '<hr class="line line--'. $color . '" />';
if ($description1 !='') {
$output .= '<p>' . $description1 . '</p>';
}
if ($description2 !='') {
$output .= '<p>' . $description2 . '</p>';
}
$output .= '</div>';

//End of Text Column

//End Parent Div
$output .= "</div>";
return $output;
}
}