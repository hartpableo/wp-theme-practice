<?php 

// Register Nav Walker class_alias
require_once('class-wp-bootstrap-navwalker.php');



// Theme Support
function hart_theme_support() {
	// Nav Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));

	// Post Thumbnails
	add_theme_support('post-thumbnails');

	// Post Formats
	add_theme_support('post-formats', array('aside', 'gallery'));
}
add_action('after_setup_theme', 'hart_theme_support');



// Register Stylesheet
function hart_register_styles() {
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('hart_bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css', array(), $version, 'all');
	wp_enqueue_style('hart_stylesheet', get_template_directory_uri() . '/style.css', array(), $version, 'all');
	wp_enqueue_style('hart_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts', 'hart_register_styles');


// Register Scripts
function hart_register_scripts() {
	wp_enqueue_script('hart_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true);
	wp_enqueue_script('hart_bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'hart_register_scripts');



// Excerpt
function hart_set_excerpt_length() {
	return 45;
}
add_filter('excerpt_length', 'hart_set_excerpt_length');


// Widget Locations
function hart_init_widgets($id) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Box1',
		'id' => 'box1',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Box2',
		'id' => 'box2',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Box3',
		'id' => 'box3',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
add_action('widgets_init', 'hart_init_widgets');

// Customer File
require get_template_directory() . '/inc/customizer.php';