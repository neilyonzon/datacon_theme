<?php
/**
 * The template for displaying all pages
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

    <?php if (has_post_thumbnail($post->ID)):
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');?>
    <div class="interior-banner" style="background-image: url('<?php echo $image[0]; ?>')">
        <h1 class="interior-banner__header"><?php single_post_title();?></h1>
    </div>
    <?php else: ?>
    <div class="interior-banner">
        <h1 class=" interior-banner__header"><?php single_post_title();?></h1>
    </div>
    <?php endif;
while (have_posts()):
    the_post();

    get_template_part('template-parts/content', 'page');

endwhile; // End of the loop.
?>
</main><!-- #main -->

<?php
get_footer();