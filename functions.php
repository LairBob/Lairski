<?php

function my_theme_init() {
    if (!is_admin()) {
        wp_enqueue_style('tarski_stylesheet', get_template_directory_uri() . '/style.css');
    }
}

add_action('init', 'my_theme_init');
add_theme_support( 'nav-menus' );

add_filter('mce_css', 'my_editor_style');

function my_editor_style($url) {
  if ( !empty($url) )
    $url .= ',';
  // Change the path here if using sub-directory
  $url .= trailingslashit( get_stylesheet_directory_uri() ) . 'style.css';

  return $url;
}