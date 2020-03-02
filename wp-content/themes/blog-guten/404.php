<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Blog_Guten
 */

get_header();
?>
<div class="row justify-content-center">
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div>
					<div class="bg-show-error"><?php esc_html_e( '404', 'blog-guten' ); ?></div>
					<header class="page-header">
						<h1 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'blog-guten' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content text-center">
						<p class="text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try going back to homepage or a search?', 'blog-guten' ); ?></p>

						<?php get_search_form(); ?>

						<a href="/" class="btn btn-primary mt-4"><?php esc_html_e( 'Go Back to Homepage', 'blog-guten' ); ?></a>

					</div><!-- .page-content -->
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<!-- /.row -->
<?php
get_footer();
