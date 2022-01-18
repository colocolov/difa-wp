<?php
/**
 * Difa functions and definitions
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'difa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function difa_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Difa, use a find and replace
		 * to change 'difa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'difa', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// custom title 
		add_theme_support( 'title-tag' );

		// 
		add_theme_support( 'post-thumbnails' );

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
				'difa_custom_background_args',
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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'header' => esc_html__( 'Header Menu', 'difa' ),
			)
		);

/*
*
*
*/


	}
endif;
add_action( 'after_setup_theme', 'difa_setup' );

/*
* Add custom class for nav menu
*
*/ 
add_filter( 'nav_menu_css_class', 'custom_nav_menu_css_class', 10, 1 );
function custom_nav_menu_css_class ($classess){
$classess[] = 'menu__item';
return $classess;
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function difa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'difa_content_width', 640 );
}
add_action( 'after_setup_theme', 'difa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function difa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'difa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'difa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'difa_widgets_init' );

function pre($str) {
	echo '<pre>';
	print_r ($str);
	echo '</pre>';
}


/**
 * Add SVG-files in media library
 */
function webrise_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
    return $mime_types;
}
add_filter( 'upload_mimes', 'webrise_myme_types', 1, 1 );

function admin_custom_css() {
    echo "<style>table.media .column-title .media-icon img[src='.svg']{
        width: 100%;
        height: auto;
    }</style>";
}
add_action( 'admin_head', 'admin_custom_css' );



/**
 * Implement the styles and scripts.
 */
require get_template_directory() . '/inc/enqueue_scripts.php';

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
 * Include Options Panel by Redux.
 */
require get_template_directory() . '/inc/options-panel-redux.php';

function remove_styles () {
	wp_deregister_style( 'contact-form-7' );
}
add_action ('wp_print_styles', 'remove_styles', 100);