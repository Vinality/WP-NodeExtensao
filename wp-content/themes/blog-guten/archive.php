<?php
/**
 * The template for displaying archive pages
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

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
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
