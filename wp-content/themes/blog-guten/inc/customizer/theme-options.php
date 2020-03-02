<?php

// Add Section
$wp_customize->add_section( 'blog_guten_theme_general_settings', array(
	'title'    => __( 'Theme Options', 'blog-guten' ),
	'priority' => 30,
) );

// Logo hight setting
$wp_customize->add_setting( 'blog_guten_logo_height', array(
	'default'           => 60,
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( 'blog_guten_logo_height', array(
	'label'    => __( 'Enter logo height (in px)', 'blog-guten' ),
	'type'     => 'number',
	'section'  => 'title_tagline',
	'setting'  => 'blog_guten_logo_height',
	'priority' => '9',
) );

// Sidebar Setting
$wp_customize->add_setting( 'blog_guten_style_option', array(
	'default'           => 'style1',
	'sanitize_callback' => 'blog_guten_sanitize_select',
) );
$wp_customize->add_control( 'blog_guten_style_option', array(
	'label'   => __( 'Select Style', 'blog-guten' ),
	'type'    => 'select',
	'section' => 'blog_guten_theme_general_settings',
	'setting' => 'blog_guten_style_option',
	'choices' => array(
        'style1' => __( 'Style 1 (Default)', 'blog-guten' ),
        'style2' => __( 'Style 2', 'blog-guten' ),
        'style3' => __( 'Style 3', 'blog-guten' ),
        'style4' => __( 'Style 4 (Dark Theme)', 'blog-guten' ),
	  )
) );

// Sidebar Setting
$wp_customize->add_setting( 'blog_guten_sidebar_position', array(
	'default'           => 'hide',
	'sanitize_callback' => 'blog_guten_sanitize_select',
) );
$wp_customize->add_control( 'blog_guten_sidebar_position', array(
	'label'   => __( 'Sidebar Position', 'blog-guten' ),
	'type'    => 'select',
	'section' => 'blog_guten_theme_general_settings',
	'setting' => 'blog_guten_sidebar_position',
	'choices' => array(
        'hide'  => __( 'Hide Sidebar', 'blog-guten' ),
        'right' => __( 'Right', 'blog-guten' ),
        'left'  => __( 'Left', 'blog-guten' ),
	  )
) );

// Display full blog post
$wp_customize->add_setting( 'blog_guten_display_full_blog', array(
	'default'           => false,
	'sanitize_callback' => 'blog_guten_sanitize_checkbox',
) );
$wp_customize->add_control( 'blog_guten_display_full_blog', array(
	'label'           => __( 'Display full posts on the Homepage', 'blog-guten' ),
	'type'            => 'checkbox',
	'section'         => 'blog_guten_theme_general_settings',
	'setting'         => 'blog_guten_display_full_blog',
	'description'     => esc_html__( 'By default, excerpt is displayed on the blog homepage.', 'blog-guten' ),
) );

// Hide goto top button
$wp_customize->add_setting( 'blog_guten_hide_goto_top', array(
	'default'           => false,
	'sanitize_callback' => 'blog_guten_sanitize_checkbox',
) );
$wp_customize->add_control( 'blog_guten_hide_goto_top', array(
	'label'       => __( 'Hide "Goto Top" button from footer', 'blog-guten' ),
	'type'        => 'checkbox',
	'section'     => 'blog_guten_theme_general_settings',
	'setting'     => 'blog_guten_hide_goto_top',
	'description' => esc_html__( 'By default, it will be displayed when user scrolls down more than 700 px.', 'blog-guten' ),
) );

// Stick header to top
$wp_customize->add_setting( 'blog_guten_sticky_header', array(
	'default'           => false,
	'sanitize_callback' => 'blog_guten_sanitize_checkbox',
) );
$wp_customize->add_control( 'blog_guten_sticky_header', array(
	'label'       => __( 'Stick header to top while scrolling', 'blog-guten' ),
	'type'        => 'checkbox',
	'section'     => 'blog_guten_theme_general_settings',
	'setting'     => 'blog_guten_sticky_header',
) );

// Add alert if user is not on blog homepage
$wp_customize->add_setting( 'blog_guten_not_on_home_msg', array(
	'default'           => '',
	'sanitize_callback' => 'wp_kses_post',
) );
$wp_customize->add_control( 'blog_guten_not_on_home_msg', array(
	'label'           => __( 'You are not on blog home page', 'blog-guten' ),
	'type'            => 'hidden',
	'section'         => 'blog_guten_theme_general_settings',
	'setting'         => 'blog_guten_not_on_home_msg',
	'active_callback' => 'blog_guten_is_not_home',
	'description'     => wp_kses_post( __( 'Changes in the following options can be previewed live only on blog home page. Navigate to blog home page in live preview to see the effect of changes in these options.', 'blog-guten' ) ),
) );

// Hide cover section on homepage
$wp_customize->add_setting( 'blog_guten_display_cover_section', array(
	'default'           => true,
	'sanitize_callback' => 'blog_guten_sanitize_checkbox',
) );
$wp_customize->add_control( 'blog_guten_display_cover_section', array(
	'label'           => __( 'Display cover section', 'blog-guten' ),
	'type'            => 'checkbox',
	'section'         => 'blog_guten_theme_general_settings',
	'setting'         => 'blog_guten_display_cover_section',
	'description'     => esc_html__( 'Select this setting if you want to show cover section from the blog homepage.', 'blog-guten' ),
) );

// Add cover background image
$wp_customize->add_setting('blog_guten_cover_img', array(
	'sanitize_callback' => 'blog_guten_sanitize_image',
));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'blog_guten_cover_img', array(
    'label'           => __('Cover Section Image', 'blog-guten'),
    'section'         => 'blog_guten_theme_general_settings',
    'setting'         => 'blog_guten_cover_img',
	'active_callback' => 'blog_guten_is_cover_active',
)));

// Cover title
$wp_customize->add_setting( 'blog_guten_cover_title', array(
	'default'           => __( 'Gutenberg Ready Minimal WP Blog Theme', 'blog-guten' ),
	'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'blog_guten_cover_title', array(
	'label'           => __( 'Title on Cover Section', 'blog-guten' ),
	'type'            => 'text',
	'section'         => 'blog_guten_theme_general_settings',
	'setting'         => 'blog_guten_cover_title',
	'active_callback' => 'blog_guten_is_cover_active',
) );
$wp_customize->get_setting( 'blog_guten_cover_title' )->transport = 'postMessage';

// Cover subtitle
$wp_customize->add_setting( 'blog_guten_cover_subtitle', array(
	'default'           => __( '\'Blog Guten\' is a minimal WordPress blog theme designed to work seamlessly with Gutenberg Block Editor. It is minimal, fast, secure & easy-to-use blogging theme. Download it today for free from WordPress.org!', 'blog-guten' ),
	'sanitize_callback' => 'sanitize_textarea_field',
) );
$wp_customize->add_control( 'blog_guten_cover_subtitle', array(
	'label'           => __( 'Sub-title on Cover Section', 'blog-guten' ),
	'type'            => 'textarea',
	'section'         => 'blog_guten_theme_general_settings',
	'setting'         => 'blog_guten_cover_subtitle',
	'active_callback' => 'blog_guten_is_cover_active',
) );
$wp_customize->get_setting( 'blog_guten_cover_subtitle' )->transport = 'postMessage';

// Cover button text
$wp_customize->add_setting( 'blog_guten_cover_btn_text', array(
	'default'           => __( 'Contact Us', 'blog-guten' ),
	'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'blog_guten_cover_btn_text', array(
	'label'           => __( 'Cover Button Text', 'blog-guten' ),
	'type'            => 'text',
	'section'         => 'blog_guten_theme_general_settings',
	'setting'         => 'blog_guten_cover_btn_text',
	'active_callback' => 'blog_guten_is_cover_active',
) );
$wp_customize->get_setting( 'blog_guten_cover_btn_text' )->transport = 'postMessage';

// Cover button link
$wp_customize->add_setting( 'blog_guten_cover_btn_link', array(
	'default'           => __( '#', 'blog-guten' ),
	'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'blog_guten_cover_btn_link', array(
	'label'           => __( 'Cover Button Link', 'blog-guten' ),
	'type'            => 'text',
	'section'         => 'blog_guten_theme_general_settings',
	'setting'         => 'blog_guten_cover_btn_link',
	'active_callback' => 'blog_guten_is_cover_active',
) );


// View docs button
$wp_customize->add_setting( 'blog_guten_view_docs_button', array(
	'default'           => '',
	'sanitize_callback' => 'wp_kses_post',
) );
$wp_customize->add_control( 'blog_guten_view_docs_button', array(
	'label'       => __( 'View Documentation', 'blog-guten' ),
	'type'        => 'hidden',
	'section'     => 'blog_guten_theme_general_settings',
	'setting'     => 'blog_guten_view_docs_button',
	'description' => wp_kses_post( __( '<a href="https://wp-points.com/how-to-setup-blog-guten-theme/" target="_blank" class="button">View Documentation</a>', 'blog-guten' ) ),
) );

// Upgrade message
$wp_customize->add_setting( 'blog_guten_upgrade_msg', array(
	'default'           => '',
	'sanitize_callback' => 'wp_kses_post',
) );
$wp_customize->add_control( 'blog_guten_upgrade_msg', array(
	'label'       => __( 'Take your website to the next level!', 'blog-guten' ),
	'type'        => 'hidden',
	'section'     => 'blog_guten_theme_general_settings',
	'setting'     => 'blog_guten_upgrade_msg',
	'description' => wp_kses_post( __( '<p>With the premium version, you get more features along with professional technical support.</p><p>You can also improve your website\'s speed and performance. Your website can be further optimized for better search engine ranking.</p><p>Few important features: <ul><li>Import demo content easily.</li><li>Display featured posts on blog homepage.</li><li>More color scheme options to choose from.</li><li>Select typography from multiple options.</li></ul></p> <a href="https://wp-points.com/themes/blog-guten-pro/" target="_blank" class="button button-primary">Learn More</a> <a href="https://blog-guten-pro.wp-points.com/" target="_blank" class="button button-primary bd-ml-5">View Pro Demo</a>', 'blog-guten' ) ),
) );



function blog_guten_sanitize_select( $input, $setting ){

	//input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
	$input = sanitize_key($input);

	//get the list of possible select options
	$choices = $setting->manager->get_control( $setting->id )->choices;

	//return input if valid or return default option
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}


function blog_guten_sanitize_checkbox( $checked ){

	//returns true if checkbox is checked
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
