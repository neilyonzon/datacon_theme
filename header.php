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
                <input id="main-navigation-toggle" type="checkbox" autocomplete='off' class="main-navigation__checkbox">
                <label for="main-navigation-toggle" class="main-navigation__button">
                    <span class="main-navigation__icon">&nbsp;</span>
                </label>
                <div class="main-navigation__logo">
                    <a href="#" class="main-navigation__logo-link">
                        <img src="<?php echo THEME_IMG_PATH;?>/logo.png" alt="Data Con Logo"
                            class="main-navigation__logo-img">
                    </a>
                </div>
                <?php
                       wp_nav_menu(array(
                            'theme_location'  => 'main-nav',
                            'container'       => 'ul',
                            'menu_class'      => 'nav',
                            'walker'          => new Walker_Nav_Primary()
                            )
                       );
                ?>
            </nav>
        </header><!-- #masthead -->