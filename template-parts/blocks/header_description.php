<?php

$heading = get_field('heading');
$subheading = get_field('sub_heading');
$description = get_field('description');
$btnText = get_field('button_text');
$btnLink = get_field('button_link');

?>


<section class="header-description-block">
    <div class="container">
        <?php if($heading): ?>
        <h2 class="header-desc-title"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>

        <?php if($subheading): ?>
        <h2 class="header-desc-subtitle"><?php echo esc_html($subheading); ?></h2>
        <?php endif; ?>

        <?php if($description): ?>
        <p class="header-description-block-description">
            <?php echo wp_kses_post($description); ?>
        </p>
        <?php endif; ?>

        <?php if($btnText && $btnLink): ?>
        <a href="<?php echo esc_url($btnLink); ?>" class="safari-booking-btn"><?php echo esc_html($btnText); ?></a>
        <?php endif; ?>
    </div>
</section>