<?php
/**
 * Blog Guten functions and definitions
 */

if ( ! function_exists( 'blog_guten_setup' ) ) :
	function blog_guten_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'blog-guten', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'blog-guten' ),
		) );

		// Switch default core markup to output valid HTML5.
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'blog_guten_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'custom-header' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add theme support for responsive embeds
		add_theme_support( 'responsive-embeds' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		// Add theme support for editor styles
		add_theme_support( 'editor-styles' );
		add_editor_style( 'editor-style.css' );

		// Add support for cwide images in block editor
		add_theme_support( 'align-wide' );

		// Add primary color in the editor color palette
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Light Purple', 'blog-guten' ),
				'slug'  => 'light-purple',
				'color'	=> '#6f76d9',
			),
			array(
				'name'  => __( 'Light Pink', 'blog-guten' ),
				'slug'  => 'light-pink',
				'color'	=> '#ff6492',
			),
			array(
				'name'  => __( 'Light Black', 'blog-guten' ),
				'slug'  => 'light-black',
				'color'	=> '#50556c',
			),
			array(
				'name'  => __( 'White', 'blog-guten' ),
				'slug'  => 'white',
				'color'	=> '#ffffff',
			),
		) );

		if ( get_theme_mod( 'blog_guten_style_option' ) === 'style2' ) {
			add_theme_support( 'editor-color-palette', array(
				array(
					'name'  => __( 'Primary Color', 'blog-guten' ),
					'slug'  => 'primary-color',
					'color'	=> '#DB6352',
				),
				array(
					'name'  => __( 'Secondary Color', 'blog-guten' ),
					'slug'  => 'secondary-color',
					'color'	=> '#28293E',
				),
				array(
					'name'  => __( 'Light Black', 'blog-guten' ),
					'slug'  => 'light-black',
					'color'	=> '#50556c',
				),
				array(
					'name'  => __( 'White', 'blog-guten' ),
					'slug'  => 'white',
					'color'	=> '#ffffff',
				),
			) );
		}

		if ( get_theme_mod( 'blog_guten_style_option' ) === 'style3' ) {
			add_theme_support( 'editor-color-palette', array(
				array(
					'name'  => __( 'Primary Color', 'blog-guten' ),
					'slug'  => 'primary-color',
					'color'	=> '#90525B',
				),
				array(
					'name'  => __( 'Secondary Color', 'blog-guten' ),
					'slug'  => 'secondary-color',
					'color'	=> '#DB9B51',
				),
				array(
					'name'  => __( 'Light Black', 'blog-guten' ),
					'slug'  => 'light-black',
					'color'	=> '#50556c',
				),
				array(
					'name'  => __( 'White', 'blog-guten' ),
					'slug'  => 'white',
					'color'	=> '#ffffff',
				),
			) );
		}
	}
endif;
add_action( 'after_setup_theme', 'blog_guten_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function blog_guten_content_width() {
	// This variable is intended to be overruled from themes.
	$GLOBALS['content_width'] = apply_filters( 'blog_guten_content_width', 780 );
}
add_action( 'after_setup_theme', 'blog_guten_content_width', 0 );



/**
 * Register widget area.
 */
function blog_guten_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blog-guten' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'blog-guten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'blog_guten_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function blog_guten_scripts() {
	wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'v4.3.1', 'all' );
	if( get_theme_mod( 'blog_guten_style_option', 'style1' ) === 'style1' ) {
		wp_enqueue_style( 'blog-guten-fonts', '//fonts.googleapis.com/css?family=Barlow:400,400i,600,600i&display=swap' );
	}
	wp_enqueue_style( 'slicknavcss', get_template_directory_uri() . '/assets/css/slicknav.css', array(), 'v1.0.10', 'all' );
	wp_enqueue_style( 'blog-guten-style', get_stylesheet_uri(), array(), 'v1.0.0', 'all' );

	if( get_theme_mod( 'blog_guten_style_option' ) === 'style2' ) {
		wp_enqueue_style( 'blog-guten-fonts2', '//fonts.googleapis.com/css?family=Poppins:400,400i,600&display=swap' );
		wp_enqueue_style( 'blog-guten-style2', get_template_directory_uri() . '/assets/css/theme-style2.css', array( 'blog-guten-style' ), 'v1.0.0', 'all' );
	}

	if( get_theme_mod( 'blog_guten_style_option' ) === 'style3' ) {
		wp_enqueue_style( 'blog-guten-fonts3', '//fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap' );
		wp_enqueue_style( 'blog-guten-style3', get_template_directory_uri() . '/assets/css/theme-style3.css', array( 'blog-guten-style' ), 'v1.0.0', 'all' );
	}

	if( get_theme_mod( 'blog_guten_style_option' ) === 'style4' ) {
		wp_enqueue_style( 'blog-guten-fonts', '//fonts.googleapis.com/css?family=Barlow:400,400i,600,600i&display=swap' );
		wp_enqueue_style( 'blog-guten-style4', get_template_directory_uri() . '/assets/css/theme-style4.css', array( 'blog-guten-style' ), 'v1.0.0', 'all' );
	}

	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), 'v1.0.10', true );
	wp_enqueue_script( 'blog-guten-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'blog-guten-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'blog-guten-theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blog_guten_scripts' );



/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// About theme page.
require get_template_directory() . '/inc/about/about-theme.php';
