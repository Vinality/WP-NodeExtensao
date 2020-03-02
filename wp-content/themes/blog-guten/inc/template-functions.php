<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 */

// Adds custom classes to the array of body classes.
function blog_guten_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	if ( get_theme_mod( 'blog_guten_sidebar_position', 'hide' ) === 'hide' ) {
		$classes[] = 'hide-sidebar';
	}

	if ( get_theme_mod( 'blog_guten_sidebar_position', 'hide' ) === 'left' ) {
		$classes[] = 'left-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'blog_guten_body_classes' );



/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function blog_guten_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'blog_guten_pingback_header' );



/**
* Check if cover section is displayed
*/
function blog_guten_is_not_home() {
	if( ! is_home() ) {
		return true;
	}
	return false;
}



/**
* Check if cover section is displayed
*/
function blog_guten_is_cover_active() {
	if( get_theme_mod( 'blog_guten_display_cover_section', true ) ) {
		return true;
	}
	return false;
}



/**
 * Image sanitization callback
 */
function blog_guten_sanitize_image( $image, $setting ) {
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
	// Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );
	// If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}



/**
 * Fire the wp_body_open action.
 *
 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
 */
if ( ! function_exists( 'wp_body_open' ) ) :
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 *
		 * @since Twenty Nineteen 1.4
		 */
		do_action( 'wp_body_open' );
	}
endif;



/**
* Greet new users & guide them to help page
*/
function blog_guten_admin_notice(){
	if ( is_admin() && ! get_option( 'blog-guten-intro-dismissed' ) && get_theme_mod( 'blog_guten_style_option', 'style1' ) === 'style1' ) {
		blog_guten_greet_user();
	}
	if ( is_admin() && get_theme_mod( 'blog_guten_style_option', 'style1' ) != 'style1' ) {
		blog_guten_upgrade_request_notice();
	}
}
$blog_guten_intro_notice_dismissed   = get_option( 'blog-guten-intro-dismissed' );
$blog_guten_upgrade_notice_dismissed = get_option( 'blog-guten-upgrade-dismissed' );
if( empty( $blog_guten_intro_notice_dismissed ) || empty( $blog_guten_upgrade_notice_dismissed ) ) {
	add_action('admin_notices', 'blog_guten_admin_notice');
}

function blog_guten_greet_user() {
	echo '<div class="notice blog-guten-intro-notice notice-success is-dismissible">';
	echo wp_kses_post( __( '<h2>Welcome!</h2>', 'blog-guten' ) );
	echo wp_kses_post( __( '<p style="margin-bottom: 15px;">Thank you for choosing \'Blog Guten\' theme. You can always reach out to us on the support forum if you need any help. If you like our work, please support us by providing a review with 5-star ratings. Please don\'t forget to take a look at premium version of this theme.', 'blog-guten' ) );
	echo "<p><a href='";
	echo esc_url( admin_url('themes.php?page=about-blog-guten-theme') );
	echo "' class='button button-primary' style='margin-bottom: 10px;'>";
	esc_html_e( 'Get Started with Blog Guten', 'blog-guten' );
	echo "</a><a href='#' class='bd-notice-dismiss' style='margin-left: 10px;float: right;'>";
	esc_html_e( 'Don\'t display this message again!', 'blog-guten' );
	echo '</a></p></div>';
}

function blog_guten_upgrade_request_notice() {
	echo '<div class="notice blog-guten-intro-notice notice-success is-dismissible">';
	echo wp_kses_post( __( '<h2>Take a look at premium features...</h2>', 'blog-guten' ) );
	echo wp_kses_post( __( '<p style="margin-bottom: 15px;">It looks like you are enjoying the free version of \'Blog Guten\' theme. You can get more style options if you upgrade to the premium version with professional support. There are many more benefits with the pro version. Click the following button to learn more.</p>', 'blog-guten' ) );
	echo "<p><a href='https://wp-points.com/themes/blog-guten-pro/' class='button button-primary' target='_blank' style='margin-bottom:10px;'>";
	esc_html_e( 'Learn More About \'Blog Guten Pro\'', 'blog-guten' );
	echo "</a><a href='https://blog-guten-pro.wp-points.com/' class='button' target='_blank' style='margin-left: 10px;'>";
	esc_html_e( 'View Pro Demo', 'blog-guten' );
	echo "</a><a href='#' class='bd-up-notice-dismiss' style='margin-left: 10px;float: right;'>";
	esc_html_e( 'Don\'t display this again!', 'blog-guten' );
	echo '</a></p></div>';
}


// Enqueue dismiss script
function blog_guten_admin_scripts() {
	wp_enqueue_script( 'blog-guten-admin', get_template_directory_uri() . '/assets/js/blog-guten-admin.js' );
}
$blog_guten_intro_notice_dismissed   = get_option( 'blog-guten-intro-dismissed' );
$blog_guten_upgrade_notice_dismissed = get_option( 'blog-guten-upgrade-dismissed' );
if( empty( $blog_guten_intro_notice_dismissed ) || empty( $blog_guten_upgrade_notice_dismissed ) ) {
	add_action( 'admin_enqueue_scripts' , 'blog_guten_admin_scripts' );
}

// Update option if notice dismissed
add_action( 'wp_ajax_blog-guten-intro-dismissed', 'blog_guten_dismiss_intro_notice' );
function blog_guten_dismiss_intro_notice() {
	update_option( 'blog-guten-intro-dismissed', 1 );
}
add_action( 'wp_ajax_blog-guten-upgrade-dismissed', 'blog_guten_dismiss_upgrade_notice' );
function blog_guten_dismiss_upgrade_notice() {
	update_option( 'blog-guten-upgrade-dismissed', 1 );
}
