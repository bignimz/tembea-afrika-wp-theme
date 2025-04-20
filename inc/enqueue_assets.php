<?php

function tembea_afrika_enqueue_assets() {
    wp_enqueue_style('tembea-style', get_stylesheet_uri());
    wp_enqueue_style('tembea-custom', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('tembea-script', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'tembea_afrika_enqueue_assets');