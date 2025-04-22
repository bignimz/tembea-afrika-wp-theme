<?php
$heading = get_field('heading');
$partners = get_field('partners');
?>

<!-- Our Partners Section -->
<section id="partnersSlider" class="bc_partners" data-aos="zoom-in-up">
    <div class="container">
        <?php if($heading): ?>
        <h3 class="bc_title partners_title"><?php echo esc_html($heading); ?></h3>
        <?php endif; ?>

        <?php if($partners): ?>
        <div class="bc_partners_logos">
            <?php foreach($partners as $partner): ?>
                <?php $partnerLogo = $partner['image']['url']; ?>
                <div class="bc_logo">
                    <img src="<?php echo esc_url($partnerLogo); ?>" alt="" />
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>