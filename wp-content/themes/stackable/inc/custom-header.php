<?php
/**
 * Implementation of the Custom Header feature.
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Stackable
 */

if ( ! function_exists( 'stackable_custom_header_setup' ) ) {

	/**
	 * Set up the WordPress core custom header feature.
	 *
	 * @uses stackable_header_style()
	 */
	function stackable_custom_header_setup() {
		add_theme_support( 'custom-header', apply_filters( 'stackable_custom_header_args', array(
			'default-image'          => '',
			'default-text-color'     => '3e69dc',
			'width'                  => 2000,
			'height'                 => 250,
			'flex-height'            => true,
			'flex-width'             => true,
		) ) );
	}

	add_action( 'after_setup_theme', 'stackable_custom_header_setup' );
}

if ( ! function_exists( 'stackable_header_style' ) ) {
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see stackable_custom_header_setup().
	 */
	function stackable_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		* If no custom options for text are set, let's bail.
		* get_header_textcolor() options: add_theme_support( 'custom-header' ) is default, hide text (returns 'blank') or any hex value.
		*/
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		$custom_css = '';

		// If we get this far, we have custom styles. Let's do this.
		if ( 'blank' === $header_text_color ) {

			// Has the text been hidden?
			$custom_css .= '
				.site-title,
				.site-description {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
				}
			';
		} else {

			// If the user has set a custom color for the text use that.
			$color = esc_attr( $header_text_color );
			$custom_css .= '
				.site-title a,
				.site-description {
					color: #' . esc_attr( $header_text_color ) . ';
				}
			';
		}

		wp_add_inline_style( 'stackable-style', $custom_css );
	}

	add_action( 'wp_enqueue_scripts', 'stackable_header_style' );
}