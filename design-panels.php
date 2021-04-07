<?php 

/* Template Name: Design Test Panels */

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

    <div class="panels panels--primary" style="background-image:url(<?php echo THEME_IMG_PATH  ?>/data_graphic.jpg)">
        <div class="panels__overlay"></div>
        <h3 class="panels__header header header--primary">Panels</h3>
        <div class="panels__items-container">
            <div class="panels__item">
                <h4 class="panels__item-title">Data 4 Good</h4>
                <div class="panels__item-description">
                    <p>
                        Data 4 Good is an organization that was launched in 2019 with the promise of using data to help
                        deal
                        with social issues. Since it launched, it has attracted a public – private consortium of
                        industry
                        leaders as part of the advisory board.</p>
                </div>
                <a href="#" class="link--primary">Learn More</a>
            </div>
            <div class="panels__item">
                <h4 class="panels__item-title">Accessibility Challenges of 2020</h4>
                <div class="panels__item-description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    </p>
                </div>
                <!-- <a href="#" class="link--primary">Learn More</a> -->
            </div>
            <div class="panels__item">
                <h4 class="panels__item-title">Think in Color</h4>
                <div class="panels__item-description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    </p>
                </div>
                <!-- <a href="#" class="link--primary">Learn More</a> -->
            </div>
            <div class="panels__item">
                <h4 class="panels__item-title">Data 4 Good</h4>
                <div class="panels__item-description">
                    <p>
                        Data 4 Good is an organization that was launched in 2019 with the promise of using data to help
                        deal
                        with social issues. Since it launched, it has attracted a public – private consortium of
                        industry
                        leaders as part of the advisory board.</p>
                </div>
                <!-- <a href="#" class="link--primary">Learn More</a> -->
            </div>
            <div class="panels__item">
                <h4 class="panels__item-title">Data 4 Good</h4>
                <div class="panels__item-description">
                    <p>
                        Data 4 Good is an organization that was launched in 2019 with the promise of using data to help
                        deal
                        with social issues. Since it launched, it has attracted a public – private consortium of
                        industry
                        leaders as part of the advisory board.</p>
                </div>
                <!-- <a href="#" class="link--primary">Learn More</a> -->
            </div>
            <i class="panels__item"></i>
            <i class="panels__item"></i>
            <i class="panels__item"></i>
        </div>
    </div>

</main>

<?php
get_footer();