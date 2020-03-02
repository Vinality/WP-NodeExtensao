jQuery(document).ready(function(jQuery) {

	"use strict";

	jQuery(document).on( 'click', '.blog-guten-intro-notice .bd-notice-dismiss', function(e) {
		e.preventDefault();
		jQuery.ajax({
			url: ajaxurl,
			data: {
				action: 'blog-guten-intro-dismissed'
			},
			success: function() {
				location.reload();
			}
		});
    });
    
    jQuery(document).on( 'click', '.blog-guten-intro-notice .bd-up-notice-dismiss', function(e) {
		e.preventDefault();
		jQuery.ajax({
			url: ajaxurl,
			data: {
				action: 'blog-guten-upgrade-dismissed'
			},
			success: function() {
				location.reload();
			}
		});
	});

});
