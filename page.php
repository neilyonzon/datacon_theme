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

    <?php
$image_id = get_post_thumbnail_id();
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
$size = 'my-size'; // Defaults to 'thumbnail' if omitted.
$image_src = wp_get_attachment_image_src($image_id, $size)[0];
if (get_field('hero_banner_color') == 'Blue') {
    $hero_color = 'primary';
} else {
    $hero_color = 'secondary';
}
;?>
    <div class="interior-banner">
        <h1 class="interior-banner__header"><?php single_post_title();?></h1>
        <?php if (has_post_thumbnail($post->ID)): ?>
        <img class="interior-banner__img" src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" />
        <?php endif;?>
        <div class="interior-banner__overlay interior-banner__overlay--<?php echo $hero_color; ?>"></div>
    </div>
    <?php
while (have_posts()):
    the_post();

    get_template_part('template-parts/content', 'page');

endwhile; // End of the loop.
?>
</main><!-- #main -->

<?php
get_footer();