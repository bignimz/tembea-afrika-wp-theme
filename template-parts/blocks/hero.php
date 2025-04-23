<?php
$heading = get_field('heading');
$subheading = get_field('subheading');
$background = get_field('background_image');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
?>

<section class="hero-section" style="background-image: url('<?php echo esc_url($background); ?>');">
  <div class="overlay"></div>
  <div class="hero-content container">
    <?php if ($heading): ?>
      <h1><?php echo esc_html($heading); ?></h1>
    <?php endif; ?>

    <?php if ($subheading): ?>
      <p class="subheading"><?php echo esc_html($subheading); ?></p>
    <?php endif; ?>

    <?php if ($button_text && $button_link): ?>
      <a href="<?php echo esc_url($button_link); ?>" class="hero-btn"><?php echo esc_html($button_text); ?></a>
    <?php endif; ?>
  </div>
</section>
