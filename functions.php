<?php
/**
 * Datacon Refresh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Datacon_Refresh
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'datacon_refresh_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function datacon_refresh_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Datacon Refresh, use a find and replace
		 * to change 'datacon-refresh' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'datacon-refresh', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main-nav' => esc_html__( 'Primary', 'datacon-refresh' ),
			)
		);

		// Create Class to extend Walker_Nav_Menu class to customize/override Menu

		

		class Walker_Nav_Primary extends Walker_Nav_Menu {
			function start_lvl( &$output, $depth = 0, $args = array()) { // handles the ul
				//Variable that is used to create indents in the HTML code
				$indent = str_repeat("\t",$depth);
				$submenu = ($depth > 0 ) ? 'subnav': '';
				$output  .= "\n$indent<ul class=\"subnav__nav$submenu depth_$depth\">\n";
			}

			function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0) { //li a span (manages the markup of the li a)
				$indent = ($depth) ? str_repeat("\t",$depth) : '';

				$li_attributes = '';

				//Create variable that will hold all classes for each li element
				$class_names = $value = '';


				$classes = empty($item -> classes) ? 'array()' : (array) $item -> classes;
				
				$classes[] = ($args -> walker-> has_children) ? 'subnav' : '';
				$classes[] = ($item -> current || $item -> current_item_ancestor) ? 'active' : '';
				$classes[] = 'nav__item';
		

				$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
				$class_names = 'class = "' . esc_attr($class_names) . '"';

				//The commented code below creates an id variable that would be used for the LI. This is not needed so commenting out.
				// $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item-> ID, $item, $args);
				// $id = strlen( $id ) ? ' id="' . esc_attr($id) . '"' : '';
				$output .= $indent . '<li ' . $value . $class_names . $li_attributes . '>';
				$attributes = ! empty( $item -> attr_title ) ? ' title = "' . esc_attr($item -> attr_title) . '"' : '';
				$attributes .= ! empty ($item -> target) ? ' target= "' . esc_attr($item -> target) . '"' : '';
				$attributes .= ! empty ($item -> xfn) ? ' rel= "' . esc_attr($item -> xfn) . '"' : '';
				$attributes .= ! empty ($item -> url) ? ' href= "' . esc_attr($item -> url) . '"' : '';
				$attributes .= 'class = "nav__link"';
				$item_output  = $args-> before;
				$item_output .= '<a' . $attributes .'>';
				$item_output .= $args-> link_before . apply_filters( 'the_title', $item -> title, $item-> ID) . $args -> link_after;
				$item_output .= ($depth == 0 && $args-> walker-> has_children) ? '</a>
				<svg class="subnav__icon">
					<use
						xlink:href="https://data-con-la.local/wp-content/themes/datacon-refresh/img/sprite.svg#icon-chevron-thin-down">
					</use>
				</svg>' : '</a>';
				$item_output .= $args -> after;

				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args);
			}
		}

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
		add_theme_support(
			'custom-background',
			apply_filters(
				'datacon_refresh_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'datacon_refresh_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function datacon_refresh_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'datacon_refresh_content_width', 640 );
}
add_action( 'after_setup_theme', 'datacon_refresh_content_width', 0 );

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
function datacon_refresh_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'datacon-refresh' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'datacon-refresh' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'datacon_refresh_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function datacon_refresh_scripts() {
	wp_enqueue_style( 'datacon-refresh-style', get_stylesheet_uri(), array(), rand(111,9999));
	wp_style_add_data( 'datacon-refresh-style', 'rtl', 'replace' );

	wp_enqueue_script( 'datacon-refresh-navigation', get_template_directory_uri() . '/dist/index.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'datacon-refresh-navigation', get_template_directory_uri() . '/dist/style.css', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'datacon_refresh_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/*Set Constant to Image Directory 
*/
if( !defined($THEME_IMG_PATH)){
    define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img' );
   }