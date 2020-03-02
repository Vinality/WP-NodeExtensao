<?php 
/**
 * The template for displaying archives pages
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
<?php get_header(); ?>

	
	<div id="content" class="flowid blogband-index">

	    <div class="mg-auto wid-90 mobwid-90">
	        
	        <div class="inner dsply-fl fl-wrap">
	            
	            <div class="wid-70 mobwid-100 blog-2-col-inner">
	            	
	                <div class="mg-tp dsply-fl fl-wrap">
	                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

	                	<?php get_template_part('content', get_post_format());  ?>
	                	
	                    <?php endwhile; else : ?>
							<h2><?php esc_html__('No posts Found!', 'blogband'); ?></h2>
	                    <?php endif; ?>
				        

	                </div>
	                <ul class="pagination flowid">
					   <?php the_posts_pagination(); ?>
					</ul>
	            </div>
	            <?php get_sidebar(); ?>
	        </div>
	    </div>
	</div>



<?php get_footer(); ?>