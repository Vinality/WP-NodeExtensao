<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Stackable
 */

if ( ! function_exists( 'stackable_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories.
 */
function stackable_entry_meta() {
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'stackable' ) );
		if ( $categories_list && stackable_categorized_blog() ) {
			echo '<div class="entry-meta"><span class="cat-links">' . $categories_list . '</span></div>';
		}
	}
}
endif;

if ( ! function_exists( 'stackable_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time, tags and comments.
 */
function stackable_entry_footer() {
	if ( 'post' === get_post_type() ) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>', esc_url( get_permalink() ), $time_string );

		if ( is_sticky() && ! is_single() ) {
			$posted_on = sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>', esc_url( get_permalink() ), esc_html__( 'Featured Post', 'stackable' ) );
		}

		echo '<span class="posted-on">' . $posted_on . '</span>';

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'stackable' ) );
		if ( $tags_list && ! is_wp_error( $tags_list ) ) {
			echo '<span class="tags-links">' . $tags_list . '</span>';
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'stackable' ), esc_html__( '1 Comment', 'stackable' ), esc_html__( '% Comments', 'stackable' ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'stackable' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function stackable_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'stackable_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'stackable_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so stackable_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so stackable_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in stackable_categorized_blog.
 */
function stackable_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'stackable_categories' );
}
add_action( 'edit_category', 'stackable_category_transient_flusher' );
add_action( 'save_post',     'stackable_category_transient_flusher' );

if ( ! function_exists( 'stackable_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 */
function stackable_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;


/**
 * Add featured image as background image to post navigation elements.
 *
 * @see wp_add_inline_style()
 */
function stackable_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	if ( ! stackable_jetpack_featured_image_post() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous && stackable_has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = stackable_get_attachment_image_src( $previous->ID, get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb ) . '); text-shadow: 0 0 0.15em rgba(0, 0, 0, 0.5); }
			.post-navigation .nav-previous .post-title,
			.post-navigation .nav-previous a:focus .post-title,
			.post-navigation .nav-previous a:hover .post-title { color: #fff; }
			.post-navigation .nav-previous .meta-nav { color: rgba(255, 255, 255, 0.75); }
			.post-navigation .nav-previous a { background-color: rgba(0, 0, 0, 0.2); border: 0; }
			.post-navigation .nav-previous a:focus,
			.post-navigation .nav-previous a:hover { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && stackable_has_post_thumbnail( $next->ID ) ) {
		$nextthumb = stackable_get_attachment_image_src( $next->ID, get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb ) . '); text-shadow: 0 0 0.15em rgba(0, 0, 0, 0.5); }
			.post-navigation .nav-next .post-title,
			.post-navigation .nav-next a:focus .post-title,
			.post-navigation .nav-next a:hover .post-title { color: #fff; }
			.post-navigation .nav-next .meta-nav { color: rgba(255, 255, 255, 0.75); }
			.post-navigation .nav-next a { background-color: rgba(0, 0, 0, 0.2); border: 0; }
			.post-navigation .nav-next a:focus,
			.post-navigation .nav-next a:hover { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'stackable-style', $css );
}
add_action( 'wp_enqueue_scripts', 'stackable_post_nav_background' );
