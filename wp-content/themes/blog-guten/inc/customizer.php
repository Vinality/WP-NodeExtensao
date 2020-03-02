<?php
/**
 * Blog Guten Theme Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function blog_guten_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'blog_guten_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'blog_guten_customize_partial_blogdescription',
		) );
		$wp_customize->selective_refresh->add_partial( 'blog_guten_cover_title', array(
			'selector'         => '.bg-cover-title',
			'render_callback' => 'blog_guten_customize_partial_cover_title',
		) );
		$wp_customize->selective_refresh->add_partial( 'blog_guten_cover_subtitle', array(
			'selector'         => '.bg-cover-desc',
			'render_callback' => 'blog_guten_customize_partial_cover_subtitle',
		) );
		$wp_customize->selective_refresh->add_partial( 'blog_guten_cover_btn_text', array(
			'selector'         => '.bg-cover-btn',
			'render_callback' => 'blog_guten_customize_partial_cover_btn_text',
		) );
	}

	include get_template_directory() . '/inc/customizer/theme-options.php';
}
add_action( 'customize_register', 'blog_guten_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function blog_guten_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function blog_guten_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
function blog_guten_customize_partial_cover_title() {
	echo esc_html( get_theme_mod( 'blog_guten_cover_title' ) );
}
function blog_guten_customize_partial_cover_subtitle() {
	echo esc_html( get_theme_mod( 'blog_guten_cover_subtitle' ) );
}
function blog_guten_customize_partial_cover_btn_text() {
	echo esc_html( get_theme_mod( 'blog_guten_cover_btn_text' ) );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function blog_guten_customize_preview_js() {
	wp_enqueue_script( 'blog-guten-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20190927', true );
}
add_action( 'customize_preview_init', 'blog_guten_customize_preview_js' );


// Add Styles to the Customizer
function blog_guten_customizer_css()
{
	wp_enqueue_style( 'blog-guten-customizer-css', get_template_directory_uri() . '/inc/customizer/customizer.css' );
}
add_action( 'customize_controls_print_styles', 'blog_guten_customizer_css' );


// Custom CSS output for theme options
function blog_guten_custom_css_output() { ?>
	<style type="text/css" id="custom-theme-css">
		.custom-logo { height: <?php echo esc_attr( get_theme_mod( 'blog_guten_logo_height', '60' ) ); ?>px; width: auto; }
	</style>
	<?php
}
add_action( 'wp_head', 'blog_guten_custom_css_output');
