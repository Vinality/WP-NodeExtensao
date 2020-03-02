<?php
/**
 * The template for displaying the footer
 */

?>
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="site-info text-center">
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'WordPress Theme: %1$s by %2$s.', 'blog-guten' ), '<em><a href="https://wp-points.com/themes/blog-guten/" rel="nofollow" target="_blank">Blog Guten</a></em>', 'TwoPoints' );
						?>
					</div><!-- .site-info -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->

		<?php if ( ! get_theme_mod( 'blog_guten_hide_goto_top', false ) ) : ?>
			<div class="goto-top"></div>
		<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
