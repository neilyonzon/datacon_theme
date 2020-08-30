<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Datacon_Refresh
 */

?>



<?php datacon_refresh_post_thumbnail(); ?>


<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'datacon-refresh' ),
				'after'  => '</div>',
			)
		);
		?>
<!-- .entry-content -->