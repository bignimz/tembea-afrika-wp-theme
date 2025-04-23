<?php
$title = get_field('title');
$subTitle = get_field('subtitle');
$desc = get_field('description');
$reviewStars = get_field('review_ratings');
$reviewBgColor = get_field('review_background_color');
$bgImage = get_field('background_image');
$reviews = get_field('reviews');
?>

<section class="review-testimonials">
    <div class="review-left-col" style="background-color: <?php echo esc_html($reviewBgColor); ?>">
        <?php if($title): ?>
        <h3 class="review-title"><?php echo esc_html($title); ?></h3>
        <?php endif; ?>

        <?php if($subTitle): ?>
        <p class="review-subtitle"><?php echo esc_html($subTitle); ?></p>
        <?php endif; ?>

        <?php if($desc): ?>
        <p class="review-description"><?php echo esc_html($desc); ?></p>
        <?php endif; ?>

        <?php if($reviewStars): ?>
            <div class="review-ratings">
            <?php foreach($reviewStars as $star): ?>
                <?php $reviewStar = $star['image']['url']; ?>
                <img src="<?php echo esc_url($reviewStar); ?>" alt="">
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="review-right-col" style="background-image: url('<?php echo esc_url($bgImage); ?>')">
        <span class="review-quote">"</span>
        <div class="review-content">
            <?php if($reviews): ?>
                <?php foreach($reviews as $review): ?>
                    <?php 
                    $reviewText = $review['review_text'];
                    $author = $review['review_author'];    
                    ?>
                    <div class="review-details">
                        <p class="review-text">
                            <?php echo esc_html($reviewText); ?>
                        </p>
                        <span class="review-author"><?php echo esc_html($author); ?></span>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>