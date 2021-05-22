<?php

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

add_action('wp_enqueue_scripts', 'add_theme_scripts');


?>