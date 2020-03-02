<?php
/**
 * Stackable Theme Customizer.
 *
 * @package Stackable
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function stackable_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'stackable_theme_options', array(
		'title'             => esc_html__( 'Theme Options', 'stackable' ),
		'priority'          => 130,
	) );

	$wp_customize->add_setting( 'stackable_sticky_header', array(
		'default'           => '',
		'sanitize_callback' => 'stackable_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'stackable_sticky_header', array(
		'label'             => esc_html__( 'Fixed header when scrolling down.', 'stackable' ),
		'section'           => 'stackable_theme_options',
		'type'              => 'checkbox',
	) );

	$wp_customize->add_setting( 'stackable_footer_top_column', array(
		'default'           => 'column-1',
		'sanitize_callback' => 'stackable_sanitize_column',
	) );

	$wp_customize->add_control( 'stackable_footer_top_column', array(
		'label'             => esc_html__( 'Top Footer Area Layout', 'stackable' ),
		'section'           => 'stackable_theme_options',
		'type'              => 'radio',
		'choices'           => array(
			'column-1' => esc_html__( '1 Column', 'stackable' ),
			'column-2' => esc_html__( '2 Columns', 'stackable' ),
			'column-3' => esc_html__( '3 Columns', 'stackable' ),
		),
	) );

	$wp_customize->add_setting( 'stackable_footer_bottom_column', array(
		'default'           => 'column-3',
		'sanitize_callback' => 'stackable_sanitize_column',
	) );

	$wp_customize->add_control( 'stackable_footer_bottom_column', array(
		'label'             => esc_html__( 'Bottom Footer Area Layout', 'stackable' ),
		'section'           => 'stackable_theme_options',
		'type'              => 'radio',
		'choices'           => array(
			'column-1' => esc_html__( '1 Column', 'stackable' ),
			'column-2' => esc_html__( '2 Columns', 'stackable' ),
			'column-3' => esc_html__( '3 Columns', 'stackable' ),
		),
	) );
}
add_action( 'customize_register', 'stackable_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function stackable_customize_preview_js() {
	wp_enqueue_script( 'stackable_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'stackable_customize_preview_js' );

/**
 * Sanitize the checkbox.
 *
 * @param boolean $input.
 * @return boolean true if portfolio page template displays title and content.
 */
function stackable_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Sanitize the Column value.
 *
 * @param string $column.
 * @return string (column-1|column-2|column-3).
 */
function stackable_sanitize_column( $column ) {
	if ( ! in_array( $column, array( 'column-1', 'column-2', 'column-3' ) ) ) {
		$column = 'column-1';
	}
	return $column;
}