<?php 

/*

@package datacon-refresh

    ==========================

        Walker Class Extension

     ==========================

*/

class Walker_Nav_Primary extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array()) { // handles the ul
        //Variable that is used to create indents in the HTML code
        $indent = str_repeat("\t",$depth);
        $submenu = ($depth > 0 ) ? 'subnav': '';
        $output  .= "\n$indent<ul class=\"subnav__nav$submenu depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0) { //li a span (manages the markup of the li a)
        $indent = ($depth) ? str_repeat("\t",$depth) : '';

        $li_attributes = '';

        //Create variable that will hold all classes for each li element
        $class_names = $value = '';


        $classes = empty($item -> classes) ? 'array()' : (array) $item -> classes;
        
        $classes[] = ($args -> walker-> has_children) ? 'subnav' : '';
        $classes[] = ($item -> current || $item -> current_item_ancestor) ? 'active' : '';
        $classes[] = 'nav__item';


        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = 'class = "' . esc_attr($class_names) . '"';

        //The commented code below creates an id variable that would be used for the LI. This is not needed so commenting out.
        // $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item-> ID, $item, $args);
        // $id = strlen( $id ) ? ' id="' . esc_attr($id) . '"' : '';
        $output .= $indent . '<li ' . $value . $class_names . $li_attributes . '>';
        $attributes = ! empty( $item -> attr_title ) ? ' title = "' . esc_attr($item -> attr_title) . '"' : '';
        $attributes .= ! empty ($item -> target) ? ' target= "' . esc_attr($item -> target) . '"' : '';
        $attributes .= ! empty ($item -> xfn) ? ' rel= "' . esc_attr($item -> xfn) . '"' : '';
        $attributes .= ! empty ($item -> url) ? ' href= "' . esc_attr($item -> url) . '"' : '';
        $attributes .= 'class = "nav__link"';
        $item_output  = $args-> before;
        $item_output .= '<a' . $attributes .'>';
        $item_output .= $args-> link_before . apply_filters( 'the_title', $item -> title, $item-> ID) . $args -> link_after;
        $item_output .= ($depth == 0 && $args-> walker-> has_children) ? '</a>
        <svg class="subnav__icon">
            <use
                xlink:href="' .  get_template_directory_uri() . '/img/sprite.svg#icon-chevron-thin-down">
            </use>
        </svg>' : '</a>';
        $item_output .= $args -> after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}