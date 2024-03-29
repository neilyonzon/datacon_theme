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

    <div class="listing-feature">
        <img class="listing-feature__bg" src="<?php echo THEME_IMG_PATH  ?>/data_graphic.jpg" alt="Graphic" />
        <div class="listing-feature__overlay listing-feature__overlay--secondary"></div>
        <div class="listing-feature__media">
            <h3 class="listing-feature__header header">Keynote Speakers</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
            <img class="listing-feature__img" src="https://placekitten.com/450/300" alt="placeholder" />
        </div>
        <hr class="line" />
        <div class="listing-feature__list">
            <div class="listing-feature__list-container">
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">Subash D'Souza</span>
                    <span class="listing-feature__item-title">Founder, Data Con LA</span>
                </div>
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">ABBASS SHARIF, PHD.</span>
                    <span class="listing-feature__item-title">Founder, Data Con LA</span>
                </div>
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">ANITA SENGUPTA</span>
                    <span class="listing-feature__item-title">Chief Product Officer / Co-Founder at at Airspace
                        Experience Technologies</span>
                </div>
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">Subash D'Souza</span>
                    <span class="listing-feature__item-title">Founder, Data Con LA</span>
                </div>
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">ABBASS SHARIF, PHD.</span>
                    <span class="listing-feature__item-title">Academic Director, Master of Science in Business Analytics
                        Program at the University of Southern California</span>
                </div>
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">Subash D'Souza</span>
                    <span class="listing-feature__item-title">Founder, Data Con LA</span>
                </div>
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">ANITA SENGUPTA</span>
                    <span class="listing-feature__item-title">Chief Product Officer / Co-Founder at at Airspace
                        Experience Technologies</span>
                </div>
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">Subash D'Souza</span>
                    <span class="listing-feature__item-title">Founder, Data Con LA</span>
                </div>
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">Subash D'Souza</span>
                    <span class="listing-feature__item-title">Founder, Data Con LA</span>
                </div>
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">ANITA SENGUPTA</span>
                    <span class="listing-feature__item-title">Chief Product Officer / Co-Founder at at Airspace
                        Experience Technologies</span>
                </div>
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">Subash D'Souza</span>
                    <span class="listing-feature__item-title">Founder, Data Con LA</span>
                </div>
                <div class="listing-feature__item">
                    <span class="listing-feature__item-name">Subash D'Souza</span>
                    <span class="listing-feature__item-title">Founder, Data Con LA</span>
                </div>

                <i class="listing-feature__item" aria-hidden="true"></i>
                <i class="listing-feature__item" aria-hidden="true"></i>
            </div>
        </div>
    </div>



</main>

<?php
get_footer();