<?php

if (!function_exists('blogband_admin_style')) {
	function blogband_admin_style($hook) {
		//admin style
		if ('appearance_page_blogband_theme_info_options' === $hook) {
			wp_enqueue_style('blogband-admin-script-style', get_template_directory_uri() . '/css/blogband-admin.css');
		}
	}
}
add_action('admin_enqueue_scripts', 'blogband_admin_style');
