<?php 

add_action("vc_before_init", "video_player_integrateWithVC");

//Create Function to Build VC Custom Settings Page
function video_player_integrateWithVC()
{
vc_map(
array(
"name" => __("YouTube Video Player", "my-text-domain"),
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
$output .= '<div class="media-banner__header header">' . $header . '</div>';
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