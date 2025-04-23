<?php
$title = get_field('title');
$subTitle = get_field('subtitle');
$description = get_field('description');
$bulletsTitle = get_field('bullets_title');
$images = get_field('slider_images');
$bullets = get_field('bullets');
$linkText = get_field('link_text');
$linkUrl = get_field('link_url');
$rightImageLayout = get_field('right_image_layout');

// classes based on the toggle
$rowClass = $rightImageLayout ? 'liswhd_row right_block' : 'liswhd_row';
$sectionClass = $rightImageLayout ? 'swhd_block default' : 'swhd_block';
?>

<section id="LeftSliderWithHeaderDescription" class="<?php echo esc_attr($sectionClass); ?>">
    <div class="container">
        <div class="<?php echo esc_attr($rowClass); ?>">
            <?php if($images): ?>
          <div class="liswhd_left_col" data-aos="fade-right">
            <?php foreach($images as $image): ?>
                <?php 
                $sliderImg = $image['image']['url'];    
                ?>
            <div
              class="liswhd_item"
              style="
                background-image: url('<?php echo esc_url($sliderImg); ?>');
              "
            ></div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
          <div class="liswhd_right_col" data-aos="fade-left">
            <?php if($subTitle): ?>
            <p class="bc_subtitle"><?php echo esc_html($subTitle); ?></p>
            <?php endif; ?>

            <?php if($title): ?>
            <h3 class="bc_title2"><?php echo esc_html($title); ?></h3>
            <?php endif; ?>

            <?php if($description): ?>
            <p class="bc_desc"><?php echo esc_html($description); ?></p>
            <?php endif; ?>

            <?php if($bullets): ?>
                <?php if($bulletsTitle): ?>
                <h4 class="bc_minititle"><?php echo esc_html($bulletsTitle); ?></h4>
                <?php endif; ?>
                <div class="bc_bullets">
                    <?php foreach($bullets as $bullet): ?>
                        <?php 
                        $bulletList = $bullet['bullet'];    
                        ?>
                        <p class="bc_bullet"><?php echo esc_html($bulletList); ?></p>
                    <?php endforeach; ?>
                    </div>
            <?php endif; ?>

            <?php if($linkText): ?>
            <a href="<?php echo esc_url($linkUrl); ?>" class="bc_link_2"
              ><?php echo esc_html($linkText); ?> <span class="bc_link_arrow">&rarr;</span></a
            >
            <?php endif; ?>
          </div>
        </div>
    </div>
</section>