<?php 
/**
 * The template for displaying comments
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
<?php 
if ( post_password_required() ) {
	return;
}
?>

<div  class="">
	<div class="wid-100 wrap-comments woocommerce-comments">
		<?php if ( have_comments() ) : ?>

		<h2 class="comments-title">
			<?php
				$blogband_comments_sum = get_comments_number();
				if ( '1' === $blogband_comments_sum ) {
					/* translators: %s: post title */
					printf(  esc_html( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'blogband' ) ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						esc_html( _nx(
							'%1$s Reply to &ldquo;%2$s&rdquo;',
							'%1$s Replies to &ldquo;%2$s&rdquo;',
							$blogband_comments_sum,
							'comments title',
							'blogband'
						) ),
						esc_html( number_format_i18n( $blogband_comments_sum ) ),
						get_the_title()
					);
				}
				?>
		</h2>

		<div class="">
			<div class="floseventy">
				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
				<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
					<h1 class="screen-reader-text"><?php esc_html( 'Comment navigation', 'blogband' ); ?></h1>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'blogband' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'blogband' ) ); ?></div>
				</nav><!-- #comment-nav-above -->
				<?php endif; // Check for comment navigation. ?>
			</div>
		</div>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      	=> 'ol',
					'short_ping' 	=> true,
					'avatar_size'	=> 34,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html( 'Comment navigation', 'blogband' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'blogband' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'blogband' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() ) : ?>
		<p class="no-comments"><?php esc_html( 'Comments are closed.', 'blogband' ); ?></p>
		<?php endif; ?>

		<?php endif; // have_comments() ?>

		<?php 
			$comments_args = array(
				'label_submit' => __('Post Comment', 'blogband'),
				'title_reply' => __('Leave a Comment', 'blogband'),
				'comment_notes_after' => '',
				);
			comment_form($comments_args); 
		?>
	</div>
</div><!-- #comments -->
