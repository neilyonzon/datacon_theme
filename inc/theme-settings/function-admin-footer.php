<?php 

function datacon_footer_settings() {

    //Call to Action Settings Group
    add_settings_section('datacon-cta-options', 'Call to Action Settings', 'datacon_cta_options', 'datacon_refresh' );
    add_settings_section('datacon-social-links', 'Social URLs', 'datacon_social_links', 'datacon_refresh');
    
    register_setting('datacon-footer-settings-group', 'cta_promp_text');
    add_settings_field('cta-prompt', 'Call to Action Prompt', 'footer_cta_prompt', 'datacon_refresh', 'datacon-cta-options');

    register_setting('datacon-footer-settings-group', 'btn_text');
    add_settings_field('btn-text', 'Button Text', 'footer_btn_text', 'datacon_refresh', 'datacon-cta-options');

    register_setting('datacon-footer-settings-group', 'btn_url');
    add_settings_field('btn-url', 'Button URL', 'footer_btn_url','datacon_refresh', 'datacon-cta-options');

    //Social URL Settings Group
    register_setting('datacon-footer-settings-group', 'ln_link');
    add_settings_field('ln-link', 'LinkedIn URL', 'footer_ln_url','datacon_refresh', 'datacon-social-links');

    register_setting('datacon-footer-settings-group', 'twitter_link');
    add_settings_field('twitter-link', 'Twitter URL', 'footer_twit_url', 'datacon_refresh', 'datacon-social-links');

    register_setting('datacon-footer-settings-group', 'twitter_link');
    add_settings_field('twitter-link', 'Twitter URL', 'footer_twit_url', 'datacon_refresh', 'datacon-social-links');

    register_setting('datacon-footer-settings-group', 'twitter_link');
    add_settings_field('twitter-link', 'Twitter URL', 'footer_twit_url', 'datacon_refresh', 'datacon-social-links');

    register_setting('datacon-footer-settings-group', 'twitter_link');
    add_settings_field('twitter-link', 'Twitter URL', 'footer_twit_url', 'datacon_refresh', 'datacon-social-links');

    register_setting('datacon-footer-settings-group', 'fb_link');
    add_settings_field('facebook-link', 'Facebook URL', 'footer_fb_url', 'datacon_refresh', 'datacon-social-links');

    register_setting('datacon-footer-settings-group', 'ig_link');
    add_settings_field('ig-link', 'Instagram URL', 'footer_ig_url', 'datacon_refresh', 'datacon-social-links');

    register_setting('datacon-footer-settings-group', 'youtube_link');
    add_settings_field('youtube-link', 'YouTube URL', 'footer_youtube_url', 'datacon_refresh', 'datacon-social-links');

    register_setting('datacon-footer-settings-group', 'mail_link');
    add_settings_field('mail-link', 'Mail Link', 'footer_mail_url', 'datacon_refresh', 'datacon-social-links');
}

//Call to Action Functions
function datacon_cta_options() {
    echo 'Customize your footer information';
}

function footer_cta_prompt() {
    $ctaPrompt = esc_attr(get_option( 'cta_promp_text'));
    echo '<input type="text" name="cta_promp_text" value="'.$ctaPrompt.'" placeholder=""/>';
}

function footer_btn_text() {
    $btnText = esc_attr(get_option( 'btn_text'));
    echo '<input type="text" name="btn_text" value="'.$btnText.'" placeholder="">';
}

function footer_btn_url() {
    $btnurl = esc_attr(get_option('btn_url'));
    echo '<input type="text" name="btn_url" value="'.$btnurl.'" placeholder="" aria-describedby="btn-url-helper-text"/>
         <p class="btn-url-helper-text" aria-hidden="true">If using an email, prepend email with "mailto" e.g. mailto:mailto:subash@dataconla.com</p>'
            ;
}

//Social URL Functions
function datacon_social_links() {
    echo 'Add social links';
}

function footer_ln_url() {
    $lnUrl = esc_attr(get_option('ln_link'));
    echo '<input type="text" name="ln_link" value="'.$lnUrl.'" placeholder=""/>';
}

function footer_twit_url() {
    $twittUrl = esc_attr(get_option('twitter_link'));
    echo '<input type="text" name="twitter_link" value="'.$twittUrl.'" placeholder=""/>';
}

function footer_fb_url() {
    $fb = esc_attr(get_option('fb_link'));
    echo '<input type="text" name="fb_link" value="'. $fb .'" placeholder=""/>';
}

function footer_ig_url() {
    $ig = esc_attr(get_option('ig_link'));
    echo '<input type="text" name="ig_link" value="'. $ig .'" placeholder=""/>';
}

function footer_youtube_url() {
    $ty = esc_attr(get_option('youtube_link'));
    echo '<input type="text" name="youtube_link" value="'. $ty .'" placeholder=""/>';
}

function footer_mail_url() {
    $mail = esc_attr(get_option('mail_link'));
    echo '<input type="text" name="mail_link" value="'.$mail.'" placeholder = ""/>';
}