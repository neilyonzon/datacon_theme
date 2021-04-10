<?php

//**HERO BANNER COMPONENT

add_action('vc_before_init', 'hp_hero_integrateWithVC');
function hp_hero_integrateWithVC()
{
vc_map(
array(
"name" => __("Hero Banner", "my-text-domain"),
"base" => "hero_banner",
"class" => "",
"icon" => get_template_directory_uri() . "",
"category" => __("Components", "my-text-domain"),
"params" => array(
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Heading Line 1", "my-text-domain"),
        "param_name" => "header_1",
        "value" => __("Heading 1", "my-text-domain"),
        "description" => __("First Line of H1 Element.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Heading Line 2", "my-text-domain"),
        "param_name" => "header_2",
        "value" => __("Heading 2", "my-text-domain"),
        "description" => __("Second Line of H1 Element (optional)", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Heading Line 3", "my-text-domain"),
        "param_name" => "header_3",
        "value" => __("Heading 3", "my-text-domain"),
        "description" => __("Third Line of H1 Element (optional).", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Subheading", "my-text-domain"),
        "param_name" => "sub_heading", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter subheading content.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea_html",
        "holder" => "div",
        "class" => "",
        "heading" => __("Description", "my-text-domain"),
        "param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "value" => __("<p>I am test text block. Click edit button to change this text.</p>", "my-text-domain"),
        "description" => __("Enter your content.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "vc_link",
        "holder" => "div",
        "class" => "",
        "heading" => __("Call to Action", "my-text-domain"),
        "param_name" => "cta",
        "value" => __("Enter Link", "my-text-domain"),
        "description" => __("Enter link for call to action button.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "class" => "",
        "heading" => __("Background Image", "my-text-domain"),
        "param_name" => "bg_image",
        'admin_label' => true,
        "description" => __("Choose image for background.", "my-text-domain"),
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
        "heading" => __("Short Hero", "my-text-domain"),
        "param_name" => "short", 
        "value" => array(
            __('True', "my-text-domain") => 'true',
        ),
        "description" => __("Check to use short hero banner.", "my-text-domain"),
        'save_always' => true,
        'std' => "",
    ),
),
)
);
}

add_shortcode('hero_banner', 'output_hp_hero');
function output_hp_hero($atts, $content, $tag)
{
$atts = vc_map_get_attributes($tag, $atts);
$header1 = esc_attr($atts['header_1']);
$header2 = esc_attr($atts['header_2']);
$header3 = esc_attr($atts['header_3']);
$sub_heading = esc_attr($atts['sub_heading']);
$cta = vc_build_link($atts['cta']);
$image_src = wp_get_attachment_image_src($atts['bg_image'], 'full')[0];
$image_alt = get_post_meta($atts['bg_image'], '_wp_attachment_image_alt', true);
$color = $atts['color'];
$output = '';
//Start of Parent Div
if ($atts['short'] == 'true') {
    $output .= '<div class="hero hero--short">';
} else {
    $output .= '<div class="hero">';
}
if ($image_src != '') {
$output .= '<img src="' . $image_src . '" alt="' . $image_alt . '" class="hero__img">';
}
$output .= '
<div class="hero__overlay hero__overlay--'. $color .'"></div>
<div class="hero__headline">
<h1>';

$output .= $header1;
if ($header2 != '') {
$output .= '<br>';
$output .= $header2;
}

if ($header3 != '') {
$output .= '<br>';
$output .= $header3;
}

$output .= '</h1>
</div>';
if ($sub_heading != '') {
$output .= '<div class="hero__subline">';
$output .= $sub_heading;
$output .= '</div>';
}

if ($content != '') {
$output .= '<div class="hero__description">';
$output .= $content;
$output .= '</div>';
}
if ($cta['url'] != '') {
$output .= ' <a href="' . $cta['url'] . '" target="'. $cta['target'] .'" class="btn btn--secondary">' . $cta['title'] . '</a>';
}
$output .= '</div>';
return $output;
}