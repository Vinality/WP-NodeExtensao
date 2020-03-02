<?php

function stackable_editor_styles() {

    // Add our custom editor styles.
    wp_enqueue_style( 'stackable-theme-block-editor-styles', get_theme_file_uri( '/style-editor.css' ), false, '1.0', 'all' );

    // Add our fonts.
    wp_enqueue_style( 'stackable-editor-fonts', stackable_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'stackable_editor_styles' );

function stackable_custom_classic_styles() {
    add_editor_style( array( 'style-editor-classic.css', stackable_fonts_url() ) );
}

add_action( 'after_setup_theme', 'stackable_custom_classic_styles' );