<?php
/**
 * Block Name: Blog Posts Grid
 * Description: Displays blog posts in a responsive grid format
 */

// Create id attribute for specific styling
$id = 'blog-posts-grid-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values
$classes = 'blog-posts-grid';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}

// Get ACF fields
$posts_per_row = get_field('posts_per_row') ?: 3;
$total_posts = get_field('total_posts') ?: 3;
$category = get_field('category');

// Query arguments
$args = [
    'post_type' => 'post',
    'posts_per_page' => $total_posts,
    'post_status' => 'publish',
];

// Add category parameter if selected
if ($category) {
    $args['cat'] = $category;
}

// Query posts
$query = new WP_Query($args);
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <div class="container">
        <div class="blog-posts-row" style="display: flex; flex-wrap: wrap; margin: 0 -15px;">
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="blog-post-item" style="flex: 0 0 calc(<?php echo 100/$posts_per_row; ?>% - 30px); margin: 0 15px 30px;">
                        <div class="blog-post-card" style="border-bottom: 1px solid #eee; border-radius: 5px; overflow: hidden; height: 100%; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="blog-post-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large', ['class' => 'img-fluid']); ?>
                                    </a>
                                    <div class="blog-post-date">
                                        <span><?php echo get_the_date('d M'); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="blog-post-content">
                                <h3 class="blog-post-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <div class="blog-post-excerpt">
                                    <?php 
                                    $excerpt = get_the_excerpt();
                                    $trimmed_excerpt = wp_trim_words($excerpt, 12, '...');
                                    echo $trimmed_excerpt; 
                                    ?>
                                </div>
                                <div class="blog-post-readmore">
                                    <a href="<?php the_permalink(); ?>" class="read-more">
                                        <span class="bc_link_arrow">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>