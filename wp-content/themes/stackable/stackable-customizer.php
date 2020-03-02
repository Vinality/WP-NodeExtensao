<?php

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'stackable_customize_preview_js_more_colors' ) ) {
    function stackable_customize_preview_js_more_colors() {
        wp_enqueue_script( 'stackable_customizer_more', get_template_directory_uri() . '/js/stackable-customizer.js', array( 'customize-preview' ), '20180508', true );
    }
    add_action( 'customize_preview_init', 'stackable_customize_preview_js_more_colors' );
}


if ( ! function_exists( 'stackable_customize_register_more_colors' ) ) {
    function stackable_customize_register_more_colors( $wp_customize ) {
        $wp_customize->add_setting( 's_primary_color', array(
            'default' => '#ab5af1',
            'transport' => 'postMessage',
            'sanitize_callback' => 'sanitize_hex_color',
        ) );
            
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 's_primary_color', array(
            'label' => esc_html__( 'Primary Color', 'stackable' ),
            'section' => 'colors',
            'settings' => 's_primary_color',
        ) ) );

        $wp_customize->add_setting( 's_header_bg_color', array(
            'default' => '#fb6874',
            'transport' => 'postMessage',
            'sanitize_callback' => 'sanitize_hex_color',
        ) );
            
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 's_header_bg_color', array(
            'label' => esc_html__( 'Header Background Color', 'stackable' ),
            'section' => 'colors',
            'settings' => 's_header_bg_color',
        ) ) );

        $wp_customize->add_setting( 's_header_menu_text_color', array(
            'default' => '#ffffff',
            'transport' => 'postMessage',
            'sanitize_callback' => 'sanitize_hex_color',
        ) );
            
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 's_header_menu_text_color', array(
            'label' => esc_html__( 'Header Menu Text Color', 'stackable' ),
            'section' => 'colors',
            'settings' => 's_header_menu_text_color',
        ) ) );

        $wp_customize->add_setting( 's_header_menu_text_hover_color', array(
            'default' => '#a73a43',
            'transport' => 'postMessage',
            'sanitize_callback' => 'sanitize_hex_color',
        ) );
            
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 's_header_menu_text_hover_color', array(
            'label' => esc_html__( 'Header Menu Text Hover Color', 'stackable' ),
            'section' => 'colors',
            'settings' => 's_header_menu_text_hover_color',
        ) ) );

        $wp_customize->add_setting( 's_footer_text', array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        ) );

        $wp_customize->add_control( 's_footer_text', array(
            'label'             => esc_html__( 'Footer Text', 'stackable' ),
            'section'           => 'stackable_theme_options',
            'type'              => 'text',
        ) );
    }
    add_action( 'customize_register', 'stackable_customize_register_more_colors', 9 );
}

function stackable_custom_styles() {
    $s_header_bg_color = get_theme_mod( 's_header_bg_color', '#fb6874' );
    $s_header_menu_text_color = get_theme_mod( 's_header_menu_text_color', '#ffffff' );
    $s_header_menu_text_hover_color = get_theme_mod( 's_header_menu_text_hover_color', '#a73a43' );
    $s_primary_color = get_theme_mod( 's_primary_color', '#ab5af1' );

    $custom_css = ':root {
        --s-header-bg-color: ' . esc_attr( $s_header_bg_color ) . ';
        --s-header-menu-text-color: ' . esc_attr( $s_header_menu_text_color ) . ';
        --s-header-menu-text-hover-color: ' . esc_attr( $s_header_menu_text_hover_color ) . ';
        --s-primary-color: ' . esc_attr( $s_primary_color ) . ';
    }';

    wp_add_inline_style( 'stackable-theme-block-editor-styles', $custom_css );
    wp_add_inline_style( 'stackable-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'stackable_custom_styles' );
add_action( 'enqueue_block_editor_assets', 'stackable_custom_styles', 11 );
