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

    <div class="topics-section">
        <div class="topics-section__text-area">
            <div class="topics-section__header-area">
                <h1 class="header header--white">This Year’s Conference Topics</h1>
            </div>
            <span class="header header--white">=</span>
            <div class="topics-section__topics">
                <ul class="topics-section__list">
                    <li>
                        <svg class="topics-section__icon">
                            <use
                                xlink:href=http://localhost:10003/wp-content/themes/datacon_theme/img/sprite.svg#icon-group>
                            </use>
                        </svg><span>Lorem ipsum dolor sit amet adipiscing elit</span>
                    </li>
                    <li> <svg class="topics-section__icon">
                            <use
                                xlink:href=http://localhost:10003/wp-content/themes/datacon_theme/img/sprite.svg#icon-group>
                            </use>
                        </svg><span>Lorem ipsum dolor sit</span></li>
                    <li>
                        <svg class="topics-section__icon">
                            <use
                                xlink:href=http://localhost:10003/wp-content/themes/datacon_theme/img/sprite.svg#icon-group>
                            </use>
                        </svg>
                        <span>Lorem adipiscing elit</span>
                    </li>
                    <li>
                        <svg class="topics-section__icon">
                            <use
                                xlink:href=http://localhost:10003/wp-content/themes/datacon_theme/img/sprite.svg#icon-group>
                            </use>
                        </svg>
                        <span>Lorem adipiscing elit</span>
                    </li>
                    <li>
                        <svg class="topics-section__icon">
                            <use
                                xlink:href=http://localhost:10003/wp-content/themes/datacon_theme/img/sprite.svg#icon-group>
                            </use>
                        </svg>
                        <span>Lorem adipiscing elit</span>
                    </li>
                </ul>
                <p class="disclaimer">Finalized list of panels will be available</p>
            </div>
        </div>
        <div class="topics-section__cta-box-area">
            <div class="topics-section__cta-box cta-box cta-box--secondary">
                <div class="cta-box__body">
                    <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="cta-box__cta">
                    <a href="#" class="btn btn--secondary">BE A SPEAKER</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();