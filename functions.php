<?php
/**
 * Datacon Refresh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Datacon_Refresh
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('datacon_refresh_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function datacon_refresh_setup()
{
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Datacon Refresh, use a find and replace
         * to change 'datacon-refresh' to the name of your theme in all the template files.
         */
        load_theme_textdomain('datacon-refresh', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'main-nav' => esc_html__('Primary', 'datacon-refresh'),
            )
        );

        // Require function with Class to extend Walker_Nav_Menu class to customize/override Menu

        require get_template_directory() . '/inc/function-walker.php';

        // Require function with WP Bakery Components

        require get_template_directory() . '/inc/function-wpb-components.php';

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        // add_theme_support(
        //     'custom-background',
        //     apply_filters(
        //         'datacon_refresh_custom_background_args',
        //         array(
        //             'default-color' => 'ffffff',
        //             'default-image' => '',
        //         )
        //     )
        // );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'datacon_refresh_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function datacon_refresh_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('datacon_refresh_content_width', 640);
}
add_action('after_setup_theme', 'datacon_refresh_content_width', 0);

//Adding Fonts

// function custom_add_google_fonts() {
//     wp_enqueue_style( 'custom-google-fonts', '<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">', false );
//     }

// add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function datacon_refresh_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'datacon-refresh'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'datacon-refresh'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'datacon_refresh_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function datacon_refresh_scripts()
{
    wp_enqueue_style('datacon-refresh-style', get_stylesheet_uri(), array(), rand(111, 9999));
    wp_style_add_data('datacon-refresh-style', 'rtl', 'replace');

    //Magnific Popup
    wp_register_style('Magnific_Popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css');
    wp_register_script('Magnific_Popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', null, null, true);
    wp_enqueue_style('Magnific_Popup');
    wp_enqueue_script('Magnific_Popup');

    wp_enqueue_script('datacon-refresh-navigation', get_template_directory_uri() . '/dist/index.js', array(), _S_VERSION, true);
    wp_enqueue_script('datacon-refresh-navigation', get_template_directory_uri() . '/dist/style.css', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'datacon_refresh_scripts');

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/*Set Constant to Image Directory
 */
if (!defined($THEME_IMG_PATH)) {
    define('THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img');
}

/* Require the Admin Page function
 */

require get_template_directory() . '/inc/function-admin.php';

/*
Add additional dropdown styles in editor
 */

function add_style_select_buttons($buttons)
{
    array_unshift($buttons, 'styleselect');
    return $buttons;
}

// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'add_style_select_buttons');

//add custom styles to the WordPress editor
function my_custom_styles($init_array)
{

    $style_formats = array(
        // These are the custom styles
        array(
            'title' => 'Primary Button',
            'block' => 'button',
            'classes' => 'btn btn-primary',
            'wrapper' => true,
        ),
        array(
            'title' => 'Content Block',
            'block' => 'span',
            'classes' => 'content-block',
            'wrapper' => true,
        ),
        array(
            'title' => 'Highlighter',
            'block' => 'span',
            'classes' => 'highlighter',
            'wrapper' => true,
        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode($style_formats);

    return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter('tiny_mce_before_init', 'my_custom_styles');