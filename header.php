<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="container">
      <div class="logo">
        <a href="<?php echo home_url(); ?>">Tembea</a>
      </div>
      <nav class="main-nav">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'nav-menu',
            'container' => false,
            'depth' => 0
          ));
        ?>
      </nav>
      <button class="menu-toggle" aria-label="Toggle navigation">&#9776;</button>
    </div>
  </header>

