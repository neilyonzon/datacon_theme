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
    <div class="section-container">
        <div class="profile-grid">
            <div class="profile-item">
                <a href="https://www.facebook.com/"><img class="profile-item__img" src="https://via.placeholder.com/300"
                        alt="placeholder" /></a>
                <a href="https://www.facebook.com/" class="profile-item__name">
                    <h4>Jennifer Conley Lee</h4>
                </a>
                <p>Web Developer</p>
                <div class="profile-item__social-icons-container">
                    <div class="profile-item__social-icon">
                        <a href="https://www.facebook.com/" class="profile-item__social-link">
                            <svg class="profile-item__social-symbol">
                                <use xlink:href="<?php echo THEME_IMG_PATH ?>/sprite.svg#icon-linkedin-with-circle">
                                </use>
                            </svg>
                        </a>
                    </div>
                    <div class="profile-item__social-icon">
                        <a href="https://www.facebook.com/" class="profile-item__social-link">
                            <svg class="profile-grid__social-symbol">
                                <use xlink:href="<?php echo THEME_IMG_PATH?>/sprite.svg#icon-twitter-with-circle"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();