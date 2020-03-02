<?php
/**
 * The header for our theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blog-guten' ); ?></a>

	<header id="masthead" class="site-header <?php if ( get_theme_mod( 'blog_guten_sticky_header', false ) ) : echo 'sticky-top'; endif;  ?>">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-3">
					<div class="site-branding">
						<div>
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$blog_guten_description = get_bloginfo( 'description', 'display' );
							if ( $blog_guten_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo esc_html( $blog_guten_description ); ?></p>
							<?php endif; ?>
						</div>
					</div><!-- .site-branding -->
				</div>
				<!-- /.col-md-3 -->

				<div class="col-md-9 text-right">
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>
				<!-- /.col-md-9 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
