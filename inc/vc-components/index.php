<?php


//Icons

function icons()
{
    return
        array(
        __('Audience', "my-text-domain") => 'icon-group',
        __('Book', "my-text-domain") => 'icon-book',
        __('Bullhorn', "my-text-domain") => 'icon-bullhorn',
        __('Eye', "my-text-domain") => 'icon-eye',
        __('Film', "my-text-domain") => 'icon-movie',
        __('Hour Glass', "my-text-domain") => 'icon-hour-glass',
        __('Man', "my-text-domain") => 'icon-man',
        __('Message Bubble', "my-text-domain") => 'icon-bubbles2',
        __('Mic', "my-text-domain") => 'icon-mic',
        __('Office', "my-text-domain") => 'icon-office',
        __('Pie Chart', "my-text-domain") => 'icon-pie-chart',
        __('Stats', "my-text-domain") => 'icon-stats-dots',
        __('Rocket', "my-text-domain") => 'icon-rocket',
        __('Woman', "my-text-domain") => 'icon-woman',
        __('Users', "my-text-domain") => 'icon-users',
        );
}

require_once ('vc-about-section.php');
require_once ('vc-about-section.php');
require_once ('vc-callout-description.php');
require_once ('vc-content-section.php');
require_once ('vc-cta-countdown.php');
require_once ('vc-header.php');
require_once ('vc-hero-banner.php');
require_once ('vc-stats.php');
require_once ('vc-topics-section.php');
require_once ('vc-youtube-player.php');





///** HEADER CONTENT 
add_action("vc_before_init", "header_integrateWithVC");

function header_integrateWithVC() 
{
    vc_map(
            array(
                "name" => __("Header", "my-text-domain"),
                "base" => "header",
                "icon" => get_template_directory_uri() . "",
                "category" => __("Components", "my-text-domain"),
                "params" => array(
                    array(
                        "type" => "textarea",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Header Text", "my-text-domain"),
                        "param_name" => "header",
                        "description" => __("Enter the text for the header", "my-text-domain"),
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
                            __('Grey', "my-text-domain") => 'dark',
                        ),
                        'save_always' => true,
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __('Alignment', "my-text-domain"),
                        "param_name" => "alignment",
                        "value" => array(
                            __('Center', "my-text-domain") => 'center',
                            __('Left', "my-text-domain") => 'left',
                            __('Right', "my-text-domain") => 'right',
                        ),
                        'save_always' => true,
                    ),
                ),
            )
        );
}

add_shortcode("header", "output_header");

function output_header($atts) {
    $header = $atts['header'];
    $alignment = ' header--' . $atts['alignment'];
    $color = 'header--' . $atts['color'];
    $output = '';
    if ($header !='') {
        $output .= '<h1 class="header header--solo '. $color . $alignment .' ">'.$header.'</h1>';
    }
    return $output;
}

////** CONTENT SECTION

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