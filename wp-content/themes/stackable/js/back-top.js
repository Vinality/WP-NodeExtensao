/* global stackableButtonTitle */
( function( $ ) {

	var button, resizeTimer;

	button = $( '<button />', {
		'class': 'back-top',
		'aria-hidden': true,
		text: stackableButtonTitle.desc
	} );

	function createButton() {
		if ( $( window ).innerWidth() < 768 ) {
			if ( 0 === $( '.back-top' ).length ) {
				$( '#page' ).after( button );
			}

			$( '.back-top' ).on( 'click', function() {
				$( 'html, body' ).animate( {
					scrollTop: 0
				}, 250 );
			} );
		} else {
			$( '.back-top' ).remove();
		}
	}

	$( document ).ready( function() {
		$( window )
			.on( 'load.stackable', createButton )
			.on( 'resize.stackable', function() {
				clearTimeout( resizeTimer );
				resizeTimer = setTimeout( createButton, 300 );
			} )
			.on( 'scroll.stackable', function() {
				if ( $( window ).scrollTop() >= $( window ).innerHeight() ) {
					$( '.back-top' ).slideDown( 250 );
				} else {
					$( '.back-top' ).slideUp( 250 );
				}
			} );
	} );

} )( jQuery );
