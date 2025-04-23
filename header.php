<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tembea-afrika' ); ?></a>
  
  <header id="masthead" class="site-header">
    <div class="container">
      <div class="site-branding logo">
        <?php the_custom_logo(); ?>

      <?php if ( is_front_page() && is_home() ) : ?>
        <h1 class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
      <?php endif; ?>
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

