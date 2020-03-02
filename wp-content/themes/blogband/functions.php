<?php 
/**
 * The template for functions 
 *
 * @version    0.0.23
 * @package    blogband
 * @author     Zidithemes
 * @copyright  Copyright (C) 2020 zidithemes.tumblr.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * 
 */


if ( ! defined( 'ABSPATH' ) ) { exit; }


require get_template_directory() . "/inc/blogband-layout-customizer.php";
require get_template_directory() . "/inc/blogband-options.php";
require get_template_directory() . "/inc/blogband-adm-style-options.php";
require get_template_directory() . "/inc/blogband-customizer-pro-btn.php";

function blogband_setup(){


	// ADD THEME SUPPORT
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support('woocommerce');


	//ADD IMAGE SIZES
	add_image_size( 'blogband-large', 590, 9999 );
	add_image_size('blogband-featured', 400, 250);
	add_image_size( 'blogband-medium', 800, 240 );

	

	register_nav_menus(
	    array(
	      'primary-menu' => esc_attr__( 'Primary Menu', 'blogband' ),
	    )
	  );


	// SET CONTENT WIDTH
	if ( ! isset( $content_width ) ) $content_width = 600;

}

add_action('after_setup_theme', 'blogband_setup');

// Load styles
function blogband_load_styles_scripts(){
	// NOTE:   SOME OF THESE SCRIPTS ARE HOSTED ON A CDN AND ARE NOT STORED LOCALLY... SO THIS THEME MAY NOT RENDER PROPERLY IF YOU ARE NOT CONNECTED TO THE INTERNET
	
		wp_enqueue_style( 'blogband-style', get_template_directory_uri() . '/style.css');

		wp_enqueue_style( 'blogband-google-noto-font', 'https://fonts.googleapis.com/css?family=Noto+Sans');

		wp_enqueue_script('blogband-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js' );
		
		if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); 
	
}

add_action('wp_enqueue_scripts', 'blogband_load_styles_scripts');

function blogband_pingback_wrap(){

		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
		}

}
add_action( 'wp_head', 'blogband_pingback_wrap');



// Creating the sidebar
function blogband_menu_init() {


register_sidebar(
		array(
                'name' 			=> esc_html__('Sidebar Widgets', 'blogband'),
                'id'    		=> 'sidebar_id',
                'class'       	=> '',
				'description' 	=> esc_html__('Add sidebar widgets here', 'blogband'),
				'before_widget' => '<div class="sidebar-items">',
				'after_widget' 	=> '</div>',
				'before_title' 	=> '<h2>',
				'after_title' 	=> '</h2>',
	));

	register_sidebar(array(
                'name' 			=> esc_html__('Main Footer', 'blogband'),
                'id'    		=> 'main_footer',
                'class' 		=> '',
				'description' 	=> esc_html__('Add widgets here', 'blogband'),
				'before_widget' => '<li>',
				'after_widget' 	=> '</li>',
				'before_title' 	=> '<h2>',
				'after_title' 	=> '</h2>',
	));
	

}
add_action('widgets_init', 'blogband_menu_init');

// this increases or decreaes the length of the excerpt on the index page
function blogband_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}
	return 20;
}
add_filter( 'excerpt_length', 'blogband_excerpt_length', 999 );

function blogband_excerpt_more( $more ) {
    //return 'More';
    return ' <a class="read-more" href="'. esc_url(get_permalink( get_the_ID() ) ) . '">' . esc_html('Read More', 'blogband') . '</a>';
}
add_filter( 'excerpt_more', 'blogband_excerpt_more' );


/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function blogband_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'blogband_skip_link_focus_fix' );


