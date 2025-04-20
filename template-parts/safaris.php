<?php
$heading = get_field('heading');
$subHeading = get_field('subheading');
$desc = get_field('description');
$mainLinkText = get_field('link_text');
$mainLinkUrl = get_field('more_link_url');
$safaris = get_field('safaris');
?>

<section id="sliderWithHeaderDescription1" class="swhd_block">
      <div class="container">
          <div class="bc_content_row">
              <div class="bc_content_row-left">
                  <p class="bc_subtitle"><?php echo esc_html($subHeading); ?></p>
            <?php if ($heading): ?>
                <h2 class="bc_title"><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>
          </div>
          <div class="bc_content_row-right">
            <p class="bc_desc"><?php echo esc_html($desc); ?></p>
            <?php if($mainLinkText): ?>
            <div class="mb-30">
              <a href="<?php echo esc_url($mainLinkUrl); ?>" class="bc_link_2" style="float: right"
                ><?php echo esc_html($mainLinkText); ?> <span class="bc_link_arrow">&rarr;</span></a
              >
            </div>
            <?php endif; ?>
          </div>
        </div>


    <?php if ($safaris): ?>
      <div class="swhd_slide_row owl-carousel">
        <?php foreach ($safaris as $safari): ?>
          <?php
            $image = $safari['image']['url'];
            $title = $safari['title'];
            $subtitle = $safari['sub_title'];
            $link_text = $safari['more_text'];
            $link_url = $safari['more_link'];
          ?>
          <div class="bc_safari_1" style="background-image: url('<?php echo esc_url($image); ?>');">
            <div class="bc_safari_footer">
              <div class="bc_safari_1_title"><?php echo esc_html($title); ?></div>
              <div class="bc_safari_subtitle"><?php echo esc_html($subtitle); ?></div>
            </div>
            <?php if ($link_url && $link_text): ?>
              <div class="bc_safari_footer_cta hidden">
                <a href="<?php echo esc_url($link_url); ?>" class="view_package_link">
                  <?php echo esc_html($link_text); ?>
                  <span class="cta_arrow">&rarr;</span>
                </a>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
</section>
