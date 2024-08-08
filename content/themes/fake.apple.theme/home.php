<?php get_header(); ?>

<div class="category-posts">
    <?php
    $excluded_category_id = 1;
    $categories = get_categories();
    
    foreach ($categories as $category) {
        if ($category->term_id == $excluded_category_id) {
            continue;
        }
        
        $args = array(
            'cat' => $category->term_id,
            'posts_per_page' => 1
        );
        
        $latest_post = new WP_Query($args);
        
        if ($latest_post->have_posts()) : 
            while ($latest_post->have_posts()) : $latest_post->the_post();
                $imgUrl = get_field('imgUrl');
                $subtitle = get_field('subtitle');
                $Mood = get_field('Mood');
    ?>             
                <a href="<?php the_permalink(); ?>" class="post-a">
                <div class="post">
                    <?php 
                    if($Mood=="dark"){
                        $fontColor = "style=\"color:white;\"";
                    }
                    else {
                        $fontColor = "style=\"color:black;\"";
                    }
                    ?>
                    <img src='<?php echo esc_url($imgUrl); ?>' class="bg-imgs">
                        <div <?php echo ($fontColor);?>>
                            <h1><?php the_title(); ?></h1>
                            <h2><?php echo esc_html($subtitle); ?></h2>
                            <button class="learn-more-btn">Learn more</button>
                        </div>
                    </div>
                </a>
    <?php
            endwhile;
        endif;

        wp_reset_postdata();
    }
    ?>
</div>

<?php get_footer(); ?>
