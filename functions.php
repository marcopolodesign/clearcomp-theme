<?php
/**
 * Clear Comp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Clear_Comp
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function clearcomp_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Clear Comp, use a find and replace
		* to change 'clearcomp' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'clearcomp', get_template_directory() . '/languages' );

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
			'header' => esc_html__( 'Header', 'clearcomp' ),
			'footer' => esc_html__( 'Footer Menu', 'clearcomp' ),
			'mobile' => esc_html__( 'Mobile Menu', 'clearcomp' ),
		)
	);

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
			'clearcomp_custom_background_args',
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
add_action( 'after_setup_theme', 'clearcomp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clearcomp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clearcomp_content_width', 640 );
}
add_action( 'after_setup_theme', 'clearcomp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clearcomp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'clearcomp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'clearcomp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clearcomp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function clearcomp_scripts() {
	wp_enqueue_style( 'clearcomp-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'clearcomp-style', 'rtl', 'replace' );


	wp_enqueue_style('clearcomp-style-marcopolo', get_template_directory_uri() . '/css/marcopolo.css');

	wp_enqueue_style('clearcomp-style-custom', get_template_directory_uri() . '/css/custom.css');

	wp_enqueue_script( 'clearcomp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'clearcomp-main', get_template_directory_uri() . '/js/main.js',  array( 'jquery' ), '0.5.2' , true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clearcomp_scripts' );

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



function move_acf_metabox_to_top() {
    global $post;
        // Add custom CSS to position the ACF meta box at the top
        echo '<style>
            .acf-postbox {
                order: 0 !important;
            }
        </style>';
    
}

add_action('acf/input/admin_head', 'move_acf_metabox_to_top');


add_action('init', function() {
	pll_register_string('clearcomp', 'Contact');
	pll_register_string('clearcomp', 'Hover');
	pll_register_string('clearcomp', 'Calculating');
	pll_register_string('clearcomp', 'About Title');	
	pll_register_string('clearcomp', 'About Sub Title');	
	pll_register_string('clearcomp', 'Commited');	
	pll_register_string('clearcomp', 'Demo');	
	pll_register_string('clearcomp', 'About Sub Title');	
	pll_register_string('clearcomp', 'Devs');	
	pll_register_string('clearcomp', 'Numbers');	
	pll_register_string('clearcomp', 'Copyright');
	pll_register_string('clearcomp', 'Solutions');
	pll_register_string('clearcomp', 'Technology');
	pll_register_string('clearcomp', 'Info');
	pll_register_string('clearcomp', 'FAQ');
	pll_register_string('clearcomp', 'View All');
	pll_register_string('clearcomp', 'Icerberg Front');
	pll_register_string('clearcomp', 'Icerberg Behind');
	pll_register_string('clearcomp', 'Adapting');
});