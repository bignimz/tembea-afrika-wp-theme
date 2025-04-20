<?php

// Register menus
function tembea_afrika_register_menus() {
	register_nav_menus(array(
	  'primary' => __('Primary Menu', 'tembea-afrika')
	));
  }
  add_action('init', 'tembea_afrika_register_menus');
  
  // Theme support
  function tembea_afrika_theme_support() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('editor-styles');
	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');
	add_theme_support('responsive-embeds');
  }
  add_action('after_setup_theme', 'tembea_afrika_theme_support');