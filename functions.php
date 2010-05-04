<?php

function my_theme_init() {
    if (!is_admin()) {
        wp_enqueue_style('tarski_stylesheet', get_template_directory_uri() . '/style.css');
    }
}

add_action('init', 'my_theme_init');