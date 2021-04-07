<?php 

/* Template Name: Design Speaker Spotlight */

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
    <div class="speakers-spotlight speakers-spotlight--secondary">
        <div class="speaker-spotlight__heading">
            <h3 class="header">Speaker Spotlight</h3>
        </div>
        <div class="speaker-spotlight__content">
            <div class="speaker-spotlight__text">
                <p class="speaker-spotlight__summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                <span class="speaker-spotlight__name">Rich Ung</span>
                <span class="speaker-spotlight__title">Data Engineer at Disney</span>
                <span class="speaker-spotlight__panel">Data and Government Panelist 2020</span>
            </div>
            <hr class="line--secondary" />
            <div class="speaker-spotlight__media">
                <img src="https://placekitten.com/200/200" alt="Placeholde" />
            </div>
        </div>
    </div>

</main>

<?php
get_footer();