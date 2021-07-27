<?php 

/**TOPICS SECTION */
add_action("vc_before_init", "image_grid_integrateWithVC");

function image_grid_integrateWithVC() 
{
vc_map(
array(
"name" => __("Image Grid", "my-text-domain"),
"base" => "image_grid",
"class" => "",
"icon" => get_template_directory_uri() . "",
"category" => __("Components", "my-text-domain"),
"params" => array(
    array(
        "type" => "textfield",
        "holder" => "div",
        "group" => "General",
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
        "group" => "General",
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
        "group" => "Section 1",
        "class" => "",
        "heading" => __("Sub Heading 1", "my-text-domain"),
        "param_name" => "subheading_1",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter text for headline.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 1",
        "class" => "",
        "heading" => __("Image 1", "my-text-domain"),
        "param_name" => "image_a_1",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 1",
        "class" => "",
        "heading" => __("Image 2", "my-text-domain"),
        "param_name" => "image_a_2",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 1",
        "class" => "",
        "heading" => __("Image 3", "my-text-domain"),
        "param_name" => "image_a_3",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 1",
        "class" => "",
        "heading" => __("Image 4", "my-text-domain"),
        "param_name" => "image_a_4",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 1",
        "class" => "",
        "heading" => __("Image 5", "my-text-domain"),
        "param_name" => "image_a_5",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 1",
        "class" => "",
        "heading" => __("Image 6", "my-text-domain"),
        "param_name" => "image_a_6",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "group" => "Section 2",
        "class" => "",
        "heading" => __("Sub Heading 2", "my-text-domain"),
        "param_name" => "subheading_2",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter text for headline.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 2",
        "class" => "",
        "heading" => __("Image 1", "my-text-domain"),
        "param_name" => "image_b_1",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 2",
        "class" => "",
        "heading" => __("Image 2", "my-text-domain"),
        "param_name" => "image_b_2",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 2",
        "class" => "",
        "heading" => __("Image 3", "my-text-domain"),
        "param_name" => "image_b_3",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 2",
        "class" => "",
        "heading" => __("Image 4", "my-text-domain"),
        "param_name" => "image_b_4",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 2",
        "class" => "",
        "heading" => __("Image 5", "my-text-domain"),
        "param_name" => "image_b_5",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 2",
        "class" => "",
        "heading" => __("Image 6", "my-text-domain"),
        "param_name" => "image_b_6",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "textfield",
        "holder" => "div",
        "group" => "Section 3",
        "class" => "",
        "heading" => __("Sub Heading 3", "my-text-domain"),
        "param_name" => "subheading_3",
        "value" => __("", "my-text-domain"),
        "description" => __("Enter text for headline.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 3",
        "class" => "",
        "heading" => __("Image 1", "my-text-domain"),
        "param_name" => "image_c_1",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 3",
        "class" => "",
        "heading" => __("Image 2", "my-text-domain"),
        "param_name" => "image_c_2",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 3",
        "class" => "",
        "heading" => __("Image 3", "my-text-domain"),
        "param_name" => "image_c_3",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 3",
        "class" => "",
        "heading" => __("Image 4", "my-text-domain"),
        "param_name" => "image_c_4",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 3",
        "class" => "",
        "heading" => __("Image 5", "my-text-domain"),
        "param_name" => "image_c_5",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
    array(
        "type" => "attach_image",
        "holder" => "div",
        "group" => "Section 3",
        "class" => "",
        "heading" => __("Image 6", "my-text-domain"),
        "param_name" => "image_c_6",
        'admin_label' => true,
        "description" => __("Choose an image.", "my-text-domain"),
        'save_always' => true,
    ),
),
)
);
}

add_shortcode("image_grid", "output_image_grid");

function output_image_grid($atts, $content, $tags) 
{
//Call to Action Section Variables
$output = '';
$heading = $atts['heading'];
$color = $atts['color'];

//Start of Top Divs
$output .= '<div class="image-grid">';

$output .= '<div class="image-grid__container">';

$output .= '<h2 class="header header--primary">'.$heading.'</h2>';


//Sections
for ($x = 1; $x <= 3; $x++) {

    if ($atts['subheading_'. $x] != '') {
        $output .= $atts['subheading_'. $x];
    }

  }

$output .= '<i class="panels__item"></i>';
$output .= '<i class="panels__item"></i>';
$output .= '<i class="panels__item"></i>';
$output .= '</div>';

//End of Top Divs
$output .= '</div>';
$output .= '</div>';

return $output;

}