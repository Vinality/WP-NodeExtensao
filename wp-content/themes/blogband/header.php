<?php 
/**
 * The template for displaying code in the header section
 *
 * @version    0.0.23
 * @package    blogband
 * @author     Zidithemes
 * @copyright  Copyright (C) 2020 zidithemes.tumblr.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>	
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'blogband' ); ?></a>

<?php

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
    
    $blogband_logo_img_set = wp_get_attachment_url(get_theme_mod('blogband_logo_img_settings'));
	$blogband_ad_img_set   = wp_get_attachment_url(get_theme_mod('blogband_ad_img_settings'));
?>
	
<div class="header-box">
	<div class="mg-auto header-box-flex wid-90 mobwid-90">
		<div class="logo wid-30 mobwid-100">
			<?php if ( !$blogband_logo_img_set  ): ?>
				<a class="logo-img-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="logo-img" src="<?php echo esc_url(esc_html(get_theme_mod('blogband_logo_img_settings'))); ?>" alt="<?php bloginfo('name'); ?>" />
				</a>	
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-text-link">
					<?php echo bloginfo('name'); ?>
				</a>
				<p class="site-info-desc"><?php echo bloginfo('description'); ?></p>
			<?php else: ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-text-link">
				<?php echo bloginfo('name'); ?>
			</a>
			<p class="site-info-desc"><?php echo bloginfo('description'); ?></p>
			<?php endif; ?>
		</div>
		<div class="ad-box-img wid-70 mobwid-100">
			<?php if ( !$blogband_ad_img_set ): ?>
				<a href="<?php echo esc_url(esc_html(get_theme_mod('blogband_ad_img_link_settings'))); ?>">
					<img class="ad-img" src="<?php echo esc_url(esc_html(get_theme_mod('blogband_ad_img_settings'))); ?>" alt="<?php bloginfo('name'); ?>" />
				</a>
			<?php endif; ?>
		</div>
	</div>
</div>

<!-- BEGIN NAV MENU -->
<div class="flowid nav-outer">
	<div class="mg-auto wid-90 mobwid-100">
		<div class="nav">
			<input type="checkbox" class="navcheck" id="navcheck" />
			<label class="navlabel" for="navcheck" ></label>
			<button class="panbtn" for="navcheck">
				<div></div>
				<div></div>
				<div></div>
			</button>
		    <div class="site-mob-title">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-nav-title"><?php echo bloginfo('name'); ?></a>
		    </div>
			<div class="theme-nav">
				<ul class="logo logo-none">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-nav-title"><?php echo bloginfo('name'); ?></a></li>
				</ul>
		        <ul class="nav-wrap mob-wrap" id="site-navigation">
					<?php 
						if (has_nav_menu('primary-menu')) {
							wp_nav_menu(array(
								'theme_location' 	=> 'primary-menu',
								'menu_class'  		=> 'menu',
								'menu_id'        	=> 'primary-menu',
								'fallback_cb' 		=> '',
							));
							}else {
							 
							 wp_list_pages( array(
							 		'depth' => 1, 
								 'title_li' => ''
								)
							); 
							    
						 } 

					?>
				</ul>
			</div>
		</div>
	</div>	
</div>
<!-- END NAV MENU -->

<?php } ?>	