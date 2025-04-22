<?php

function tembea_afrika_acf_blocks_init() {
    if( function_exists('acf_register_block_type') ) {
        // Hero block
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

        // Intro Block
        acf_register_block_type([
            'name'              => 'intro',
            'title'             => __('Intro Section'),
            'description'       => __('Intro section with heading, text, and image'),
            'render_template'   => 'template-parts/intro.php',
            'category'          => 'layout',
            'icon'              => 'editor-paragraph',
            'keywords'          => ['intro', 'section'],
            'mode'              => 'edit',
            'supports'          => [
                'align' => false,
                'anchor' => true,
            ]
        ]);

        // Safaris Block
        acf_register_block_type([
            'name'              => 'safaris',
            'title'             => __('Safaris Section'),
            'description'       => __('Display a list of safaris with images and links.'),
            'render_template'   => 'template-parts/safaris.php',
            'category'          => 'layout',
            'icon'              => 'location-alt',
            'keywords'          => ['safari', 'tours', 'travel'],
            'mode'              => 'edit',
            'supports'          => ['align' => false]
        ]);
        
        // Destinations Block
        acf_register_block_type([
            'name'              => 'destinations',
            'title'             => __('Destinations Section'),
            'description'       => __('Display a list of destinations with both circular and square images and links.'),
            'render_template'   => 'template-parts/destinations.php',
            'category'          => 'layout',
            'icon'              => 'location-alt',
            'keywords'          => ['safari', 'tours', 'travel'],
            'mode'              => 'edit',
            'supports'          => ['align' => false]
        ]);

        // Left Slider with Description Block
        acf_register_block_type([
            'name'              => 'left_slider',
            'title'             => __('Left Slider Section'),
            'description'       => __('This block displays a slider with descriptive text. Upload multiple images for a carousel effect.'),
            'render_template'   => 'template-parts/left_slider.php',
            'category'          => 'layout',
            'icon'              => 'location-alt',
            'keywords'          => ['left slider', 'image slider'],
            'mode'              => 'edit',
            'supports'          => ['align' => false]
        ]);

        // Right Slider with Description Block
        acf_register_block_type([
            'name'              => 'right_slider',
            'title'             => __('Right Slider Section'),
            'description'       => __('Display a list of right image slider with description and links.'),
            'render_template'   => 'template-parts/left_slider.php',
            'category'          => 'layout',
            'icon'              => 'location-alt',
            'keywords'          => ['right slider', 'image slider'],
            'mode'              => 'edit',
            'supports'          => ['align' => false]
        ]);

        // Partners Block
        acf_register_block_type([
            'name'              => 'partners',
            'title'             => __('Partners and Accreditations Section'),
            'description'       => __('Display a list of partners logos'),
            'render_template'   => 'template-parts/partners.php',
            'category'          => 'layout',
            'icon'              => 'location-alt',
            'keywords'          => ['partners'],
            'mode'              => 'edit',
            'supports'          => ['align' => false]
        ]);

        // Page Header Block
        acf_register_block_type([
            'name'              => 'page_header',
            'title'             => __('Page Header Section'),
            'description'       => __('Display a page title, subtitle, description and CTA button'),
            'render_template'   => 'template-parts/page_header.php',
            'category'          => 'layout',
            'icon'              => 'location-alt',
            'keywords'          => ['page header', 'header'],
            'mode'              => 'edit',
            'supports'          => ['align' => false]
        ]);
    }
}
add_action('acf/init', 'tembea_afrika_acf_blocks_init');