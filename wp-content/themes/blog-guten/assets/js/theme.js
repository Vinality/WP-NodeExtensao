jQuery(document).ready(function(jQuery) {

    "use strict";

    jQuery('#primary-menu').slicknav({
        appendTo        : '.site-branding',
        label           : '',
        allowParentLinks: true
    });

    // For Fixed header & Scroll to top
	jQuery(window).on("scroll resize", function() {
		if (jQuery(window).scrollTop() >= 700) {
            jQuery(".goto-top").css("bottom", "20px");
		}
		if (jQuery(window).scrollTop() < 700) {
            jQuery(".goto-top").css("bottom", "-70px");
		}
    });
    
    jQuery(".goto-top").click(function(){
        jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
