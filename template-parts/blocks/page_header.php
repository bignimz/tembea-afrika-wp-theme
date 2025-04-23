<?php
$title = get_field('page_title');
$subTitle = get_field('page_subtitle');
$headetText = get_field('header_text');
$bgImage = get_field('header_background_image');
$ctaText = get_field('cta_text');
$ctaLink = get_field('cta_link');
?>


<header class="page-header" style="background-image: url('<?php echo esc_url($bgImage['url']); ?>');">
    <div class="container">
        <div class="header-content">
            <?php if($title): ?>
                <h1><?php echo esc_html($title); ?></h1>
            <?php endif; ?>
    
            <?php if($subTitle): ?>
                <h3><?php echo esc_html($subTitle); ?></h3>
            <?php endif; ?>
    
            <?php if($headetText): ?>
                <p><?php echo esc_html($headetText); ?></p>
            <?php endif;?>
    
            <?php if($ctaText && $ctaLink): ?>
                <a href="<?php echo esc_url($ctaLink['url']); ?>" class="cta-button"><?php echo esc_html($ctaText); ?></a>
            <?php endif; ?>
        </div>
    </div>
</header>