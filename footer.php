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

?>
<div id="modal-background"></div>
<footer id="colophon" class="site-footer footer">

    <div class="footer__contact">
        <span class="footer__question">Have a question?</span>
        <button class="footer__btn btn btn--white">Contact Us</button>
    </div>
    <div class="footer__social">
        <a class="footer__social-link" href="https://www.linkedin.com/company/dataconla/">
            <svg class="footer__social-icon">
                <use xlink:href="<?php echo THEME_IMG_PATH;?>/sprite.svg#icon-linkedin-with-circle" />
            </svg>
        </a>
        <a class="footer__social-link" href="https://twitter.com/dataconla/">
            <svg class="footer__social-icon">
                <use xlink:href="<?php echo THEME_IMG_PATH;?>/sprite.svg#icon-twitter-with-circle" />
            </svg>
        </a>
        <a class="footer__social-link" href="https://www.facebook.com/dataconla">
            <svg class="footer__social-icon">
                <use xlink:href="<?php echo THEME_IMG_PATH;?>/sprite.svg#icon-facebook-with-circle" />
            </svg>
        </a>
        <a class="footer__social-link" href="https://www.instagram.com/dataconla/">
            <svg class="footer__social-icon">
                <use xlink:href="<?php echo THEME_IMG_PATH;?>/sprite.svg#icon-instagram-with-circle" />
            </svg>
        </a>
        <a class="footer__social-link" href="https://www.youtube.com/user/sawjd/videos">
            <svg class="footer__social-icon">
                <use xlink:href="<?php echo THEME_IMG_PATH;?>/sprite.svg#icon-youtube-with-circle" />
            </svg>
        </a>
        <a class="footer__social-link" href="mailto:subash@dataconla.com">
            <span class="footer__social-icon footer__social-icon--circle">
                <svg class="footer__social-icon--mail">
                    <use xlink:href="<?php echo THEME_IMG_PATH;?>/sprite.svg#icon-mail"></use>
                </svg>
            </span>
        </a>
    </div>
    <?php wp_footer(); ?>

</footer><!-- #colophon -->
</div><!-- #page -->
<datalist></datalist>

</body>

</html>