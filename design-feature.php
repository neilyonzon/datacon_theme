<?php 

/* Template Name: Design Feature */

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
// while (have_posts()):
//     the_post(); 

//     get_template_part('template-parts/content', 'page');

// endwhile; 
// End of the Loop.
?>
    <div class="content-image content-image__primary-inverse headspace-m content-image content-image--reverse">
        <div class="content-image__img-column">
            <img src="https://blush.design/api/download?shareUri=3dr9Rpj9C&s=0.3%7Ec68e80&w=800&h=800&fm=png"
                alt="Conference Graphic" />
        </div>
        <div class="content-image__text-column">
            <div class="header">Startup Showcase</div>
            <p>Spearheaded by Subash D’Souza and organized and supported by a community of volunteers, sponsors and
                speakers, Data Con LA features the most vibrant gathering of data and technology enthusiasts in Los
                Angeles.</p>
            <p>Data Con LA began as Big Data Day LA in 2013, with just over 250 attendees. We have since grown to over
                550 attendees in 2014, 950+ attendees in 2015, 1200+ attendees in 2016, and 1550+ attendees in 2017. In
                2018, we re-branded ourselves from Big Data Day LA to Data Con LA. We also had over 1800+ attendees
                attend. This year we expect that tally to be over 2000.</p>

             <a href="#" class="btn btn--primary">Sign-Up Now</a>
        </div>
    </div>
</main>

<?php
get_footer();