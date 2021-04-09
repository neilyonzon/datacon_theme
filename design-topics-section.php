<?php 

/* Template Name: Design Test Topics */

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
    <?php ?>

    <div class="topics-section">
        <hr class="topics-section__line line--primary" />
        <div class="topics-section__topics">
            <!-- Header -->
            <h1 class="topics-section__header header header--primary">This Year’s Conference Topics</h1>
            <!-- Topics -->
            <ul class="topics-section__list">
                <li class="topics-section__list-item">
                    <svg class="topics-section__icon">
                        <use xlink:href=<?php echo THEME_IMG_PATH  ?>/sprite.svg#icon-group>
                        </use>
                    </svg>
                    <span>Lorem ipsum dolor sit amet adipiscing elit</span>
                </li>
                <li class="topics-section__list-item"> <svg class="topics-section__icon">
                        <use xlink:href=<?php echo THEME_IMG_PATH  ?>/sprite.svg#icon-group>
                        </use>
                    </svg><span>Lorem ipsum dolor sit</span></li>
                <li class="topics-section__list-item">
                    <svg class="topics-section__icon">
                        <use xlink:href=<?php echo THEME_IMG_PATH  ?>/sprite.svg#icon-group>
                        </use>
                    </svg>
                    <span>Lorem adipiscing elit</span>
                </li>
                <li class="topics-section__list-item">
                    <svg class="topics-section__icon">
                        <use xlink:href=<?php echo THEME_IMG_PATH  ?>/sprite.svg#icon-group>
                        </use>
                    </svg>
                    <span>Lorem adipiscing elit</span>
                </li>
                <li class="topics-section__list-item">
                    <svg class="topics-section__icon">
                        <use xlink:href=<?php echo THEME_IMG_PATH  ?>/sprite.svg#icon-group>
                        </use>
                    </svg>
                    <span>Lorem adipiscing elit adipiscing</span>
                </li>
                <li class="topics-section__list-item">
                    <svg class="topics-section__icon">
                        <use xlink:href=<?php echo THEME_IMG_PATH  ?>/sprite.svg#icon-group>
                        </use>
                    </svg>
                    <span>Lorem adipiscing elit adipiscing</span>
                </li>
                <li class="topics-section__list-item">
                    <svg class="topics-section__icon">
                        <use xlink:href=<?php echo THEME_IMG_PATH  ?>/sprite.svg#icon-group>
                        </use>
                    </svg>
                    <span>Lorem adipiscing elit adipiscing</span>
                </li>
                <li class="topics-section__list-item">
                    <svg class="topics-section__icon">
                        <use xlink:href=<?php echo THEME_IMG_PATH  ?>/sprite.svg#icon-group>
                        </use>
                    </svg>
                    <span>Lorem adipiscing elit adipiscing</span>
                </li>
            </ul>
            <p class="disclaimer">Finalized list of panels will be available</p>
        </div>

        <div class="topics-section__speakers">
            <h3 class="header h3">2020 Speaker Spotlight</h3>
            <div class="topics-section__speaker-grid">

                <div class="topics-section__speaker-item">
                    <img class="topics-section__speaker-item-img" src="<?php echo THEME_IMG_PATH  ?>/briankursar.jpg"
                        alt="placeholder" />
                    <p class="topics-section__speaker-panel">Speaker for 2020’s
                        ‘Tech for Good’</p>
                    <span class="topics-section__speaker-name">SUBASH D’SOUZA</span><br />
                    <span class="topics-section__speaker-title">Founder, Data Con LA </span>
                </div>


                <div class="topics-section__speaker-item">
                    <img class="profile-item__speaker-item-img"
                        src="<?php echo THEME_IMG_PATH  ?>/Bryan_Kirshner-Headshot-Mike-Sarjeant.jpg"
                        alt="placeholder" />
                    <p class="topics-section__speaker-panel">Speaker for 2020’s
                        ‘Tech for Good’</p>
                    <span class="topics-section__speaker-name">SUBASH D’SOUZA</span><br />
                    <span class="topics-section__speaker-title">Founder, Data Con LA </span>
                </div>
                <div class="topics-section__speaker-item">
                    <img class="profile-item__speaker-item-img" src="<?php echo THEME_IMG_PATH  ?>/Rye-Kevin-Lee.jpg"
                        alt="placeholder" />
                    <p class="topics-section__speaker-panel">Speaker for 2020’s
                        ‘Tech for Good’</p>
                    <span class="topics-section__speaker-name">SUBASH D’SOUZA</span><br />
                    <span class="topics-section__speaker-title">Founder, Data Con LA </span>
                </div>
            </div>
            <div class="topics-section__cta-box-area">
                <div class="topics-section__cta-box cta-box cta-box--primary">
                    <div class="cta-box__body">
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="cta-box__cta">
                        <a href="#" class="btn btn--primary">BE A SPEAKER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>

<?php
get_footer();