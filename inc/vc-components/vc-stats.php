<?php

//**STATS COMPONENT

add_action('vc_before_init', 'stats_integrateWithVC');

function stats_integrateWithVC()
{
vc_map(
array(
"name" => __("Stats", "my-text-domain"),
"base" => "stats",
"class" => "",
"icon" => get_template_directory_uri . "",
"category" => __("Components", "my-text-domain"),
"params" => array(
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Heading", "my-text-domain"),
        "param_name" => "heading", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter heading text.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Stat 1 Number", "my-text-domain"),
        "param_name" => "stat_num_1", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter stat number.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Stat 1 Name", "my-text-domain"),
        "param_name" => "stat_name_1", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter stat name.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Stat 1 Icon', "my-text-domain"),
        "param_name" => "stat_icon_1",
        "value" => array(
            __('Audience', "my-text-domain") => 'icon-group',
            __('Mic', "my-text-domain") => 'icon-mic',
            __('Film', "my-text-domain") => 'icon-movie',
        ),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Stat 2 Number", "my-text-domain"),
        "param_name" => "stat_num_2", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter stat number.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Stat 2 Name", "my-text-domain"),
        "param_name" => "stat_name_2", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter stat name.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Stat 2 Icon', "my-text-domain"),
        "param_name" => "stat_icon_2",
        "value" => array(
            __('Audience', "my-text-domain") => 'icon-group',
            __('Mic', "my-text-domain") => 'icon-mic',
            __('Film', "my-text-domain") => 'icon-movie',
        ),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Stat 3 Number", "my-text-domain"),
        "param_name" => "stat_num_3", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter stat number.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Stat 3 Name", "my-text-domain"),
        "param_name" => "stat_name_3", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter stat name.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Stat 3 Icon', "my-text-domain"),
        "param_name" => "stat_icon_3",
        "value" => array(
            __('Audience', "my-text-domain") => 'icon-group',
            __('Mic', "my-text-domain") => 'icon-mic',
            __('Film', "my-text-domain") => 'icon-movie',
        ),
        'save_always' => true,
    ),
),
)
);
}

add_shortcode('stats', 'output_stats');

function output_stats($atts, $content, $tag)
{
$heading = $atts['heading'];
$stat1 = $atts['stat_num_1'];
$output = "";

//Start of Parent Div
$output .= "<div class=\"stats\">";

$output .= "<h1 class=\"stats__header header header--white\">{$atts['heading']}</h1>";

//Start of Stat Container Div
$output .= "<div class=\"stats__container\">";

for ($x = 1; $x <= 3; $x++) {
//Start of Child Div
$output .= "<div class=\"stats__col\">";

//Start of Grandchild Div
$output .= "<div class=\"stats__content\">";

//Start of Great Grandchild
$output .= "<div class=\"stats__info\">";
$output .= "<div class=\"stats__number\">{$atts['stat_num_' . $x]}</div>";
$output .= "<div class=\"stats__detail\">{$atts['stat_name_' . $x]}</div>";
$output .= "</div>";

//Start of Great Grandchild
$output .= "<div class=\"stats__icon\">";
$output .= "<svg class=\"stats__icon\">";
$output .= "<use xlink:href=" . THEME_IMG_PATH . "/sprite.svg#" . $atts['stat_icon_' . $x] . "></use>";
$output .= "</svg>";
$output .= "</div>";

//End of Grandchild  Div
$output .= "</div>";

//End of Child Div
$output .= "</div>";
}

//End of Stat Container
$output .= "</div>";

//End of Parent Div
$output .= "</div>";

return $output;
}