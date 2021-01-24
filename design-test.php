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

    <h1 class="header header--solo header--primary">Header Center</h1>

    <h1 class="header header--solo header--left header--primary">Header Center</h1>

    <h1 class="header header--solo header--right header--primary">Header Center</h1>

    <h1 class="header header--solo header--primary">Header Blue</h1>

    <h1 class="header header--solo header--secondary">Header Purple</h1>

</main>

<?php
get_footer();