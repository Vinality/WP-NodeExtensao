/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

    function createCustomProp( customProp, value ) {
        let styleTag = $( '#' + customProp );
        if ( ! styleTag.length ) {
            styleTag = $( '<style id="' + customProp + '"></style>' );
            $( 'body' ).append( styleTag );
        }
        styleTag.html( ':root { --' + customProp + ': ' + value + ' !important; }' );
    }

	wp.customize( 's_primary_color', function( value ) {
		value.bind( function( to ) {
            createCustomProp( 's-primary-color', to );
		} );
	} );
	wp.customize( 's_header_bg_color', function( value ) {
		value.bind( function( to ) {
            createCustomProp( 's-header-bg-color', to );
		} );
	} );
	wp.customize( 's_header_menu_text_color', function( value ) {
		value.bind( function( to ) {
            createCustomProp( 's-header-menu-text-color', to );
		} );
	} );
	wp.customize( 's_header_menu_text_hover_color', function( value ) {
		value.bind( function( to ) {
            createCustomProp( 's-header-menu-text-hover-color', to );
		} );
	} );
} )( jQuery );
