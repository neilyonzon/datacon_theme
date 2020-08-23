<?php 

function datacon_footer_settings() {
    add_settings_section('datacon-cta-options', 'Call to Action Settings', 'datacon_cta_options', 'datacon_refresh' );
    
    register_setting('datacon-footer-settings-group', 'cta_promp_text');
    add_settings_field('cta-prompt', 'Call to Action Prompt', 'footer_cta_prompt', 'datacon_refresh', 'datacon-cta-options');

    register_setting('datacon-footer-settings-group', 'btn_text');
    add_settings_field('btn-text', 'Button Text', 'footer_btn_text', 'datacon_refresh', 'datacon-cta-options');

    register_setting('datacon-footer-settings-group', 'btn_url');
    add_settings_field('btn-url', 'Button URL', 'footer_btn_url','datacon_refresh', 'datacon-cta-options');
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

function footer_btn_url() {
    $btnurl = esc_attr(get_option('btn_url'));
    echo '<input type="text" name="btn_url" value="'.$btnurl.'" placeholder=""/>';
}