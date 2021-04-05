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

    <div class="stats">
        <h1 class="stats__header header header--white">Data Con 2020 By The numbers</h1>
        <div class="stats__container">
            <div class="stats__col">
                <div class="stats__content">
                    <div class="stats__info">
                        <div class="stats__number">200</div>
                        <div class="stats__detail">Attendees</div>
                    </div>
                    <div class="stats__icon"><svg class="stats__icon">
                            <use
                                xlink:href=http://localhost:10003/wp-content/themes/datacon_theme/img/sprite.svg#icon-group>
                            </use>
                        </svg></div>
                </div>
            </div>
            <div class="stats__col">
                <div class="stats__content">
                    <div class="stats__info">
                        <div class="stats__number">75</div>
                        <div class="stats__detail">Speakers</div>
                    </div>
                    <div class="stats__icon"><svg class="stats__icon">
                            <use
                                xlink:href=http://localhost:10003/wp-content/themes/datacon_theme/img/sprite.svg#icon-mic>
                            </use>
                        </svg></div>
                </div>
            </div>
            <div class="stats__col">
                <div class="stats__content">
                    <div class="stats__info">
                        <div class="stats__number">24</div>
                        <div class="stats__detail">panels</div>
                    </div>
                    <div class="stats__icon"><svg class="stats__icon">
                            <use
                                xlink:href=http://localhost:10003/wp-content/themes/datacon_theme/img/sprite.svg#icon-movie>
                            </use>
                        </svg></div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();