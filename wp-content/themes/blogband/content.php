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
<div id="post-<?php the_ID(); ?>" <?php post_class('items items-wid mobwid-100'); ?> >
    <div class="items-inner dsply-fl fl-wrap">
        <div class="img-box dsply-fl fl-wrap wid-100">
            <div class="wid-100 title-header">
                <h2 class="bx-sz-bb text-center">
                    <a href="<?php the_permalink(); ?>"  >
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div class="persona-meta">
                    <span class="mg-rt-20 date"><?php the_time(get_option('date_format')); ?></span>
                    <span class="mg-rt-20 author"><?php esc_html_e( 'By ', 'blogband' ); the_author_posts_link(); ?></span>
                    <span class="comments"><a href="<?php comments_link(); ?>"> <?php comments_number(); ?> </a></span>
                </div>
            </div>
            <div class="wid-100 img-wrap relative">
        	<?php if ( has_post_thumbnail()) : ?>
        		<a href="<?php the_permalink(); ?>"  >
            		<?php the_post_thumbnail(); ?>
            	</a>
            <?php endif; ?>	
            </div>
            <div class="wid-100 details-box relative">
                <div class="details-box-inner">
                    <div class="wid-100 bb-index-six-title-header">
                        <h2 class="bx-sz-bb text-center">
                            <a href="<?php the_permalink(); ?>"  >
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="persona-meta">
                            <span class="mg-rt-20 date"><?php the_time(get_option('date_format')); ?></span>
                            <span class="mg-rt-20 author"><?php esc_html_e( 'By ', 'blogband' ); the_author_posts_link(); ?></span>
                            <span class="comments"><a href="<?php comments_link(); ?>"> <?php comments_number(); ?> </a></span>
                        </div>
                    </div>
                    
                    <h3><?php the_excerpt(__(' &raquo;', 'blogband')); ?></h3>
                    <div class="btn-case dsply-fl jc-center">
                        <a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'blogband' ); ?></a>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    <div class="blogband_link_pages">
        <?php wp_link_pages(); ?>
    </div>
</div>
