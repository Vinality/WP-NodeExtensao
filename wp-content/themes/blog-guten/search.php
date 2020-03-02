<?php
/**
 * The template for displaying search results pages
 */

get_header();
?>

<div class="row justify-content-center">

	<?php if ( get_theme_mod( 'blog_guten_sidebar_position', 'hide' ) === 'left' ) : ?>
		<div class="col-md-4 order-md-0 order-1">
			<?php get_sidebar(); ?>
		</div>
	<?php endif; ?>

	<section id="primary" class="content-area col-md-8">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'blog-guten' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
	</section><!-- #primary -->

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
