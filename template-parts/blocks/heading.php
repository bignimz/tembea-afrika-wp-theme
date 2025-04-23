<?php 
$heading = get_field('heading');
$subheading = get_field('sub_heading');
$linkText = get_field('link_text');
$linkUrl = get_field('link_url');

?>

<!-- Heading Section -->
 <section class="heading-section">
    <div class="container">
        <div class="heading-section-row">
            <?php if($heading || $subheading): ?>
                <div class="heading-block">
                    <?php if($heading): ?>
                    <h2><?php echo esc_html($heading); ?></h2>
                    <?php endif; ?>

                    <?php if($subheading); ?>
                    <p><?php echo esc_html($subheading); ?></p>
                    <?php endif; ?>
                </div>

            <?php if($linkText && $linkUrl): ?>
            <a class="bc_link_2" href="<?php echo esc_url($linkUrl); ?>">
                <?php echo esc_html($linkText); ?>
                <span class="bc_link_arrow">&rarr;</span>
            </a>
            <?php endif; ?>
        </div>
    </div>
 </section>