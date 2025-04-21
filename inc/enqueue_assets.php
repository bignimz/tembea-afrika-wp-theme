<?php

function tembea_afrika_enqueue_assets() {
    wp_enqueue_style('tembea-style', get_stylesheet_uri());
    wp_enqueue_style('tembea-custom', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('tembea-main', get_template_directory_uri() . '/assets/css/main.css', ['tembea-custom'], '2.3.4');

    // OwlCarousel (CSS + JS)
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [], '2.3.4');
    wp_enqueue_style('owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', [], '2.3.4');
    wp_enqueue_script('jquery'); // ensure jQuery is loaded
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', ['jquery'], '2.3.4', true);

    // Custom JS
    wp_enqueue_script('tembea-script', get_template_directory_uri() . '/assets/js/main.js', ['jquery', 'owl-carousel'], null, true);
}
add_action('wp_enqueue_scripts', 'tembea_afrika_enqueue_assets');