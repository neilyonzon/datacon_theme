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
            <nav id="site-navigation" class="main-navigation">
                <!-- <img src="" class="logo"></img> -->
                <div class="main-navigation__logo">
                    <a href="#" class="main-navigation__logo-img">Placeholder Logo</a>
                </div>
                <ul class="nav">
                    <li class="nav__item subnav"><a href="#" class="nav__link">Link 1</a>
                        <ul class="subnav__nav">
                            <li class="nav__item"><a href="#" class="nav__link">Sublink</a>
                            <li class="nav__item"><a href="#" class="nav__link">Sublink Sublink</a>
                            <li class="nav__item"><a href="#" class="nav__link">Sublindfsdfds</a>
                        </ul>
                    </li>
                    <li class="nav__item"><a href="#" class="nav__link">Link 1</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Link 1</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Link 1</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Link 1</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Link 1</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Link 1</a></li>
                </ul>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->