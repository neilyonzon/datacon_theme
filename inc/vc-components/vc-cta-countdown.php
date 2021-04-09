<?php 

add_action("vc_before_init", "cta_countdown_integrateWithVC");

function cta_countdown_integrateWithVC()
{
vc_map(
array(
"name" => __("Call to Action with Countdown Feature", "my-text-domain"),
"base" => "cta_countdown",
"icon" => get_template_directory_uri() . "",
"category" => __("Components", "my-text-domain"),
"params" => array(
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

add_shortcode("cta_countdown", "output_cta_countdown");

function output_cta_countdown($atts, $content, $tags)
{
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
$output .= "<div class=\"col-1-of-2 flex-align--center\">";
$output .= "<div class=\"cta-box cta-box--{$ctaColor}\">";
$output .= "<div class=\"cta-box__header\">{$ctaTitle}</div>";
$output .= "<div class=\"cta-box__body\">";
$output .= " <p class=\"paragraph\">{$ctaDetails}</p>";
$output .= "</div>";
$output .= "<div class=\"cta-box__cta\">";
if ($ctaBtn['url'] != '') {
$output .= "<a href=\"{$ctaBtn['url']}\" class=\"btn btn--{$ctaColor}\">{$ctaBtn['title']}</a>";
}
$output .= "</div>";
$output .= "</div>";
$output .= "</div>";

//Start of Child Div
$output .= "<div class=\"col-1-of-2 flex-align--center\">
<div class=\"countdown\">
<div class=\"countdown__subtitle\">Save the Date</div>
<div class=\"countdown__title\">September 17, 2021</div>
<div class=\"countdown__timer timer\">
<div class=\"timer__item\">
<div class=\"timer__number timer__number--days\"></div>
<div class=\"timer__detail timer__detail--days\">Days</div>
</div>
<div class=\"timer__item\">
<div class=\"timer__number timer__number--hours\"></div>
<div class=\"timer__detail timer__detail--hours\">Hours</div>
</div>
<div class=\"timer__item\">
<div class=\"timer__number timer__number--minutes\"></div>
<div class=\"timer__detail timer__detail--minutes\">minutes</div>
</div>
<div class=\"timer__item\">
<div class=\"timer__number timer__number--seconds\"></div>
<div class=\"timer__detail timer__detail--seconds\">seconds</div>
</div>
</div>
</div>
</div>";

//End Parent Div
$output .= "</div>";
return $output;
}