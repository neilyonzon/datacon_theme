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

    //Activate Footer Settings
    add_action('admin_init', 'datacon_footer_settings');
}

add_action('admin_menu', 'datacon_add_admin_page' );

//Create a specific section in the database to record custom group of settings/fields/options

require_once(get_template_directory(). '/inc/theme-settings/function-admin-footer.php');

function datacon_refresh_theme_create_page() {
    //generation of admin page
    require_once(get_template_directory().'/inc/templates/datacon-admin.php');
}


function sunset_theme_footer_page() {
    //generation of footer admin page
    require_once(get_template_directory(). '/inc/templates/footer-admin.php');
}