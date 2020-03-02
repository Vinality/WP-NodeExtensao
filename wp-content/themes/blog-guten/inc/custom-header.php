<?php

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses blog_guten_header_style()
 */
function blog_guten_custom_header_setup() {

	$blog_guten_default_header_text_color = '6f76d9';
	if ( get_theme_mod( 'blog_guten_style_option' ) === 'style2' ) {
		$blog_guten_default_header_text_color = 'DB6352';
	}
	if ( get_theme_mod( 'blog_guten_style_option' ) === 'style3' ) {
		$blog_guten_default_header_text_color = '90525B';
	}

	add_theme_support( 'custom-header', apply_filters( 'blog_guten_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => $blog_guten_default_header_text_color,
		'width'                  => 1600,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'blog_guten_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'blog_guten_custom_header_setup' );

if ( ! function_exists( 'blog_guten_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see blog_guten_custom_header_setup().
	 */
	function blog_guten_header_style() {

		if ( get_header_image() ) : ?>
			<style type="text/css">
				.site-header {
					background-image: url(<?php echo esc_url( get_header_image() ); ?>);
					background-position: center;
					background-size: cover;
				}
			</style>
		<?php
		endif;

		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
		// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;
