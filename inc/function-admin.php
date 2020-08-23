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

function datacon_footer_settings() {
    add_settings_section('datacon-cta-options', 'Call to Action Settings', 'datacon_cta_options', 'datacon_refresh' );
    
    register_setting('datacon-footer-settings-group', 'cta_promp_text');
    add_settings_field('cta-prompt', 'Call to Action Prompt', 'footer_cta_prompt', 'datacon_refresh', 'datacon-cta-options');

    register_setting('datacon-footer-settings-group', 'btn_text');
    add_settings_field('btn-text', 'Button Text', 'footer_btn_text', 'datacon_refresh', 'datacon-cta-options');
}

function datacon_cta_options() {
    echo 'Customize your footer information';
}

function footer_cta_prompt() {
    $ctaPrompt = esc_attr(get_option( 'cta_promp_text'));
    echo '<input type="text" name="cta_promp_text" value="'.$ctaPrompt.'" placeholder=""/>';
}

function footer_btn_text() {
    $btnText = esc_attr(get_option( 'btn_text'));
    echo '<input type="text" name="btn_text" value="'.$btnText.'" placeholder=""/>';
}

function datacon_refresh_theme_create_page() {
    //generation of admin page
    require_once(get_template_directory().'/inc/templates/datacon-admin.php');
}


function sunset_theme_footer_page() {
    //generation of footer admin page
    require_once(get_template_directory(). '/inc/templates/footer-admin.php');
}