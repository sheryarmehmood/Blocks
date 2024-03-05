<?php
/**
 * blocks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blocks
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
function blocks_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on blocks, use a find and replace
		* to change 'blocks' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'blocks', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'blocks' ),
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
			'blocks_custom_background_args',
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
add_action( 'after_setup_theme', 'blocks_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blocks_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blocks_content_width', 640 );
}
add_action( 'after_setup_theme', 'blocks_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blocks_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'blocks' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'blocks' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'blocks_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blocks_scripts() {
	wp_enqueue_style( 'blocks-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'blocks-style', 'rtl', 'replace' );

	wp_enqueue_script( 'blocks-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blocks_scripts' );

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


//hero-block registration
function ankr_agency_custom_blocks() {
    /* Check if function exists */
    if ( function_exists( 'acf_register_block' ) ) {
		
		/* Registering custom blocks */

		// Register Hero Block
        acf_register_block( array(
            'name'            => 'hero-block',
            'title'           => __( 'Hero block' ),
            'description'     => __( 'FHRC Hero Section' ),
            'render_template' => '/custom-blocks/hero-block/hero-block.php',
            'enqueue_assets'  => function () {
                wp_enqueue_style( 'home-hero-block-style', get_template_directory_uri() . '/custom-blocks/hero-block/hero-block.css', array(), '1.0', 'all' );
                wp_enqueue_script( 'home-hero-block-script', get_template_directory_uri() . '/custom-blocks/hero-block/hero-block.js', array(), '1.0', true );
            },
            'category'        => 'blocks',
            'icon'            => 'welcome-add-page',
            'keywords'        => array( 'heroblock', 'hero' ),
            'multiple'        => true,
            'mode'            => 'edit',
        ) );


		// Register About Block
		acf_register_block( array(
            'name'            => 'about-block',
            'title'           => __( 'About block' ),
            'description'     => __( 'FHRC About Section' ),
            'render_template' => '/custom-blocks/about-block/about-block.php',
            'enqueue_assets'  => function () {
                wp_enqueue_style( 'home-about-block-style', get_template_directory_uri() . '/custom-blocks/about-block/about-block.css', array(), '1.0', 'all' );
                wp_enqueue_script( 'home-about-block-script', get_template_directory_uri() . '/custom-blocks/about-block/about-block.js', array(), '1.0', true );
            },
            'category'        => 'blocks',
            'icon'            => 'welcome-add-page',
            'keywords'        => array( 'aboutblock', 'about' ),
            'multiple'        => true,
            'mode'            => 'edit',
        ) );


		// Register Services Block
		acf_register_block( array(
            'name'            => 'services-block',
            'title'           => __( 'Services block' ),
            'description'     => __( 'FHRC Services Section' ),
            'render_template' => '/custom-blocks/services-block/services-block.php',
            'enqueue_assets'  => function () {
                wp_enqueue_style( 'services-block-style', get_template_directory_uri() . '/custom-blocks/services-block/services-block.css', array(), '1.0', 'all' );
                wp_enqueue_script( 'services-block-script', get_template_directory_uri() . '/custom-blocks/services-block/services-block.js', array(), '1.0', true );
            },
            'category'        => 'blocks',
            'icon'            => 'welcome-add-page',
            'keywords'        => array( 'servicesblock', 'services' ),
            'multiple'        => true,
            'mode'            => 'edit',
        ) );


    }
}
add_action( 'acf/init', 'ankr_agency_custom_blocks' );

