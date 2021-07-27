<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Datacon_Refresh
 */
$ctaPrompt = esc_attr(get_option('cta_promp_text'));
$btnText = esc_attr(get_option('btn_text'));
$btnUrl = esc_attr(get_option('btn_url'));
$lnUrl = esc_attr(get_option('ln_link'));
$twitterUrl = esc_attr(get_option('twitter_link'));
$fbLink = esc_attr(get_option('fb_link'));
$igUrl = esc_attr(get_option('ig_link'));
$youtubeUrl = esc_attr(get_option('youtube_link'));
$mailUrl = esc_attr(get_option('mail_link'));

?>
<div class="footer-spacer"></div>
<div id="modal-background"></div>
<footer id="colophon" class="site-footer footer">
    <div class="footer__contact">
        <?php

if ($ctaPrompt !== '') {
    echo '
        <span class="footer__question">' . $ctaPrompt . '</span>';
}
;?>
        <a class="footer__btn btn btn--white" href="<?php echo $btnUrl; ?>"><?php echo $btnText; ?></a>
    </div>
    <div class="footer__social">
        <?php

if ($lnUrl !== '') {
    echo '
            <a class="footer__social-link" title="Link to Data Con LA LinkedIn" target="_blank" href="' . $lnUrl . '">
            <svg class="footer__social-icon">
                <use xlink:href="' . THEME_IMG_PATH . '/sprite.svg#icon-linkedin-with-circle" />
        </svg>
        </a>';}
;

?>

        <?php

if ($twitterUrl != '') {
    echo '
            <a class="footer__social-link" title="Link to Data Con LA Twitter profile" target="_blank" href="https://twitter.com/dataconla/">
                <svg class="footer__social-icon">
                    <use xlink:href="' . THEME_IMG_PATH . '/sprite.svg#icon-twitter-with-circle" />
        </svg>
        </a>';
}
?>

        <?php

if ($fbLink != '') {
    echo '
            <a class="footer__social-link" title="Link to Data Con LA Facebook page"  target="_blank" href="https://www.facebook.com/dataconla">
            <svg class="footer__social-icon">
                <use xlink:href="' . THEME_IMG_PATH . '/sprite.svg#icon-facebook-with-circle" />
        </svg>
        </a>';
}

?>

        <?php

if ($igUrl != '') {
    echo '
                <a class="footer__social-link" title="Link to Data Con LA Instagram page" target="_blank" href="https://www.instagram.com/dataconla/">
                <svg class="footer__social-icon">
                    <use xlink:href="' . THEME_IMG_PATH . '/sprite.svg#icon-instagram-with-circle" />
            </svg>
            </a>
            ';
}

?>

        <?php

if ($youtubeUrl != '') {
    echo '
                <a class="footer__social-link" title="Link to Data Con LA YouTube channel" target="_blank" href="https://www.youtube.com/user/sawjd/videos">
                <svg class="footer__social-icon">
                    <use xlink:href="' . THEME_IMG_PATH . '/sprite.svg#icon-youtube-with-circle" />
        </svg>
        </a>';

}

?>

    </div>
    <?php wp_footer();?>

</footer><!-- #colophon -->
</div><!-- #page -->
<datalist></datalist>
</body>

</html>