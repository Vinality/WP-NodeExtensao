<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<div class="row justify-content-center">

	<?php if ( get_theme_mod( 'blog_guten_sidebar_position', 'hide' ) === 'left' ) : ?>
		<div class="col-md-4 order-md-0 order-1">
			<?php get_sidebar(); ?>
		</div>
	<?php endif; ?>

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
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
