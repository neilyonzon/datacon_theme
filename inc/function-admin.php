<?php

/*

@package datacon-refresh

    ==========================

        ADMIN PAGE


     ==========================

*/

function datacon_add_admin_page() {
    // Generate Datacon Admin Page
    add_menu_page('Datacon Theme Options', 'Theme Settings', 'manage_options', 'datacon_refresh', 'datacon_refresh_theme_create_page', 'dashicons-admin-customizer', 60);

    //Generate Datacon Admin Sub Pages
    add_submenu_page('datacon_refresh', 'Datacon Theme Options', 'General', 'manage_options', 'datacon_refresh', 'datacon_refresh_theme_create_page');

    //New Settings
    add_submenu_page('datacon_refresh', 'Datacon Refresh Footer', 'Footer', 'manage_options', 'datacon_refresh_footer', 'sunset_theme_footer_page');
}

add_action('admin_menu', 'datacon_add_admin_page' );

function datacon_refresh_theme_create_page() {
    //generation of admin page
    require_once(get_template_directory().'/inc/templates/datacon-admin.php');
}


function sunset_theme_footer_page() {
    echo '<h1>Footer Configuration</h1>';
}