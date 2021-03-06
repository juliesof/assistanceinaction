<?php
/**
 * AssistanceInAction functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AssistanceInAction
 */

if ( ! function_exists( 'assistanceinaction_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function assistanceinaction_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on AssistanceInAction, use a find and replace
		 * to change 'assistanceinaction' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'assistanceinaction', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'assistanceinaction' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'assistanceinaction_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'assistanceinaction_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function assistanceinaction_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'assistanceinaction_content_width', 640 );
}
add_action( 'after_setup_theme', 'assistanceinaction_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function assistanceinaction_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'assistanceinaction' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'assistanceinaction' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'assistanceinaction_widgets_init' );

// Add  a js parameter to font awesome cdn link, defer="defer"
add_filter( 'script_loader_tag', function ( $tag, $handle ) {

    if ( 'font-awesome-cdn' !== $handle )
        return $tag;

    return str_replace( ' src', ' defer="defer" src', $tag );
}, 10, 2 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function cb_read_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'cb_read_more' );


/**
 * Enqueue scripts and styles.
 */
// function google_fonts() {
// 	$query_args = array(
// 		'family' => 'Cinzel+Decorative|Cinzel:700',
// 		'subset' => 'latin,latin-ext'
// 	);
// 	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
//             }
            
// add_action('wp_enqueue_scripts', 'google_fonts');

/**
 * Enqueue scripts and styles.
 */
function assistanceinaction_scripts() {

	$theme = wp_get_theme( 'assistanceinaction' );
    $version = $theme->get( 'Version' );

	wp_enqueue_style( 'onepress-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', true, $version );
	wp_enqueue_style( 'assistanceinaction-style', get_stylesheet_uri() );

	wp_enqueue_style( 'creative-blazer-style', get_stylesheet_directory_uri() . '/style-creative.css' );

	wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Cinzel+Decorative|Cinzel:700|Lato&amp;subset=latin-ext' );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'assistanceinaction-js-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), $version, true );
	wp_enqueue_script( 'assistanceinaction-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'assistanceinaction-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'font-awesome-cdn', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', array(), $version, true );

	wp_enqueue_script( 'creative-js',  get_template_directory_uri() . '/js/creative.js', array(), $version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'assistanceinaction_scripts' );

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

// WP Nav-Walker-Bootstrap
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Custom post types function for testimonials
function create_custom_post_types(){
// Create testimonials post type
	register_post_type('testimonials',
		array(
		'labels' => array(
			'name' => __('Testimonials'),
			'singular_name' => __('Testimonial'),
			),
		'public' => true,
		'has_archive' => true,
		'show_in_nav_menus' => true,
		'rewrite' => array (
			'slug' => 'testimonials'
			),
		)
	);
	// Create services post type
	register_post_type('services',
		array(
		'labels' => array(
			'name' => __('Services'),
			'singular_name' => __('Service'),
			),
		'public' => true,
		'has_archive' => true,
		'show_in_nav_menus' => true,
		'rewrite' => array (
			'slug' => 'services'
			),
		)
	);
}

// Hook this custom post type function into the theme
add_action('init', 'create_custom_post_types');