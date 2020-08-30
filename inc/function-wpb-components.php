<?php

add_action( 'vc_before_init', 'your_name_integrateWithVC' );
function your_name_integrateWithVC() {
 vc_map( array(
  "name" => __( "Bar tag test", "my-text-domain" ),
  "base" => "bartag",
  "class" => "",
  "category" => __( "Content", "my-text-domain"),
  'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
  'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
  "params" => array(
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Text", "my-text-domain" ),
  "param_name" => "foo",
  "value" => __( "Default param value", "my-text-domain" ),
  "description" => __( "Description for foo param.", "my-text-domain" )
 ),
 array(
  "type" => "colorpicker",
  "class" => "",
  "heading" => __( "Text color", "my-text-domain" ),
  "param_name" => "color",
  "value" => __( '#FFF', "my-text-domain"), //Default Red color
  "description" => __( "Choose text color", "my-text-domain" )
 ),
 array(
  "type" => "textarea_html",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Content", "my-text-domain" ),
  "param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
  "value" => __( "<p>I am test text block. Click edit button to change this text.</p>", "my-text-domain" ),
  "description" => __( "Enter your content.", "my-text-domain" )
 )
  )
 ) );
}


add_shortcode( 'bartag', 'bartag_func' );
function bartag_func( $atts, $content = null) { // New function parameter $content is added!
 $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content
 $color = esc_attr( $atts['color'] );
 return "<div style='color:{$color};' data-foo='${foo}'>{$content}</div>";
}