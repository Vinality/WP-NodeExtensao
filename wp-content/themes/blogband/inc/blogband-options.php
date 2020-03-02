<?php

//BLOGBAND OPTIONS

function blogband_theme_info_menu() {

	add_theme_page( 
		esc_html__('Welcome To Blogband WordPress Theme', 'blogband'), 
		esc_html__('Blogband Theme Info', 'blogband'), 
		'manage_options', 
		'blogband_theme_info_options', 
		'blogband_theme_info_display' 
	);

}


add_action( 'admin_menu', 'blogband_theme_info_menu' );



function blogband_theme_info_display() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( esc_html_e( 'You do not have sufficient permissions to access this page.', 'blogband' ) );
	}
	
	?>
	<div class="wrap blogband-adm">
		<h1 class="header-welcome"><?php esc_html_e('Welcome to Blogband - 0.0.23', 'blogband'); ?></h1>
		<div class="blogband-adm-dsply-fl blogband-adm-fl-wrap blogband-adm-jc-sp-btw">

			<div class="blogband-adm-wid-49 theme-para theme-doc blogband-adm-mobwid-100">
				<h4><?php esc_html_e('Theme Documentation','blogband'); ?></h4>
				<p><?php esc_html_e('Documentation for this theme includes all theme information that is needed to get your site up and running', 'blogband'); ?></p>
				<p>
					<a href="<?php echo esc_url('http://zidithemes.tumblr.com/post/186052368654/blogband'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Theme Documentation', 'blogband'); ?>
					</a>
				</p>
			</div>

			<div class="blogband-adm-wid-49 theme-para theme-doc blogband-adm-mobwid-100">
				<h4><?php esc_html_e('View All Our Themes','blogband'); ?></h4>
				<p><?php esc_html_e('View all our themes.', 'blogband'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://wordpress.org/themes/author/zidithemes'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Latest Themes', 'blogband'); ?>
					</a>
				</p>
			</div>

			<div class="blogband-adm-wid-49 theme-para theme-opt blogband-adm-mobwid-100">
				<h4><?php esc_html_e('Blogband Pro','blogband'); ?></h4>
				<p class="">
					<?php esc_html_e('Blogband Pro includes portfolio page templates, additional features and more options to customize your website.',  'blogband'); ?>
				</p>
				<p>
					<a href="<?php echo esc_url('https://zidithemes.tumblr.com/post/188740196734/blogband-pro'); ?>" class="button button-primary" target="_blank">
						<?php esc_html_e('Upgrade to Blogband Pro', 'blogband'); ?>
					</a>
				</p>
			</div>

			<div class="blogband-adm-wid-49 theme-para theme-opt blogband-adm-mobwid-100">
				<h4><?php esc_html_e('Theme Options','blogband'); ?></h4>
				<p class="">
					<?php esc_html_e('Blogband Theme supports Theme Customizer. Click "Go To Customizer" to open the Customizer now.',  'blogband'); ?>
				</p>
				<p>
					<a href="<?php echo esc_url(admin_url('customize.php')); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Go To Customizer', 'blogband'); ?>
					</a>
				</p>
			</div>

			<div class="blogband-adm-wid-49 theme-para theme-review blogband-adm-mobwid-100">
				<h4><?php esc_html_e('Leave us a review','blogband'); ?></h4>
				<p><?php esc_html_e('We would love to hear your feedback.', 'blogband'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://wordpress.org/support/theme/blogband/reviews/#new-post'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Submit a review', 'blogband'); ?>
					</a>
				</p>
			</div>


			<div class="blogband-adm-wid-49 theme-para theme-support blogband-adm-mobwid-100">
				<h4><?php esc_html_e('Support','blogband'); ?></h4>
				<p><?php esc_html_e('Reach out in the theme support forums on WordPress.org.', 'blogband'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://wordpress.org/support/theme/blogband/'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Support Forum', 'blogband'); ?>
					</a>
				</p>
			</div>


			<div class="theme-upgrade blogband-adm-wid-100">
				<table class="blogband-adm-wid-100">
					<thead class="theme-table-head">
						<tr>
							<th class="feature"><h3><?php esc_html_e('Features', 'blogband'); ?></h3></th>
							<th class="blogband-adm-wid-33"><h3><?php esc_html_e('Blogband', 'blogband'); ?></h3></th>
							<th class="blogband-adm-wid-33"><h3><?php esc_html_e('Blogband Pro', 'blogband'); ?></h3></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="feature-items-title">
								<h3><?php esc_html_e('Theme Price', 'blogband'); ?></h3>
							</td>
							<td class="free-btn"><?php esc_html_e('Free', 'blogband'); ?></td>
							<td>
								<a class="pro-link-btn" href="<?php echo esc_url('https://zidithemes.tumblr.com/post/188740196734/blogband-pro'); ?>" target="_blank">
									<?php esc_html_e('View Pricing', 'blogband'); ?>
								</a>
							</td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Responsive Design', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Portfolio Page Template', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Testimonials Page Template', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Team Page Template', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Gallery Page Template', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Pricing Page Template', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Number Of Index Page Styles', 'blogband'); ?></h3></td>
							<td><span class="number-index-styles">6</span></td>
							<td><span class="number-index-styles">14</span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Full Width Template', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Footer Credits Options', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Color Options', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Gutenberg Compatible', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Elementor Compatible', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Major Browser Compatible', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Woocommerce Compatible', 'blogband'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class=""></td>
							<td class=""></td>
							<td class="go-pro">
								<span class="">
									<a class="link" href="<?php echo esc_url('https://zidithemes.tumblr.com/post/188740196734/blogband-pro'); ?>" target="_blank">
										<?php esc_html_e('View Pro', 'blogband'); ?>
									</a>
								</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>
	<?php
}
?>
