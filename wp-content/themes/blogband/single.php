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
 */
?>

<?php get_header(); ?>


<main id="main" class="site-main" role="main">

	<header class="page-header">
		<h1 class="entry-title"></h1>
	</header>

	<div id="content"  class="page-content">

		<div class="flowid blogband-single">

		    <div class="mg-auto wid-90 mobwid-90">
		        
		        <div class="inner dsply-fl fl-wrap">
		            
		            <div class="wid-100 blog-2-col-inner">
		            	
		                <div class=" dsply-fl fl-wrap">
		                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

		                	
		                	
		                	<div class="items wid-70 mobwid-100">
		                            <div class="items-inner dsply-fl fl-wrap  mn-dz">
		                                <div class="img-box wid-100 relative">
		                                	<h2 class="title mg-bt-20 text-center">
	                                        	<?php the_title(); ?>
	                                        </h2>
		                                    <div class="details-box ">
		                                        <div class="details-box-inner">
		                                        	<div class="singular dsply-fl jc-sp-btw">
			                                            <span class=" mg-bt-20 text-center dsply-ib date bg-wrap">
			                                            	<?php the_time(get_option('date_format')); ?>
			                                            </span>
			                                            <span class="dsply-ib mg-left-15 text-center author bg-wrap">
			                                            	<?php esc_html_e(' by ', 'blogband'); ?><?php the_author_posts_link(); ?>
			                                            </span>
			                                            <span class="dsply-ib mg-left-15 comments">
			                                            	<a href="<?php comments_link(); ?>"> <?php comments_number(); ?> </a>
			                                            </span>
		                                        	</div>
				                                        	
			                                        <div class="featured-img">
			                                        	<?php if ( has_post_thumbnail()) : ?>
											        		<a class="" href="<?php the_permalink(); ?>"  >
											            		<?php the_post_thumbnail(); ?>
											            	</a>
										            	<?php endif; ?>
			                                        </div>
		                                            <p><?php the_content(); ?></p>
		                                            
		                                            
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="tags">
											<?php the_tags(); ?>
										</div>
		                            </div>

		                            
							            
							        <?php 
								        if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;
		                    		?>
		                    

		                    
			                    <?php endwhile; else : ?>
									<h2><?php esc_html__('No posts Found', 'blogband'); ?></h2>
			                    <?php endif; ?>
		                    </div>
					        <div class="blogband_link_pages">
					            <?php wp_link_pages(); ?>
					        </div>
		                    <?php get_sidebar(); ?>
		                </div>
		                
		            </div>

		        </div>
		    </div>
		</div>


	</div>

</main>

<?php get_footer(); ?>