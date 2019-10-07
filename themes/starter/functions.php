<?php

// Theme Support
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'title-tag' );
  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );
}

// Theme CSS
function starter_enqueue_style() {
	wp_enqueue_style( 'starter-style', get_template_directory_uri() . '/assets/css/main.css', false );
}
add_action( 'wp_enqueue_scripts', 'starter_enqueue_style' );

// Theme JS
function starter_enqueue_script() {
	wp_enqueue_script( 'starter-script', get_stylesheet_directory_uri() . '/assets/js/min/scripts.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'starter_enqueue_script' );

?>