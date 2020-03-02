<?php
/**
 * The main template file
 */

get_header();
?>

<?php if ( is_home() && is_front_page() && get_theme_mod( 'blog_guten_display_cover_section', true ) ) : ?>
	<div class="row justify-content-center">
		<div class="col-md-12">
			<?php if ( get_theme_mod( 'blog_guten_cover_img' ) ) : ?>
			<div class="cover-section-wrap cover-section-bg-img" style="background-image: url('<?php echo esc_url( get_theme_mod( 'blog_guten_cover_img' ) ); ?>')">
			<?php else : ?>
			<div class="cover-section-wrap">
			<?php endif; ?>
				<div class="cover-section">
					<div class="cover-content-wrap">
						<h2 class="h1 bg-cover-title"><?php echo esc_html( get_theme_mod( 'blog_guten_cover_title', __( 'Gutenberg Ready Minimal WP Blog Theme', 'blog-guten' ) ) ); ?></h2>
						<p class="cover-desc bg-cover-desc">
							<?php echo esc_html( get_theme_mod( 'blog_guten_cover_subtitle', __( '\'Blog Guten\' is a minimal WordPress blog theme designed to work seamlessly with Gutenberg Block Editor. It is minimal, fast, secure & easy-to-use blogging theme. Download it today for free from WordPress.org!', 'blog-guten' ) ) ); ?>
						</p>
						<?php if ( get_theme_mod( 'blog_guten_cover_btn_text', __( 'Contact Us', 'blog-guten' ) ) ) : ?>
							<a href="<?php echo esc_url( get_theme_mod( 'blog_guten_cover_btn_link', '#' ) ); ?>" class="btn btn-primary mt-15 bg-cover-btn"><?php echo esc_html( get_theme_mod( 'blog_guten_cover_btn_text', __( 'Contact Us', 'blog-guten' ) ) ); ?></a>
						<?php endif ?>
					</div>
				</div>
			</div>
			<!-- /.covers-ection-wrap -->
		</div>
		<!-- /.col-md-8 -->
	</div>
	<!-- /.row justify-content-center -->
<?php endif; ?>

<div class="row justify-content-center">

	<?php if ( get_theme_mod( 'blog_guten_sidebar_position', 'hide' ) === 'left' ) : ?>
		<div class="col-md-4 order-md-0 order-1">
			<?php get_sidebar(); ?>
		</div>
	<?php endif; ?>

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				// Include the Post-Type-specific template for the content.
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_pagination( array(
				'mid_size'  => 2,
				'prev_text' => __( 'Back', 'blog-guten' ),
				'next_text' => __( 'Next', 'blog-guten' ),
			) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if ( get_theme_mod( 'blog_guten_sidebar_position', 'hide' ) === 'right' ) : ?>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
		<!-- /.col-md-4 -->
	<?php endif; ?>

</div>
<!-- /.row -->

<?php
get_footer();
