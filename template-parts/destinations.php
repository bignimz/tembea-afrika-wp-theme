<?php 
$heading = get_field('heading');
$subHeading = get_field('subheading');
$description = get_field('description');
$destinations = get_field('destinations'); // Get the repeater field
?>

<section id="sliderWithHeaderDescription2" class="swhd_2_block">
    <div class="container">
        <?php if(!empty($heading) || !empty($subHeading) || !empty($description)): ?>
        <div class="bc_block_head">
            <?php if($subHeading): ?>
                <p class="bc_subtitle"><?php echo esc_html($subHeading); ?></p>
            <?php endif; ?>
            <?php if($heading): ?>
                <h3 class="bc_title"><?php echo esc_html($heading); ?></h3>
            <?php endif; ?>
            <?php if($description): ?>
                <p class="bc_desc"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <?php if($destinations): ?>
        <div class="swhd_slide_row">
            <?php foreach($destinations as $destination): ?>
                <?php 
                    // Access the fields for each destination
                    $title = $destination['title'];
                    $insetImage = $destination['inset_image'];
                    $insetImageUrl = $destination['inset_image_url'];
                    $bgImage = $destination['background_image']['url'];
                    $bgImageUrl = $destination['background_image_url'];
                ?>
                <div
                  class="bc_safari_2"
                  style="
                    background-image: url('<?php echo $bgImage ? esc_url($bgImage) : esc_url($bgImageUrl); ?>');
                  "
                >
                  <div class="bc_overlay"></div>
                  <?php if($title): ?>
                  <div class="bc_safari_footer_cta">
                    <h4 class="bc_safari_title"><?php echo esc_html($title); ?></h4>
                  </div>
                  <?php endif; ?>
                  <img
                    class="bc_span_image"
                    src="<?php echo esc_url($insetImage ? $insetImage : $insetImageUrl); ?>"
                    alt="<?php echo esc_attr($title); ?>"
                  />
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>