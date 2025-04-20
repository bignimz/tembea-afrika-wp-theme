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
        
    }
}
add_action('acf/init', 'tembea_afrika_acf_blocks_init');