<?php

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', ['style']);
    wp_enqueue_style('main', get_template_directory_uri() . '/js/main.js', [], null, true);
}

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

add_action('wp_enqueue_scripts', 'add_theme_scripts');


?>