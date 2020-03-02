=== Stackable ===
Contributors: bfintal, gambitph
Tags: one-column, two-columns, right-sidebar, flexible-header, custom-background, custom-colors, custom-header, custom-menu, custom-logo, editor-style, featured-image-header, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, translation-ready, blog
Requires at least: 5.0
Tested up to: 5.1
Stable tag: 1.0.4
Requires PHP: 5.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Bold and simple. Made for Stackable - Gutenberg Blocks & the new WordPress editor. Perfect for a business or personal sites and blogs.

== Description ==

Made for [Stackable - Gutenberg Blocks](https://wordpress.org/plugins/stackable-ultimate-gutenberg-blocks/) & the new WordPress editor. Perfect for a business or personal sites and blogs.

* Responsive layout.
* Panel Page Template.
* Full-Width Page Template.
* Jetpack.me compatibility for Infinite Scroll, Social Menu and Testimonial Custom Post Type.

== Frequently Asked Questions ==

= Installation =
	
1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

= I don't see the Testimonial menu in my admin, where can I find it? =

To make the Testimonial menu appear in your admin, you need to install the [Jetpack plugin](http://jetpack.me) because it has the required code needed to make [custom post types](http://codex.wordpress.org/Post_Types#Custom_Post_Types) work for the theme.

Once Jetpack is active, the Testimonial menu will appear in your admin, in addition to standard blog posts. No special Jetpack module is needed and a WordPress.com connection is not required for the Testimonial feature to function. Testimonial will work on a localhost installation of WordPress if you add this line to `wp-config.php`:

`define( 'JETPACK_DEV_DEBUG', TRUE );`

= How to setup the front page like the demo site? =

When you first activate Stackable, you’ll see your posts in a traditional blog format. If you’d like to use the Panel Page Template as the Front Page of your site, as the demo site does, it’s simple to configure:

1. Create or edit a page, and assign it to the Panel Page Template from the Page Attributes module.
2. Go to Settings > Reading and set “Front page displays” to “A static page”.
3. Select the page you just assigned the Panel Page Template to as “Front page” and set another page as the “Posts page” to display your blog posts.
4. Add some [subpages](https://codex.wordpress.org/Pages#To_create_a_subpage) to the page to which you just assigned the Panel Page Template.

= What are the widths used in the theme? =

1. The main column width is 580 except when using the Panel Page Template or Full-Width Page Template where it’s 900.
2. A widget in the sidebar and a widget in the footer when it’s a 3-column layout is 260.
3. A widget in the footer when it’s a one-column layout is 900.
4. A widget in the footer when it’s a two-column layout is 450.
5. Featured Images for posts and pages are 2000 wide by 1500 high.
6. Featured Images for testimonials are 150 wide by 150 high.

== Changelog ==

= 1.0.4 =
* Fixed: Horizontal scrollbar appears if a block is set to full-width.
* Fixed: Sticky menu shows a white area when scrolling up fast.
* Fixed: Set menu text colors are not followed
* Fixed: Fainter menu item border on mobile
* Fixed: Corrected submenu colors on mobile

= 1.0.3 =
* Fixed: Readme.txt formatting
* Fixed: License credits
* Fixed: Missing string translations
* Fixed: Used `wp_add_inline_style` instead of echoing out styles
* Fixed: Changed screenshot image

= 1.0.2 =
* Fixed: License credits
* Fixed: Tweaked some escaping functions
* Fixed: Translation error: Missing singular placeholder, needed for some languages

= 1.0.1 =
* Fixed: Wide & full styles
* Fixed: WordPress 5.0 header error message
* Fixed: WordPress 5.0 editor styles compatibility

= 1.0 =
* Initial release

== Upgrade Notice ==

== Resources ==

* Based on Shoreditch Theme https://github.com/Automattic/themes/tree/master/shoreditch, (C) 2018 Automattic, Inc., licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)
* Shoreditch Theme based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)
* FlexSlider https://github.com/woocommerce/FlexSlider, (C) Copyright 2015 WooThemes, licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, licensed under [MIT](http://opensource.org/licenses/MIT)
* Genericons: font by Automattic (http://automattic.com/), licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)

Image used in the theme screenshot, Copyright John O'Nolan
License: CC0 1.0 Universal (CC0 1.0)
Source: https://stocksnap.io/photo/1S9HNWSSI9
