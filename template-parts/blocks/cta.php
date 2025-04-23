<?php
$title = get_field('cta_title');
$desc = get_field('cta_description');
$btnText = get_field('cta_button_text');
$btnLink = get_field('cta_button_link');
$bgImage = get_field('background_image');

?>

<section class="safari-booking-section" style="background-image: url('<?php echo esc_url($bgImage); ?>')">
    <div class="safari-booking-content">
        <?php if($title): ?>
        <h2 class="safari-booking-title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>
        <?php if($desc): ?>
        <p class="safari-booking-description">
            <?php echo esc_html($desc); ?>
        </p>
        <?php endif; ?>
        <?php if($btnText && $btnLink): ?>
        <a href="<?php echo esc_url($btnLink); ?>" class="safari-booking-btn"><?php echo esc_html($btnText); ?></a>
        <?php endif; ?>
    </div>
</section>