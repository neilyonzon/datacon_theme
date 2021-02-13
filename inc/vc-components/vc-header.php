<?php

//** HEADER CONTENT 
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