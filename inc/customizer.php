<?php 

function hart_customize_register($wp_customize) {
	// Showcase Section
	$wp_customize->add_section('showcase', array(
		'title' => __('Hart-Showcase', 'My Theme'),
		'description' => sprintf(__('Options for Showcase', 'My Theme')),
		'priority' => 130
	));


	// Background Image
	$wp_customize->add_setting('showcase_img', array(
		'default' => get_bloginfo('template_directory') . '/img/showcase.jpg',
		'type' => 'theme_mod'
	));


	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_img', array(
		'label' => __('Showcase Image', 'My Theme'),
		'section' => 'showcase',
		'settings' => 'showcase_img',
		'priority' => 1
	)));


	// Heading
	$wp_customize->add_setting('showcase_heading', array(
		'default' => _x('Hart Custom Wordpress Theme', 'My Theme'),
		'type' => 'theme_mod'
	));


	$wp_customize->add_control('showcase_heading', array(
		'label' => __('Heading', 'My Theme'),
		'section' => 'showcase',
		'priority' => 2
	));


	// Sub-heading
	$wp_customize->add_setting('showcase_subheading', array(
		'default' => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'My Theme'),
		'type' => 'theme_mod'
	));


	$wp_customize->add_control('showcase_subheading', array(
		'label' => __('Sub-heading', 'My Theme'),
		'section' => 'showcase',
		'priority' => 3
	));


	// Button URL
	$wp_customize->add_setting('btn_url', array(
		'default' => _x('http://test.com', 'My Theme'),
		'type' => 'theme_mod'
	));


	$wp_customize->add_control('btn_url', array(
		'label' => __('Sub-heading', 'My Theme'),
		'section' => 'showcase',
		'priority' => 4
	));


	// Button Text
	$wp_customize->add_setting('btn_text', array(
		'default' => _x('Visit Link', 'My Theme'),
		'type' => 'theme_mod'
	));


	$wp_customize->add_control('btn_text', array(
		'label' => __('Sub-heading', 'My Theme'),
		'section' => 'showcase',
		'priority' => 5
	));
}
add_action('customize_register', 'hart_customize_register');