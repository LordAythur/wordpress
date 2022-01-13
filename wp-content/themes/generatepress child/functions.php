<?php

require ('addons/hook.php');
require ('addons/shortcode.php');
require ('addons/metabox.php');
require ('addons/widget.php');
require ('taxonomie/livre.php');
require ('taxonomie/livre-metabox.php');

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
	wp_enqueue_style('parent-style', get_stylesheet_uri().'/style.css');
	wp_enqueue_style('parent-style-child', get_stylesheet_directory_uri().'/style.css');
	wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');

	if( is_home() ){
        wp_enqueue_script( 'test-js', get_stylesheet_directory_uri() . '/js/test.js');
		wp_enqueue_style( 'blog-css', get_stylesheet_directory_uri(). '/css/style-blog.css');
    }
}


