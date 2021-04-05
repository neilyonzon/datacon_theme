<?php 

/* Template Name: Design Test Page */

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
    <!-- 
1. Create Flex Container 
2. Create Flex Items 
3. Style with CSS
4. Integrate PHP Scripts. 
5. Add to Plugin 
-->

    <div class="hero hero--short"><img src="https://data-con-la.local/wp-content/uploads/2021/02/hero_los_angeles.png"
            alt="Los Angeles" class="hero__img">
        <div class="hero__overlay hero__overlay--secondary"></div>
        <div class="hero__headline">
            <h1>Thank You<br>For Attending<br>Data Con 2020!</h1>
        </div>
        <div class="hero__description">Check out the recap video, panel overview and more below!</div>
    </div>
</main>

<?php
get_footer();