<?php 
/**
 * The template for displaying details of the posts
 *
 * @version    0.0.23
 * @package    blogband
 * @author     Zidithemes
 * @copyright  Copyright (C) 2020 zidithemes.tumblr.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * 
 * Template Name: Single Full Width No Style
 * Template Post Type: post
 * 
 */
?>

<?php get_header(); ?>


<main id="main" class="site-main" role="main">

	<header class="page-header">
		<h1 class="entry-title"></h1>
	</header>

	<div id="content"  class="page-content">

		<div class="flowid blogband-single-full-width-title">

		    <div class="mg-auto wid-100 mobwid-100">
		        
		        <div class="inner dsply-fl fl-wrap">
		            
		            <div class="wid-100 blog-2-col-inner">
		            	
		                <div class=" dsply-fl fl-wrap">
		                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

		                	
		                	
		                	<div class="items-guten wid-100 mobwid-100">
		                            <div class="items-inner dsply-fl fl-wrap  mn-dz">
		                                <div class="img-box wid-100 relative">
		                                	<div class="title-header">
			                                	<h2 class="title mg-bt-20 text-center">
		                                        	<?php the_title(); ?>
		                                        </h2>
		                                        <div class="text-center title-content">
			                                        <span class=" mg-bt-20 text-center dsply-ib date"><?php the_time(get_option('date_format')); ?></span>
			                                        <span class="dsply-ib mg-left-15 text-center author"><?php esc_html_e('by ', 'blogband'); ?><?php the_author_posts_link(); ?></span>
			                                        <span class="meta-btn dsply-ib mg-left-15 comments"><a href="<?php comments_link(); ?>"> <?php comments_number(); ?> </a></span>
		                                    	</div>
	                                    	</div>

		                                    <div class="details-box ">
		                                        <div class="details-box-inner">
		                                            
		                                            <p><?php the_content(); ?></p>
		                                            
		                                            
		                                            
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
				            <div class="blogband_link_pages">
					            <?php wp_link_pages(); ?>
					        </div>
		                            

		                    
			                    <?php endwhile; else : ?>
								<h2><?php esc_html__('No posts Found', 'blogband'); ?></h2>
			                    <?php endif; ?>
		                    
		                    <!-- SIDEBAR -->
		                </div>
		                
		            </div>

		        </div>
		    </div>
		</div>


	</div>

</main>

<?php get_footer(); ?>