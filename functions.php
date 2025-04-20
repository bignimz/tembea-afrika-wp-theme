<?php

function tembea_afrika_enqueue_assets() {
    wp_enqueue_style('tembea-style', get_stylesheet_uri());
    wp_enqueue_style('tembea-custom', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('tembea-script', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'tembea_afrika_enqueue_assets');

// Require Inc
require_once "inc/includes.php";

function tembea_afrika_acf_blocks_init() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type([
            'name'              => 'hero',
            'title'             => __('Hero Section'),
            'description'       => __('Hero section with title and CTA'),
            'render_template'   => 'template-parts/hero.php',
            'category'          => 'layout',
            'icon'              => 'format-image',
            'keywords'          => ['hero', 'banner'],
            'mode'              => 'edit'
        ]);
    }
}
add_action('acf/init', 'tembea_afrika_acf_blocks_init');
