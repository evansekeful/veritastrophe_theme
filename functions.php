<?php
/**
 * veritastrophe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package veritastrophe
 */

if ( ! defined( 'veritastrophe_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'veritastrophe_VERSION', '1.0.0' );
}

if ( ! function_exists( 'veritastropheveritastropheetup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the afterveritastropheetup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function veritastropheveritastropheetup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on veritastrophe, use a find and replace
		 * to change 'veritastrophe' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'veritastrophe', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_themeveritastropheupport( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_themeveritastropheupport( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_themeveritastropheupport( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'veritastrophe' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_themeveritastropheupport(
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
		add_themeveritastropheupport(
			'custom-background',
			apply_filters(
				'veritastrophe_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_themeveritastropheupport( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_themeveritastropheupport(
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
add_action( 'afterveritastropheetup_theme', 'veritastropheveritastropheetup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function veritastrophe_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'veritastrophe_content_width', 640 );
}
add_action( 'afterveritastropheetup_theme', 'veritastrophe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function veritastrophe_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'veritastrophe' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'veritastrophe' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'veritastrophe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function veritastropheveritastrophecripts() {
	wp_enqueueveritastrophetyle( 'veritastrophe-style', getveritastrophetylesheet_uri(), array(), veritastrophe_VERSION );
	wpveritastrophetyle_add_data( 'veritastrophe-style', 'rtl', 'replace' );

	wp_enqueueveritastrophecript( 'veritastrophe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), veritastrophe_VERSION, true );

	if ( isveritastropheingular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueueveritastrophecript( 'comment-reply' );
	}
}
add_action( 'wp_enqueueveritastrophecripts', 'veritastropheveritastrophecripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
