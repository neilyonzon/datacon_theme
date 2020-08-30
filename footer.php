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
$ctaPrompt = esc_attr(get_option( 'cta_promp_text'));
$btnText = esc_attr(get_option( 'btn_text'));
$btnUrl = esc_attr(get_option('btn_url'));
$lnUrl = esc_attr(get_option('ln_link'));
$twitterUrl = esc_attr(get_option('twitter_link'));
$fbLink = esc_attr(get_option('fb_link'));
$igUrl = esc_attr(get_option('ig_link'));
$youtubeUrl = esc_attr(get_option('youtube_link'));
$mailUrl = esc_attr(get_option('mail_link'));

?>
<div id="modal-background"></div>
<footer id="colophon" class="site-footer footer">
    <div class="footer__contact">
        <?php 

    if($ctaPrompt !== '') {
        echo '
        <span class="footer__question">'.$ctaPrompt.'</span>';
        }
        ;?>
        <a class="footer__btn btn btn--white" href="<?php echo $btnUrl;?>"><?php echo $btnText;?></a>
    </div>
    <div class="footer__social">
        <?php

        if($lnUrl !== '') {
            echo '
            <a class="footer__social-link" href="'. $lnUrl.'">
            <svg class="footer__social-icon">
                <use xlink:href="'. THEME_IMG_PATH .'/sprite.svg#icon-linkedin-with-circle" />
        </svg>
        </a>';};

        ?>

        <?php 

        if ($twitterUrl != '') {
            echo '
            <a class="footer__social-link" href="https://twitter.com/dataconla/">
                <svg class="footer__social-icon">
                    <use xlink:href="'. THEME_IMG_PATH .'/sprite.svg#icon-twitter-with-circle" />
        </svg>
        </a>';
        }
        ?>

        <?php

        if ($fbLink != '') {
            echo '
            <a class="footer__social-link" href="https://www.facebook.com/dataconla">
            <svg class="footer__social-icon">
                <use xlink:href="'. THEME_IMG_PATH.'/sprite.svg#icon-facebook-with-circle" />
        </svg>
        </a>';
        }

        ?>

        <?php 

            if ($igUrl != '') {
                echo '
                <a class="footer__social-link" href="https://www.instagram.com/dataconla/">
                <svg class="footer__social-icon">
                    <use xlink:href="'. THEME_IMG_PATH .'/sprite.svg#icon-instagram-with-circle" />
            </svg>
            </a>
            ';
            }
        
        ?>

        <?php 

            if ($youtubeUrl != '') {
                echo '
                <a class="footer__social-link" href="https://www.youtube.com/user/sawjd/videos">
                <svg class="footer__social-icon">
                    <use xlink:href="'. THEME_IMG_PATH .'/sprite.svg#icon-youtube-with-circle" />
        </svg>
        </a>';

        }

        ?>

        <?php 

            if ($mailUrl != ''){
                echo '
                <a class="footer__social-link" href="mailto:subash@dataconla.com">
                    <span class="footer__social-icon footer__social-icon--circle">
                        <svg class="footer__social-icon--mail">
                            <use xlink:href="'.THEME_IMG_PATH.'/sprite.svg#icon-mail"></use>
        </svg>
        </span>
        </a>';
        }


        ?>
    </div>
    <?php wp_footer(); ?>

</footer><!-- #colophon -->
</div><!-- #page -->
<datalist></datalist>

</body>

</html>