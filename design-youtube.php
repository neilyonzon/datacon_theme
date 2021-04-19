<?php 


/**
 * The template for displaying all landing page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Datacon_Refresh
 */

get_header();
?>

<main id="primary" class="main-content">
    <?php 
?>

    <div class="media-banner">
        <img src="https://data-con-la.local/wp-content/uploads/2021/02/conference.png" alt="Presentation"
            class="media-banner__img">
        <div class="media-banner__overlay media-banner__overlay--primary">
        </div>


        <div class="media-banner__text">
            <h3 class="header">Watch Highlights from 2020</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. </p>
        </div>

        <div class="media-banner__video">
            <div class="media-banner__video-container">
                <iframe src="https://www.youtube.com/embed/Kn9j1RoEKPQ" title="YouTube video player" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();