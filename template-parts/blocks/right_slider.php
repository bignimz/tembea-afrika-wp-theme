<?php
$title = get_field('title');
$subTitle = get_field('subtitle');
$description = get_field('description');
$bulletsTitle = get_field('bullets_title');
$images = get_field('slider_images');
$bullets = get_field('bullets');
$linkText = get_field('link_text');
$linkUrl = get_field('link_url');
?>


<section id="righttSliderWithHeaderDescription" class="swhd_block_2" style="background-color: #fff !important;">
    <div class="container">
        <div class="liswhd_row">
            <?php if(!empty($title) || !empty($subTitle) || !empty($description)): ?>
                <div class="liswhd_left_col_2">
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

                    <?php if($linkText && $linkUrl): ?>
                    <a href="<?php echo esc_url($linkUrl); ?>" class="bc_link_2"
                    ><?php echo esc_html($linkText); ?> <span class="bc_link_arrow">&rarr;</span></a
                    >
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="liswhd_right_col_2">
                <?php foreach($images as $image): ?>
                    <?php $sliderImg = $image['image']['url']; ?>
                <div
                class="liswhd_item"
                style="
                    background-image: url('<?php echo esc_url($sliderImg); ?>');
                "
                ></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>