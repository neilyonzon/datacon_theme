<?php 

/* Template Name: Design Panels with Modal */

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

    <div class="panels-m panels-m--primary">
        <div class="panels-m__overlay"></div>
        <h3 class="panels-m__header header header--primary">Panels</h3>
        <div class="panels-m__items-container">
            <div class="panels-m__item" aria-controls="panelist-modal" role="button" tabindex="0" style="background-image: url('https://placekitten.com/g/400/300') ">
                <h4 class="panels-m__item-title">Data 4 Good</h4>
                <div class="panels-m__item-description" aria-hidden="true">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div data-type="moderator" data-title="Program Director of Microsoft" data-name="Meghan Malone"></div>
                <div aria-hidden="true">
                    <span data-type="panelist" data-name="John Doe" data-title="Data Scientist for City of Los Angeles" data-image="https://placekitten.com/200/200"></span>
                    <span data-type="panelist" data-name="Kimmy Lee Doe" data-title="Software Engineer for City of Los Angeles" data-image="https://via.placeholder.com/200"></span>
                    <span data-type="panelist" data-name="Josh Lee" data-title="Programmer" data-image="https://via.placeholder.com/200"></span>
                </div>
            </div>
            <div class="panels-m__item" aria-controls="panelist-modal" role="button" tabindex="0" style="background-image: url('https://placekitten.com/408/287')">
                <h4 class="panels-m__item-title">Accessibility Challenges of 2020</h4>
                <div class="panels-m__item-description" aria-hidden="true">Accessibility Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div data-type="moderator" data-title="Program Director of Apple" data-name="Jenny Lee"></div>
                <div aria-hidden="true">
                    <span data-type="panelist" data-name="John Doe" data-title="Data Scientist for City of Los Angeles" data-image="https://via.placeholder.com/200"></span>
                    <span data-type="panelist" data-name="Kin Doe" data-title="Software Engineer for City of Los Angeles" data-image="https://via.placeholder.com/200"></span>
                    <span data-type="panelist" data-name="Joshua" data-title="Programmer" data-image="https://via.placeholder.com/200"></span>
                </div>
            </div>
            <div class="panels-m__item" aria-controls="panelist-modal" role="button" tabindex="0">
                <h4 class="panels-m__item-title">Think in Color</h4>
                <div class="panels-m__item-description" aria-hidden="true">
                    Think in Color Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div data-type="moderator" data-title="Program Manager at Amazon" data-name="George Cahone"></div>
                <div aria-hidden="true">
                    <span data-type="panelist" data-name="John Doe" data-title="Data Scientist for City of Los Angeles" data-image="https://via.placeholder.com/200"></span>
                    <span data-type="panelist" data-name="Kin Doe" data-title="Software Engineer for City of Los Angeles" data-image="https://via.placeholder.com/200"></span>
                    <span data-type="panelist" data-name="Joshua" data-title="Programmer" data-image="https://via.placeholder.com/200"></span>
                </div>
            </div>
            <div class="panels-m__item" aria-controls="panelist-modal" role="button" tabindex="0">
                <h4 class="panels-m__item-title">Data 4 Good</h4>
                <div class="panels-m__item-description" aria-hidden="true">
                Think in Color Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div data-panel="panelist" aria-hidden="true">
                    <span data-name="John Doe" data-title="Data Scientist for City of Los Angeles" data-image="https://via.placeholder.com/200"></span>
                    <span data-name="Kimmy Lee Doe" data-title="Software Engineer for City of Los Angeles" data-image="https://via.placeholder.com/200"></span>
                    <span data-name="Josh Lee" data-title="Programmer" data-image="https://via.placeholder.com/200"></span>
                </div>
            </div>
            <div class="panels-m__item" aria-controls="panelist-modal" role="button" tabindex="0">
                <h4 class="panels-m__item-title">Data 4 Good</h4>
                <span class="panels-m__item-description" aria-hidden="true">
                Data 4 Good Think in Color Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                <div data-panel="panelist" aria-hidden="true">
                    <span data-name="John Doe" data-title="Data Scientist for City of Los Angeles" data-image="https://via.placeholder.com/200"></span>
                    <span data-name="Kimmy Lee Doe" data-title="Software Engineer for City of Los Angeles" data-image="https://via.placeholder.com/200"></span>
                    <span data-name="Josh Lee" data-title="Programmer" data-image="https://via.placeholder.com/200"></span>
                </div>
            </div>
            <div class="panels-m__item" aria-controls="panelist-modal" role="button" tabindex="0">
            <h4 class="panels-m__item-title">Women in Tech</h4>
                <span class="panels-m__item-description" aria-hidden="true">
                       Women in Tech  in Color Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<span>
                <div data-panel="panelist" aria-hidden="true">
                    <span data-name="Johnn Lee" data-title="Data Scientist for City of Los Angeles" data-image="https://via.placeholder.com/200"></span>
                    <span data-name="Kevin Johnson" data-title="Software Engineer for City of Los Angeles" data-image="https://via.placeholder.com/200"></span>
                    <span data-name="Johanna Mia" data-title="Programmer" data-image="https://placekitten.com/200/200"></span>
                </div>
            </div>
            <div class="panels-m__item" aria-controls="panelist-modal" role="button" tabindex="0">
                <h4 class="panels-m__item-title">Data 4 Good</h4>
                <div class="panels-m__item-description" aria-hidden="true">
                    <p>
                        Data 4 Good is an organization that was launched in 2019 with the promise of using data to help
                        deal
                        with social issues. Since it launched, it has attracted a public – private consortium of
                        industry
                        leaders as part of the advisory board.</p>
                </div>
            </div>
            <i class="panels-m__item panels-m__item--placer"></i>
            <i class="panels-m__item panels-m__item--placer"></i>
            <i class="panels-m__item panels-m__item--placer"></i>
        </div>
    </div>


    <div class="panels-m-modal" id="panelist-modal">
        <div class="panels-m-modal__overlay">

        </div>
        <div class="panels-m-modal__container">
            <button class="panels-m-modal__close">
                <svg class="panels-m-modal__close-icon">
                    <use xlink:href=<?php echo THEME_IMG_PATH  ?>/sprite.svg#icon-cancel-circle>
                    </use>
                </svg>
            </button>
            <div class="panels-m-modal__content">
                <div class="panels-m-modal__content-left">
                    <h2 class="header header--white modal-title">Accessibility Challenges of 2020</h2>
                    <div class="panels-m-modal__description">
                        <div class="panels-m-modal__meta">
                            <div class="panels-m-modal__meta-text">
                                <span>moderated by</span>
                                <span>Moderator</span>
                                <h4 class="panels-m-modal__moderator">Joe Devon</h4>
                                <span class="panels-m-modal__title">Co-Founder at Diamond</span>
                            </div>
                            <img src="https://placekitten.com/100/100" alt="placeholder"/>
                        </div>
                        <p class="panels-m-modal__summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="line"></div>
                <div class="panels-m-modal__content-right">
                    <h3>Panelist</h3>
                    <div class="panels-m-modal__grid">
                        <div class="panels-m-modal__grid-item">
                            <img src="https://placekitten.com/300/300" alt="placeholder"/>
                            <h4>John Doe</h4>
                            <span>Inclusive Lead at Microsoft</span>
                        </div>
                        <div class="panels-m-modal__grid-item">
                            <img src="https://placekitten.com/300/300" alt="placeholder"/>
                            <h4>John Doe</h4>
                            <span>Inclusive Lead at Microsoft</span>
                        </div>
                        <div class="panels-m-modal__grid-item">
                            <img src="https://placekitten.com/300/300" alt="placeholder"/>
                            <h4>John Gigi Lorem Lee</h4>
                            <span>Inclusive Lead at Microsoft Lorem Ipsum</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <template id="panelist-item-template">
        <div class="panels-m-modal__grid-item">
            <img class="panels-m-modal__grid-img" src="https://placekitten.com/300/300" alt="placeholder"/>
                <h4 class="panels-m-modal__grid-name"></h4>
            <span class="panels-m-modal__grid-title"></span>
         </div>
    </template>

</main>

<?php
get_footer();