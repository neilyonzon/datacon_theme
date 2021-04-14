<?php 

/**TOPICS SECTION */
add_action("vc_before_init", "panels_section_integrateWithVC");

function panels_section_integrateWithVC() 
{
vc_map(
array(
"name" => __("Panels Section", "my-text-domain"),
"base" => "panels_section",
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
        "heading" => __("Panel 1 Title", "my-text-domain"),
        "param_name" => "panel_title_1",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel title", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 1 Description", "my-text-domain"),
        "param_name" => "panel_desc_1",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 2 Title", "my-text-domain"),
        "param_name" => "panel_title_2",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel title", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 2 Description", "my-text-domain"),
        "param_name" => "panel_desc_2",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 3 Title", "my-text-domain"),
        "param_name" => "panel_title_3",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel title", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 3 Description", "my-text-domain"),
        "param_name" => "panel_desc_3",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 4 Title", "my-text-domain"),
        "param_name" => "panel_title_4",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel title", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 4 Description", "my-text-domain"),
        "param_name" => "panel_desc_4",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 5 Title", "my-text-domain"),
        "param_name" => "panel_title_5",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel title", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 5 Description", "my-text-domain"),
        "param_name" => "panel_desc_5",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 6 Title", "my-text-domain"),
        "param_name" => "panel_title_6",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel title", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 6 Description", "my-text-domain"),
        "param_name" => "panel_desc_6",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 7 Title", "my-text-domain"),
        "param_name" => "panel_title_7",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel title", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 7 Description", "my-text-domain"),
        "param_name" => "panel_desc_7",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 8 Title", "my-text-domain"),
        "param_name" => "panel_title_8",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel title", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 8 Description", "my-text-domain"),
        "param_name" => "panel_desc_8",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel description", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 9 Title", "my-text-domain"),
        "param_name" => "panel_title_9",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel title", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textarea",
        "holder" => "div",
        "class" => "",
        "heading" => __("Panel 9 Description", "my-text-domain"),
        "param_name" => "panel_desc_9",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter panel description", "my-text-domain"),
        'save_always' => true,
    ),
),
)
);
}

add_shortcode("panels_section", "output_panels_section");

function output_panels_section($atts, $content, $tags) 
{
//Call to Action Section Variables
$output = '';
$heading = $atts['heading'];
$color = $atts['color'];

//Start of Top Div
$output .= '<div class="panels panels--'.$color.'" style="background-image:url('. THEME_IMG_PATH .'/data_graphic.jpg)">';

$output .= '<div class="panels__overlay"></div>';


//Header 
if ($heading != "") {
    $output .= '<h3 class="panels__header header header--' . $color .'">'.$heading.'</h3>';
}

//Panels
$output .= '<div class="panels__items-container">';
for ($x = 1; $x <= 10; $x++) {
    if ($atts['panel_title_'. $x] != ''){
    $output .= '<div class="panels__item">';
    $output .= ' <h4 class="panels__item-title">'. $atts['panel_title_'. $x] .'</h4>';
    $output .= '<div class="panels__item-description">';
    $output .= '<p>'.$atts['panel_desc_'. $x].'</p>';
    $output .= "</div>";
    $output .= '</div>';
  }
}
$output .= '<i class="panels__item"></i>';
$output .= '<i class="panels__item"></i>';
$output .= '<i class="panels__item"></i>';
$output .= '</div>';


//End of Top Div
$output .= '</div>';

return $output;

}