<?php

// Add About Them Page
function blog_guten_about_page() {
	add_theme_page( esc_html__( 'About Theme', 'blog-guten' ), esc_html__( 'About Theme', 'blog-guten' ), 'edit_theme_options', 'about-blog-guten-theme', 'blog_guten_about_page_output' );
}
add_action( 'admin_menu', 'blog_guten_about_page' );



// Render About Theme HTML
function blog_guten_about_page_output() {

	$active_tab = isset( $_GET[ 'tab' ] ) ? esc_html( $_GET[ 'tab' ] ) : 'blog_guten_1';

?>
	<div class="wrap about__container">

		<?php if ( $active_tab === 'blog_guten_1' ):  ?>

			<div class="about__header">
				<div class="about__header-title">
					<h1><?php echo esc_html__( 'Welcome to \'Blog Guten\'', 'blog-guten' ); ?></h1>
				</div>
				<div class="about__header-badge"></div>
				<div class="about__header-text">
					<p><?php echo esc_html__( 'A minimal WordPress blog theme, developed to work seamlessly with Gutenberg Block Editor. It is simple, easy-to-use & powerful.', 'blog-guten' ); ?></p>
				</div>

				<nav class="about__header-navigation nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'blog-guten' ); ?>">
					<a href="?page=about-blog-guten-theme&tab=blog_guten_1" class="nav-tab nav-tab-active" aria-current="page"><?php esc_html_e( 'Getting Started', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_2" class="nav-tab"><?php esc_html_e( 'Video Tutorials', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_3" class="nav-tab"><?php esc_html_e( 'Support', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_4" class="nav-tab"><?php esc_html_e( 'Upgrade to Pro', 'blog-guten' ); ?></a>
				</nav>
			</div>

			<div class="about__section changelog">
				<div class="column">
					<h2><?php esc_html_e( 'Introduction', 'blog-guten' ); ?></h2>
					<p><?php esc_html_e( 'It is fully responsive and works flawlessly on all types of devices like mobiles, tablets, laptops, and computers. \'Blog Guten\' is search engine friendly. It integrates perfectly with popular SEO plugins like Yoast SEO to create an SEO ready blog. This theme is fast, secure & lightweight.', 'blog-guten' ); ?></p>
				</div>
			</div>

			<div class="about__section has-3-columns has-subtle-background-color">
				<div class="column">
					<h3><?php esc_html_e( 'Looks great on any device', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'This is a fully responsive blog theme. It is designed & developed on Twitter Bootstrap 4, the world’s best framework for responsive websites.', 'blog-guten' ); ?></p>
					<p>
						<a href="https://wp-points.com/themes/blog-guten/" target="_blank"><?php esc_html_e( 'Learn More', 'blog-guten' ); ?></a>
					</p>
				</div>
				<div class="column">
					<h3><?php esc_html_e( 'Fast & Lightweight', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'This theme is designed and developed for speed. It is exceptionally lightweight. Your website will load quickly.', 'blog-guten' ); ?></p>
				</div>
				<div class="column">
					<h3><?php esc_html_e( 'Extremely easy-to-use', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'You don’t need any coding knowledge to use or customize it. We have kept customization options minimal to make it simple.', 'blog-guten' ); ?></p>
				</div>
			</div>

			<hr>

			<div class="about__section has-3-columns">
				<h2 class="is-section-header"><?php esc_html_e( 'Next Steps', 'blog-guten' ); ?></h2>
				<div class="column">
					<h3><?php esc_html_e( 'View live demo', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'Check the live demo to see how this theme looks when setup is done.', 'blog-guten' ); ?></p>
					<p>
						<a href="https://blog-guten.wp-points.com/" class="button button-default" target="_blank"><?php esc_html_e( 'View live demo', 'blog-guten' ); ?></a>
					</p>
				</div>
				<div class="column">
					<h3><?php esc_html_e( 'Learn how to customize', 'blog-guten' ); ?></h3>
					<p><?php esc_attr_e( 'It is extremely easy to set up the theme. You can learn it from this link.', 'blog-guten' ); ?></p>
					<p>
						<a href="https://wp-points.com/how-to-setup-blog-guten-theme/" class="button button-default" target="_blank"><?php esc_html_e( 'How to setup theme?', 'blog-guten' ); ?></a>
					</p>
				</div>
				<div class="column">
					<h3><?php esc_html_e( 'Customize theme', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'Start customizing theme settings with a live preview.', 'blog-guten' ); ?></p>
					<p>
						<a href="<?php echo esc_url( admin_url( '/customize.php?autofocus[section]=blog_guten_theme_general_settings' ) );?>" class="button button-default" target="_blank"><?php esc_html_e( 'Customize theme options', 'blog-guten' ); ?></a>
					</p>
				</div>
			</div>

			<hr>

			<div class="about__section has-3-columns">
				<h2 class="is-section-header"><?php esc_html_e( 'Do you like our work?', 'blog-guten' ); ?></h2>
				<div class="column">
					<h3><?php esc_html_e( 'Rate us', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'If you like our work, please rate us 5 stars on WordPress.org.', 'blog-guten' ); ?></p>
					<p>
						<a href="https://wordpress.org/support/theme/blog-guten/reviews/#new-post" class="button button-primary" target="_blank"><?php esc_html_e( 'Rate us 5 Stars', 'blog-guten' ); ?></a>
					</p>
				</div>
				<div class="column">
					<h3><?php esc_html_e( 'Let us know your suggestions', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'Contact us if you have some feedback/suggestions for the theme.', 'blog-guten' ); ?></p>
					<p>
						<a href="https://wp-points.com/contact-us/" class="button button-primary" target="_blank"><?php esc_html_e( 'Contact Us', 'blog-guten' ); ?></a>
					</p>
				</div>
				<div class="column">
					<h3><?php esc_html_e( 'Upgrade to the Pro version', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'You get some additional features with the premium version of the theme.', 'blog-guten' ); ?></p>
					<p>
						<a href="<?php echo esc_url( 'https://wp-points.com/themes/blog-guten-pro/' );?>" class="button button-primary" target="_blank"><?php esc_html_e( 'More about Pro version', 'blog-guten' ); ?></a>
					</p>
				</div>
			</div>

		<?php elseif ( $active_tab === 'blog_guten_2' ) : ?>
			<div class="about__header">
				<div class="about__header-title">
					<h1><?php echo esc_html__( 'Welcome to \'Blog Guten\'', 'blog-guten' ); ?></h1>
				</div>
				<div class="about__header-badge"></div>
				<div class="about__header-text">
					<p><?php echo esc_html__( 'A minimal WordPress blog theme, developed to work seamlessly with Gutenberg Block Editor. It is simple, easy-to-use & powerful.', 'blog-guten' ); ?></p>
				</div>

				<nav class="about__header-navigation nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'blog-guten' ); ?>">
					<a href="?page=about-blog-guten-theme&tab=blog_guten_1" class="nav-tab"><?php esc_html_e( 'Getting Started', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_2" class="nav-tab nav-tab-active" aria-current="page"><?php esc_html_e( 'Video Tutorials', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_3" class="nav-tab"><?php esc_html_e( 'Support', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_4" class="nav-tab"><?php esc_html_e( 'Upgrade to Pro', 'blog-guten' ); ?></a>
				</nav>
			</div>

			<div class="about__section has-2-columns">
				<div class="column">
					<h3><?php esc_html_e( 'How to edit the cover section on blog homepage', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'You can edit the cover section displayed on blog home page with a live preview. Click on the following button to watch the video.', 'blog-guten' ); ?></p>
					<p>
						<a href="https://www.youtube.com/watch?v=rrcAFtM6y0Q" class="button button-primary" target="_blank"><?php esc_html_e( 'Watch video', 'blog-guten' ); ?></a>
					</p>
				</div>

				<div class="column">
					<h3><?php esc_html_e( 'Learn about theme\'s customization options', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'We have kept theme options very minimal to keep it easy-to-use and to avoid any confusion.', 'blog-guten' ); ?></p>
					<p>
						<a href="https://www.youtube.com/watch?v=fkK3ElYN9kg" class="button button-primary" target="_blank"><?php esc_html_e( 'Watch video', 'blog-guten' ); ?></a>
					</p>
				</div>
			</div>

		<?php elseif ( $active_tab === 'blog_guten_3' ) : ?>
			<div class="about__header">
				<div class="about__header-title">
					<h1><?php echo esc_html__( 'Welcome to \'Blog Guten\'', 'blog-guten' ); ?></h1>
				</div>
				<div class="about__header-badge"></div>
				<div class="about__header-text">
					<p><?php echo esc_html__( 'A minimal WordPress blog theme, developed to work seamlessly with Gutenberg Block Editor. It is simple, easy-to-use & powerful.', 'blog-guten' ); ?></p>
				</div>

				<nav class="about__header-navigation nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'blog-guten' ); ?>">
					<a href="?page=about-blog-guten-theme&tab=blog_guten_1" class="nav-tab"><?php esc_html_e( 'Getting Started', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_2" class="nav-tab"><?php esc_html_e( 'Video Tutorials', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_3" class="nav-tab nav-tab-active" aria-current="page"><?php esc_html_e( 'Support', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_4" class="nav-tab"><?php esc_html_e( 'Upgrade to Pro', 'blog-guten' ); ?></a>
				</nav>
			</div>

			<div class="about__section has-2-columns">
				<div class="column">
					<h3><?php esc_html_e( 'WordPress Forum', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'You can post your question on the public forum of WordPress.org. We are always available to help you.', 'blog-guten' ); ?></p>
					<p>
						<a href="https://wordpress.org/support/theme/blog-guten/" class="button button-primary" target="_blank"><?php esc_html_e( 'Go-to Support Forum', 'blog-guten' ); ?></a>
					</p>
				</div>

				<div class="column">
					<h3><?php esc_html_e( 'Drop an Email', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'You can reach out to use on email by submitting your question/feedback using the contact form of our website.', 'blog-guten' ); ?></p>
					<p>
						<a href="https://wp-points.com/contact-us/" class="button button-primary" target="_blank"><?php esc_html_e( 'Contact Us', 'blog-guten' ); ?></a>
					</p>
				</div>
			</div>

			<div class="about__section has-subtle-background-color">
				<div class="column">
					<h3><?php esc_html_e( 'Quicker Professional Support', 'blog-guten' ); ?> <sup><?php esc_html_e( '(Pro Only)', 'blog-guten' ); ?></sup></h3>
					<p><?php esc_html_e( 'By upgrading your theme to premium version, you will get a quicker professional support from our expert WordPress developers. You get many additional features with the premium version of the theme. ', 'blog-guten' ); ?></p>
					<p>
						<a href="https://wp-points.com/submit-ticket/" class="button button-primary" target="_blank"><?php esc_html_e( 'Submit Ticket', 'blog-guten' ); ?></a>
					</p>
				</div>
			</div>

		<?php elseif ( $active_tab === 'blog_guten_4' ) : ?>

			<div class="about__header">
				<div class="about__header-title">
					<h1><?php echo esc_html__( 'Welcome to \'Blog Guten\'', 'blog-guten' ); ?></h1>
				</div>
				<div class="about__header-badge"></div>
				<div class="about__header-text">
					<p><?php echo esc_html__( 'A minimal WordPress blog theme, developed to work seamlessly with Gutenberg Block Editor. It is simple, easy-to-use & powerful.', 'blog-guten' ); ?></p>
				</div>

				<nav class="about__header-navigation nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'blog-guten' ); ?>">
					<a href="?page=about-blog-guten-theme&tab=blog_guten_1" class="nav-tab"><?php esc_html_e( 'Getting Started', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_2" class="nav-tab"><?php esc_html_e( 'Video Tutorials', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_3" class="nav-tab"><?php esc_html_e( 'Support', 'blog-guten' ); ?></a>
					<a href="?page=about-blog-guten-theme&tab=blog_guten_4" class="nav-tab nav-tab-active" aria-current="page"><?php esc_html_e( 'Upgrade to Pro', 'blog-guten' ); ?></a>
				</nav>
			</div>

			<div class="about__section has-2-columns">
				<div class="column">
					<h3><?php esc_html_e( 'Import Demo Content Easily', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'With the premium version of the theme, you can import the demo content easily in few clicks. Demo content will help you create amazing posts and pages.', 'blog-guten' ); ?></p>
				</div>

				<div class="column">
					<h3><?php esc_html_e( 'Add Featured Posts on Blog Homepage', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'Adding featured posts will increase the engagement on your blog. This will make your blog look more professional. You can take users to some important posts/pages of your website.', 'blog-guten' ); ?></p>
				</div>

				<div class="column">
					<h3><?php esc_html_e( 'Advanced Customization', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'You get some more options to customize your website\'s look. In the premium version, we have made it more easy to customize the look of your website.', 'blog-guten' ); ?></p>
				</div>

				<div class="column">
					<h3><?php esc_html_e( 'Footer Widgets', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'You can add widgets to the footer of the website very easily with the premium theme. You can add any widget to the footer. This will help you in increasing user engagement on your website.', 'blog-guten' ); ?></p>
				</div>

				<div class="column">
					<h3><?php esc_html_e( 'Remove Footer Credit Link', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'With the premium version of the theme, you get an option to edit/remove the footer credit link easily & quickly.', 'blog-guten' ); ?></p>
				</div>

				<div class="column">
					<h3><?php esc_html_e( 'Quicker Professional Support', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'With the premium version of the theme, you get professional WordPress support more quickly.', 'blog-guten' ); ?></p>
				</div>

				<div class="column">
					<h3><?php esc_html_e( 'More Color Schemes & Typography Options', 'blog-guten' ); ?></h3>
					<p><?php esc_html_e( 'With the premium version of the theme, you get more options to choose style for your website. You get more color options as well as more typography options.', 'blog-guten' ); ?></p>
				</div>

				<div class="column">
					<p>
						<a href="https://wp-points.com/themes/blog-guten-pro/" target="_blank" class="button button-primary button-large"><?php esc_html_e( 'Upgrade to Pro Now', 'blog-guten' ); ?></a>
					</p>
				</div>
			</div>

		<?php endif; ?>

	</div>

<?php
}



// Enqueue CSS
function blog_guten_enqueue_about_page_scripts() {
	wp_enqueue_style( 'blog-guten-about-page-css', get_theme_file_uri( '/inc/about/css/about-theme-page.css' ), array(), '1.0.1' );
}
add_action( 'admin_enqueue_scripts', 'blog_guten_enqueue_about_page_scripts' );

