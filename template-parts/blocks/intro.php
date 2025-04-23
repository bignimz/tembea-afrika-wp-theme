<?php
$heading = get_field('heading');
$bgText = get_field('background_text');
$introContent = get_field('intro_text');
$image = get_field('image');
$linkText = get_field('link_text');
$linkUrl = get_field('link_url');
?>

<section id="imageWithContentOverlay" class="iwco_block" data-aos="fade-up">
  <div class="container">
    <?php if($bgText): ?>
    <div class="iwco_bg_text" data-aos="zoom-in-up" data-aos-delay="900"><?php esc_html_e($bgText); ?></div>
    <?php endif; ?>
    <div class="bc_row">
    <?php if ($image && is_array($image)): ?>
        <div class="bc_row_left_col">
            <span class="bc_row_overlay"></span>
            <div class="bc_row_left_col_image">
            <img
                src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>"
                class="bc_img_fluid"
            />
            </div>
        </div>
    <?php endif; ?>
      <div class="bc_row_right_col">
        <?php if($heading): ?>
        <h1 class="bc_title"><?php esc_html_e($heading); ?></h1>
        <?php endif; ?>
        <?php if($introContent): ?>
        <p class="bc_desc"><?php echo wp_kses_post($introContent); ?></p>
        <?php endif; ?>
        <?php if($linkText): ?>
        <a href="<?php echo esc_url($linkUrl); ?>" class="bc_link_2">
          <?php esc_html_e($linkText); ?>
          <span class="bc_link_arrow">&rarr;</span>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

