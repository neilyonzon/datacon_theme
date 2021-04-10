<?php 

add_action("vc_before_init", "callout_cta_integrateWithVC");

function callout_cta_integrateWithVC()
{
vc_map(
array(
"name" => __("Callout with Call to Action Box", "my-text-domain"),
"base" => "callout_cta",
"icon" => get_template_directory_uri() . "",
"category" => __("Components", "my-text-domain"),
"params" => array(
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Callout Introduction", "my-text-domain"),
        "param_name" => "callout-intro", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "group" => "Callout Column",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter callout introduction.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea_html",
        "holder" => "div",
        "class" => "",
        "heading" => __("Callout", "my-text-domain"),
        "param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "group" => "Callout Column",
        "value" => __("<p>I am test text block. Click edit button to change this text.</p>", "my-text-domain"),
        "description" => __("Enter your content.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Callout Color', "my-text-domain"),
        "param_name" => "callout-color",
        "group" => "Callout Column",
        "value" => array(
            __('Blue', "my-text-domain") => 'callout--primary',
            __('Purple', "my-text-domain") => 'callout--secondary',
            __('Orange', "my-text-domain") => 'callout--tertiary',
        ),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Title", "my-text-domain"),
        "param_name" => "cta-title", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "group" => "Call to Action Section",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter Title.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Details", "my-text-domain"),
        "param_name" => "cta-details",
        "group" => "Call to Action Section",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter Details.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "vc_link",
        "holder" => "div",
        "class" => "",
        "heading" => __("Button Link", "my-text-domain"),
        "param_name" => "cta-link",
        "group" => "Call to Action Section",
        "value" => __("Enter Link", "my-text-domain"),
        "description" => __("Enter link for call to action button.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Color Theme', "my-text-domain"),
        "param_name" => "cta-color",
        "group" => "Call to Action Section",
        "value" => array(
            __('Blue', "my-text-domain") => 'primary',
            __('Purple', "my-text-domain") => 'secondary',
            __('Orange', "my-text-domain") => 'tertiary',
        ),
        'save_always' => true,
    ),
    array(
        "type" => "checkbox",
        "holder" => "div",
        "class" => "",
        "heading" => __("Reverse Content", "my-text-domain"),
        "param_name" => "reverse", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "group" => "General",
        "value" => array(
            __('True', "my-text-domain") => 'true',
        ),
        "description" => __("Check to have Callout on the right column.", "my-text-domain"),
        'save_always' => true,
        'std' => "",
    ),
),
)
);
}


add_shortcode('callout_cta', "output_callout_cta");

function output_callout_cta($atts, $content, $tags)
{

//Callout Section Variables
$coIntro = $atts['callout-intro'];
$coText = $content;
$coColor = $atts['callout-color'];

//Call to Action Section Variables
$ctaTitle = $atts['cta-title'];
$ctaDetails = $atts['cta-details'];
$ctaBtn = vc_build_link($atts['cta-link']);
$ctaColor = $atts['cta-color'];
$reverse = "container-flex--reverse";

//Start of Parent Div
if ($atts['reverse'] == 'true') {
$output .= "<div class=\"container-flex $reverse\">";
} else {
$output .= "<div class=\"container-flex\">";
}

//Start Child Div
$output .= "<div class=\"col-1-of-2\">";
if ($coIntro != '') {
$output .= "<p class=\"paragraph\">{$coIntro}</p>";
}
if ($coText != '') {
$output .= "<div class=\"callout-2 {$coColor}\">{$coText}</div>";
}
$output .= "</div>";

//Start Child Div
$output .= "<div class=\"col-1-of-2 flex-align--center\">";
$output .= "<div class=\"cta-box cta-box--{$ctaColor}\">";
$output .= "<div class=\"cta-box__header\">{$ctaTitle}</div>";
$output .= "<div class=\"cta-box__body\">";
$output .= " <p class=\"paragraph\">{$ctaDetails}</p>";
$output .= "</div>";
$output .= "<div class=\"cta-box__cta\">";
if ($ctaBtn['url'] != '') {
$output .= "<a href=\"{$ctaBtn['url']}\" target=\"{$ctaBtn['target']}\" class=\"btn btn--{$ctaColor}\">{$ctaBtn['title']}</a>";
}
$output .= "</div>";
$output .= "</div>";

//End Parent Div
$output .= "</div>";
return $output;
}