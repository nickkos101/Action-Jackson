<?php

include 'autocracy/autocracy.php';

//Menu Registration
add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
	) );

//Post Registration
function jackson_create_post_type() {
	register_post_type('testimonials', array(
		'labels' => array(
			'name' => __('Testimonials'),
			'singular_name' => __('Testimonial')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'testimonials'),
		'menu_icon' => 'dashicons-share',
		'supports' => array('title','editor','thumbnail')
		)
	);
	register_post_type('featuredslider', array(
		'labels' => array(
			'name' => __('Featured Slides'),
			'singular_name' => __('Featured Slide')
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'featureslider'),
		'menu_icon' => 'dashicons-share',
		'supports' => array('title','editor','thumbnail')
		)
	);
}
add_action('init', 'jackson_create_post_type');

//Category Registration
function jackson_create_categories() {
	  wp_create_category('Fitness');
	  wp_create_category('Nutrition');
}
add_action('admin_init', 'jackson_create_categories');

//Sidebar Registration
register_sidebar( array(
	'name' => __( 'Pages Sidebar', 'wpb' ),
	'id' => 'sidebar-1',
	'description' => __( 'The blog sidebar appears on the right hand side.', 'wpb' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	) 
);

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


?>