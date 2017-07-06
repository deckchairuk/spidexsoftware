<?php
function setup() {
    // Enable plugins to manage the document title
    // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
    add_theme_support('title-tag');

    // Register wp_nav_menu() menus
    // http://codex.wordpress.org/Function_Reference/register_nav_menus
    register_nav_menus([
        'main'   => __('Main'),
        'support' => __('Support'),
        'legal' => __('legal'),
    ]);

    // Enable HTML5 markup support
    // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    add_theme_support( 'post-thumbnails' ); 

}
add_action('after_setup_theme', 'setup');

// Enqueue Scripts
function scripts_styles() {
  if ( !is_admin() ) { // Don't use styles in WP backend
    // Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'vendor', get_template_directory_uri() . '/assets/js/min/vendor.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/min/main.min.js', array(), '1.0.0', true );

    // Home animation
    if (is_front_page()) {
        wp_enqueue_script( 'three-js', get_template_directory_uri() . '/assets/js/min/three.min.js', array(), '1.0.0', false );
        wp_enqueue_script( 'three-js-projector', get_template_directory_uri() . '/assets/js/min/three.projector.min.js', array(), '1.0.0', false );
        wp_enqueue_script( 'three-js-canvas-renderer', get_template_directory_uri() . '/assets/js/min/three.canvas-renderer.min.js', array(), '1.0.0', false );
    }

    // Styes
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
        // Fonts
        wp_enqueue_style( 'roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700', array(), '1.0.0', 'all' );
  }
  
}
add_action('wp_enqueue_scripts', 'scripts_styles', 100);