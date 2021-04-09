<?php 

/**TOPICS SECTION */
add_action("vc_before_init", "topicsSection_integrateWithVC");

function topicsSection_integrateWithVC() 
{
vc_map(
array(
"name" => __("Topics Section", "my-text-domain"),
"base" => "topics_section",
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
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Disclaimer", "my-text-domain"),
        "param_name" => "disclaimer",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter disclaimer. This will be displayed below the list of topics.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Topic 1 Icon', "my-text-domain"),
        "param_name" => "topic_icon_1",
        "value" => icons(),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Topic 1 Text", "my-text-domain"),
        "param_name" => "topic_text_1",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter topic description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Topic 2 Icon', "my-text-domain"),
        "param_name" => "topic_icon_2",
        "value" => icons(),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Topic 2 Text", "my-text-domain"),
        "param_name" => "topic_text_2",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter topic description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Topic 3 Icon', "my-text-domain"),
        "param_name" => "topic_icon_3",
        "value" => icons(),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Topic 3 Text", "my-text-domain"),
        "param_name" => "topic_text_3",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter topic description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Topic 4 Icon', "my-text-domain"),
        "param_name" => "topic_icon_4",
        "value" => icons(),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Topic 4 Text", "my-text-domain"),
        "param_name" => "topic_text_4",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter topic description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Topic 5 Icon', "my-text-domain"),
        "param_name" => "topic_icon_5",
        "value" => icons(),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Topic 5 Text", "my-text-domain"),
        "param_name" => "topic_text_5",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter topic description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Topic 6 Icon', "my-text-domain"),
        "param_name" => "topic_icon_6",
        "value" => icons(),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Topic 6 Text", "my-text-domain"),
        "param_name" => "topic_text_6",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter topic description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "dropdown",
        "holder" => "div",
        "heading" => __('Topic 7 Icon', "my-text-domain"),
        "param_name" => "topic_icon_7",
        "value" => icons(),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Topic 7 Text", "my-text-domain"),
        "param_name" => "topic_text_7",
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter topic description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight Heading", "my-text-domain"),
        "param_name" => "speaker-heading", 
        "value" => __("", "my-text-domain"),
        "description" => __("Enter heading to be displayed above speakers.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 1 Name", "my-text-domain"),
        "param_name" => "speaker-name-1", 
        "value" => __("", "my-text-domain"),
        "description" => __("Enter name of speaker.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 1 Title", "my-text-domain"),
        "param_name" => "speaker-title-1", 
        "value" => __("", "my-text-domain"),
        "description" => __("Enter title of speaker.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 1 Panel", "my-text-domain"),
        "param_name" => "speaker-panel-1", 
        "value" => __("", "my-text-domain"),
        "description" => __("Enter the panel or session speaker was in.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 1 Image", "my-text-domain"),
        "param_name" => "speaker-image-1",
        'admin_label' => true,
        "description" => __("Choose image for speaker.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 2 Name", "my-text-domain"),
        "param_name" => "speaker-name-2", 
        "value" => __("", "my-text-domain"),
        "description" => __("Enter name of speaker.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 2 Title", "my-text-domain"),
        "param_name" => "speaker-title-2", 
        "value" => __("", "my-text-domain"),
        "description" => __("Enter title of speaker.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 2 Panel", "my-text-domain"),
        "param_name" => "speaker-panel-2", 
        "value" => __("", "my-text-domain"),
        "description" => __("Enter the panel or session speaker was in.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 2 Image", "my-text-domain"),
        "param_name" => "speaker-image-2",
        'admin_label' => true,
        "description" => __("Choose image for speaker.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 3 Name", "my-text-domain"),
        "param_name" => "speaker-name-3", 
        "value" => __("", "my-text-domain"),
        "description" => __("Enter name of speaker.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 3 Title", "my-text-domain"),
        "param_name" => "speaker-title-3", 
        "value" => __("", "my-text-domain"),
        "description" => __("Enter title of speaker.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 3 Panel", "my-text-domain"),
        "param_name" => "speaker-panel-3", 
        "value" => __("", "my-text-domain"),
        "description" => __("Enter the panel or session speaker was in.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "group" => "Speakers Spotlight",
        "holder" => "div",
        "class" => "",
        "heading" => __("Speaker Spotlight 3 Image", "my-text-domain"),
        "param_name" => "speaker-image-3",
        'admin_label' => true,
        "description" => __("Choose image for speaker.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "group" => "Call to Action Section",
        "holder" => "div",
        "class" => "",
        "heading" => __("Description for Call to Action Area", "my-text-domain"),
        "param_name" => "cta-description", 
        "value" => __("Enter Text", "my-text-domain"),
        "description" => __("Enter text for the description in the call to action box.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "vc_link",
        "group" => "Call to Action Section",
        "holder" => "div",
        "class" => "",
        "heading" => __("Call to Action Link", "my-text-domain"),
        "param_name" => "cta-link",
        "value" => __("Enter Link", "my-text-domain"),
        "description" => __("Enter link for call to action button.", "my-text-domain"),
        'save_always' => true,
    ),
),
)
);
}

add_shortcode("topics_section", "output_topics_section");

function output_topics_section($atts, $content, $tags) 
{
//Call to Action Section Variables
$output = '';
$heading = $atts['heading'];
$ctaDescription = $atts['cta-description'];
$ctaLink = vc_build_link($atts['cta-link']);
$image_src = wp_get_attachment_image_src($atts['image'], 'full')[0];
$image_alt = get_post_meta($atts['image'], '_wp_attachment_image_alt', true);
$disclaimer = $atts['disclaimer'];
$color = $atts['color'];
$speaker_heading = $atts['speaker-heading'];

//Start of Top Div
$output .= '<div class="topics-section">';

//Line
$output .= '<hr class="topics-section__line line--' . $color .'" />';

//Image and Overlay

//Topics Area Parent
$output .= '<div class="topics-section__topics">';

//Header 
if ($heading != "") {
    $output .= '<h1 class="topics-section__header header header--' . $color .'">'.$heading.'</h1>';
}

//Topics
$output .= '<ul class="topics-section__list">';
for ($x = 1; $x <= 8; $x++) {
    if ($atts['topic_text_'. $x] != ''){
    $output .= '<li class="topics-section__list-item">';
    $output .= '<svg class="topics-section__icon"><use xlink:href="' . THEME_IMG_PATH . "/sprite.svg#" .  $atts['topic_icon_'. $x] .'"></use>
        </svg>';
    $output .= '<span>'. $atts['topic_text_'. $x].'</span>';
    $output .= '</li>';
  }
}
$output .= '</ul>';
$output .= '<p class="disclaimer">'.$disclaimer.'</p>';


//End of Topics Area Praent
$output .= '</div>';

//Start of Speaker Area Parent
$output .= '<div class="topics-section__speakers">';

//Heading
if ($speaker_heading !='') {
    $output .= '<h3 class="header h3">'.$speaker_heading.'</h3>';
}

//Start of Speaker Spotlight Section
$output .= '<div class="topics-section__speaker-grid">';

for ($x = 1; $x <= 3; $x++) {
$speaker_image_src = wp_get_attachment_image_src($atts['speaker-image-'. $x], 'full')[0];
$speaker_image_alt = get_post_meta($atts['speaker-image-'. $x], '_wp_attachment_image_alt', true);
$speaker_title = $atts['speaker-title-'. $x];
$speaker_name = $atts['speaker-name-'. $x];
$speaker_panel= $atts['speaker-panel-'. $x];
    if ($speaker_name != ''){
        $output .= '<div class="topics-section__speaker-item">';
        $output .= ' <img class="topics-section__speaker-item-img   " src="'.$speaker_image_src.'"
alt="placeholder">';
$output .= '</img>';
$output .= '<p class="topics-section__speaker-panel">'.$speaker_panel.'</p>';
$output .= '<span class="topics-section__speaker-name">'.$speaker_name.'</span>';
if ($speaker_title != '') {
    $output .= '<br /><span class="topics-section__speaker-title">'.$speaker_title.'</span>';
}
$output .= '</div>';
}
}


//End of Speaker Spotlight Section
$output .= '</div>';


//CTA Box
if ($ctaDescription !='') {
$output .= '<div class="topics-section__cta-box-area">';
    $output .= '<div class="topics-section__cta-box cta-box cta-box--'. $color .'">';

        $output .= '<div class="cta-box__body">';
            $output .= '<p class="paragraph">'.$ctaDescription.'</p>';
            $output .= '</div>';

        if ($ctaLink['url'] != '') {
        $output .= '<div class="cta-box__cta">';
            $output .= '<a href="' . $ctaLink['url'] . '" class="btn btn--'. $color .'">' . $ctaLink['title'] . '</a>';
            $output .= '</div>';
        }

        $output .= '</div>';
    $output .= '</div>';
}

//End of Speaker Area Parent
$output .= '</div>';


//End of Top Div
$output .= '</div>';

return $output;

}