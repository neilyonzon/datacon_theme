<?php

//Hero Banner Component

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
$output = '';
$output .= '<div class="hero">';
if ($image_src != '') {
$output .= '<img src="' . $image_src . '" alt="' . $image_alt . '" class="hero__img">';
}
$output .= '
<div class="hero__overlay"></div>
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
$output .= '<div class="hero__subline">';
if ($sub_heading != '') {
$output .= $sub_heading;
}
$output .= '</div>';

$output .= '<div class="hero__description">';
if ($content != '') {
$output .= $content;
}
$output .= '</div>';
if ($cta['url'] != '') {
$output .= ' <a href="' . $cta['url'] . '" class="btn btn--quaternary">' . $cta['title'] . '</a>';
}
$output .= '</div>';
return $output;
}

//Callout with Description
add_action('vc_before_init', 'callout_integrateWithVC');

function callout_integrateWithVC()
{
vc_map(
array(
    "name" => __("Callout with Description", "my-text-domain"),
    "base" => "callout_desc",
    "class" => "",
    "icon" => get_template_directory_uri() . "",
    "category" => __("Components", "my-text-domain"),
    "params" => array(
        array(
            "type" => "textarea",
            "holder" => "div",
            "class" => "",
            "heading" => __("Callout", "my-text-domain"),
            "param_name" => "callout", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
            "value" => __("Enter Text", "my-text-domain"),
            "description" => __("Enter callout content.", "my-text-domain"),
            'save_always' => true,
        ),
        array(
            "type" => "dropdown",
            "holder" => "div",
            "heading" => __('Callout Color', "my-text-domain"),
            "param_name" => "callout-color",
            "value" => array(
                __('Blue', "my-text-domain") => 'callout--primary',
                __('Purple', "my-text-domain") => 'callout--secondary',
                __('Orange', "my-text-domain") => 'callout--tertiary',
            ),
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
            "type" => "checkbox",
            "holder" => "div",
            "class" => "",
            "heading" => __("Reverse Content", "my-text-domain"),
            "param_name" => "reverse", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
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

add_shortcode('callout_desc', 'output_callout_desc');

function output_callout_desc($atts, $content, $tag)
{
$callout = $atts['callout'];
$calloutColor = $atts['callout-color'];
$description = $content;
$reverse = "container-flex--reverse";

//start of parent div

if ($atts['reverse'] == 'true') {
$output .= "<div class=\"container-flex $reverse\">";
} else {
$output .= "<div class=\"container-flex\">";
}

//start of child div
$output .= "<div class=\"col-1-of-2\">";
$output .= "<div class=\"callout {$calloutColor}\">{$callout}</div>";
$output .= "</div>";

//start of child div
$output .= "<div class=\"col-1-of-2 flex-align--center headspace-s--m\">";
$output .= "<p>$description</p>";
$output .= "</div>";

//start of parent div
$output .= "</div>";
return $output;
}

//Stats Component

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
            "group" => "Stat 1",
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
            "group" => "Stat 1",
            "heading" => __("Stat 1 Name", "my-text-domain"),
            "param_name" => "stat_name_1", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
            "value" => __("Enter Text", "my-text-domain"),
            "description" => __("Enter stat name.", "my-text-domain"),
            'save_always' => true,
        ),
        array(
            "type" => "dropdown",
            "holder" => "div",
            "group" => "Stat 1",
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
            "group" => "Stat 2",
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
            "group" => "Stat 2",
            "heading" => __("Stat 2 Name", "my-text-domain"),
            "param_name" => "stat_name_2", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
            "value" => __("Enter Text", "my-text-domain"),
            "description" => __("Enter stat name.", "my-text-domain"),
            'save_always' => true,
        ),
        array(
            "type" => "dropdown",
            "holder" => "div",
            "group" => "Stat 2",
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
            "group" => "Stat 3",
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
            "group" => "Stat 3",
            "heading" => __("Stat 3 Name", "my-text-domain"),
            "param_name" => "stat_name_3", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
            "value" => __("Enter Text", "my-text-domain"),
            "description" => __("Enter stat name.", "my-text-domain"),
            'save_always' => true,
        ),
        array(
            "type" => "dropdown",
            "holder" => "div",
            "group" => "Stat 3",
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
$stat1 = $atts['stat_num_1'];
$output = "";

//Start of Parent Div
$output .= "<div class=\"stats\">";

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

//End of Parent Div
$output .= "</div>";

return $output;
}

//Callout with Call to Action Box

//Add hook and function

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

//Create shortcut and function

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
$output .= "<a href=\"{$ctaBtn['url']}\" class=\"btn btn--{$ctaColor}\">{$ctaBtn['title']}</a>";
}
$output .= "</div>";
$output .= "</div>";

//End Parent Div
$output .= "</div>";
return $output;
}

//Callout with Call to Action Box

//Add action hook to hook on vc_before_init and pass function to create shortcut

add_action("vc_before_init", "video_player_integrateWithVC");

//Create Function to Build VC Custom Settings Page
function video_player_integrateWithVC()
{
vc_map(
array(
    "name" => __("Video Player Full-Width", "my-text-domain"),
    "base" => "video_player",
    "icon" => get_template_directory_uri . "",
    "category" => __("Components", "my-text-domain"),
    "params" => array(
        array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __("Intro Text", "my-text-domain"),
            "param_name" => "video-intro", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
            "value" => __("Enter Text", "my-text-domain"),
            "description" => __("Enter introduction text.", "my-text-domain"),
            'save_always' => true,
        ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __("Header", "my-text-domain"),
            "param_name" => "video-header", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
            "value" => __("Enter Text", "my-text-domain"),
            "description" => __("Enter header text.", "my-text-domain"),
            'save_always' => true,
        ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __("Button text", "my-text-domain"),
            "param_name" => "video-button-text", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
            "value" => __("Enter Text", "my-text-domain"),
            "description" => __("Enter button text.", "my-text-domain"),
            'save_always' => true,
        ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __("YouTube URL", "my-text-domain"),
            "param_name" => "video-url", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
            "value" => __("", "my-text-domain"),
            "description" => __("Enter YouTube URL (e.g. https://www.youtube.com/watch?v=CWR3n8Ifsv0)", "my-text-domain"),
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
            "heading" => __('Background Color', "my-text-domain"),
            "param_name" => "bg-color",
            "value" => array(
                __('Blue', "my-text-domain") => 'primary',
                __('Purple', "my-text-domain") => 'secondary',
            ),
            "description" => __("Select the background color.", "my-text-domain"),
            'save_always' => true,
        ),
    ),
)
);
}

//Use add_shortcode function to add new shortcode and pass parameters to it

add_shortcode("video_player", "output_video_player");

function output_video_player($atts, $content, $tags)
{
$intro = $atts['video-intro'];
$header = $atts['video-header'];
$buttonText = $atts['video-button-text'];
$image_src = wp_get_attachment_image_src($atts['bg_image'], 'full')[0];
$image_alt = get_post_meta($atts['bg_image'], '_wp_attachment_image_alt', true);
if ($atts['video-url'] != '') {
$url = $atts['video-url'];
} else {
$url = 'https://www.youtube.com/watch?v=CWR3n8Ifsv0';
}
if ($atts['bg-color'] == 'primary') {
$bg_color = 'primary';
$btn_color = 'secondary';
} else {
$bg_color = 'secondary';
$btn_color = 'primary';
}
$output = '';
$output .= '<div class="media-banner">';
$output .= '<img src="' . $image_src . '" alt="' . $image_alt . '" class="media-banner__img">';
$output .= '<div class="media-banner__overlay media-banner__overlay--' . $bg_color . '">';
$output .= '<div class="media-banner__intro-text">' . $intro . '</div>';
$output .= '<div class="media-banner__header">' . $header . '</div>';
$output .= '<div class="media-banner__cta">';
$output .= '<a class="btn btn--' . $btn_color . ' media-banner__btn" href="' . $url . '">' . $buttonText . '</a>';
$output .= '</div>';
$output .= '<div class="media-banner__line">';
$output .= '</hr>';
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';
return $output;
}

//Call to Action box with Countdown

//Add action hook to hook on to vc_before_init and pass function to create shortcut

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
<div class=\"countdown__title\">Nov 9, 2021</div>
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

//Add Action hook onto visual composer hook to add visual composer option.

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
            "value" => __("<p>I am test text block. Click edit button to change this text.</p>", "my-text-domain"),
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
$output .= "<div class=\"section-container\">";
$output .= $content;
$output .= "</div>";
return $output;
}

//********________About Section
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