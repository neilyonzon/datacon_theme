<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Datacon_Refresh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'datacon-refresh' ); ?></a>

        <header id="masthead" class="site-header">
            <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-nav',
            )
        )
        ?>
            <nav id="site-navigation" class="main-navigation">
                <div class="main-navigation__logo">
                    <a href="#" class="main-navigation__logo-link">
                        <img src="<?php echo THEME_IMG_PATH;?>/logo.png" alt="Data Con Logo"
                            class="main-navigation__logo-img">
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav__item subnav"><a href="#" class="nav__link">Conference</a>
                        <svg class="subnav__icon">
                            <use
                                xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.svg#icon-chevron-thin-down">
                            </use>
                        </svg>
                        <ul class="subnav__nav">
                            <li class="nav__item"><a href="#" class="nav__link">Sublink</a>
                            <li class="nav__item"><a href="#" class="nav__link">Sublink Sublink</a>
                            <li class="nav__item"><a href="#" class="nav__link">Sublindfsdfds</a>
                        </ul>
                    </li>
                    <li class="nav__item"><a href="#" class="nav__link">Agenda</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Speakers</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Sponsors</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Panels</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Startup Showcase</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Get Tickets</a></li>
                </ul>
            </nav>
        </header><!-- #masthead -->