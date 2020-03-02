<?php 
/**
 * The template for displaying 404 pages
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
        
    </header>

    <div id="content" class="page-content">

        <div class="flowid error-404">

            <div class="mg-auto wid-90 mobwid-90">
                
                <div class="inner dsply-fl fl-wrap">
                    <div class="error wid-100">
                        <div class="error-inner">
                            
                            <div class="error-items text-center">
                                <h1>
                                    <?php esc_html_e('404', 'blogband'); ?> 
                                </h1>
                                <div class="not-found"> 
                                    <?php esc_html_e('Page Not Found', 'blogband'); ?> 
                                </div>
                                <div class="btn">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                         <?php esc_html_e('Back To Home', 'blogband'); ?> 
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</main>
    

<?php get_footer(); ?>