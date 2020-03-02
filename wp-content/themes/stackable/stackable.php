<?php

add_theme_support( 'align-wide' );


/**
 * Change the default header text color.
 */
if ( ! function_exists( 'stackable_stackable_custom_header_args' ) ) {
    add_filter( 'stackable_custom_header_args', 'stackable_stackable_custom_header_args' );
    function stackable_stackable_custom_header_args( $args ) {
        $args['default-text-color'] = 'ffffff';
        return $args;
    }
}


/**
 * Allow skip cropping for the custom logo.
 */
if ( ! function_exists( 'stackable_skip_crop_logo' ) ) {
    add_action( 'after_setup_theme', 'stackable_skip_crop_logo', 11 );
    function stackable_skip_crop_logo() {
        add_theme_support( 'custom-logo', array(
            'height' => 240,
            'width' => 240,
            'flex-height' => true,
            'flex-width'  => true, // Flex both true to allow skip cropping.
        ) );
    }
}

if ( ! function_exists( 'stackable_footer_text' ) ) {
    function stackable_footer_text() {
        $footer_text = get_theme_mod( 's_footer_text' );
        if ( empty( $footer_text ) ) {
            printf( esc_html__( 'Theme by %1$s.', 'stackable' ), '<a href="https://wpstackable.com/" rel="designer">Stackable</a>' );
        } else {
            echo wp_kses_post( $footer_text );
        }
    }
}


// Adds a class of no-sidebar to the list of blog posts.
// No sidebar either if there are no widgets active.
if ( ! function_exists( 'stackable_blog_body_classes' ) ) {
    function stackable_blog_body_classes( $classes ) {
        if ( is_home() || ! is_active_sidebar( 'sidebar-1' ) ) {
            $classes[] = 'no-sidebar';
        }

        return $classes;
    }
    add_filter( 'body_class', 'stackable_blog_body_classes' );
}