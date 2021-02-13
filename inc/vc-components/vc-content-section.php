<?php 

add_action("vc_before_init", "section_integrateWithVC");

function section_integrateWithVC()
{
vc_map(
array(
"name" => __("Content Section", "my-text-domain"),
"base" => "content_section",
"icon" => get_template_directory_uri() . "",
"category" => __("Components", "my-text-domain"),
"params" => array(
    array(
        "type" => "textarea_html",
        "holder" => "div",
        "class" => "",
        "heading" => __("Content", "my-text-domain"),
        "param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "group" => "Content",
        "description" => __("Enter your content.", "my-text-domain"),
        'save_always' => true,
    ),
),
)
);
}

//Add shortcode by passing function that outputs html

add_shortcode("content_section", "output_section");

function output_section($atts, $content, $tags)
{
$content = wpb_js_remove_wpautop($content, true);
$output .= "<div class=\"section-container\">";
$output .= $content;
$output .= "</div>";
return $output;
}