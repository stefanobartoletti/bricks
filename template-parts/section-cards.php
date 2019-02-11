<div class="card-deck">

    <?php

        // WP Query 
        $args = get_query_var('sb_cards_args');

        $sb_cards_query = new WP_Query( $args ); 

        // WP Loop
        while ( $sb_cards_query->have_posts() ) :
            $sb_cards_query->the_post(); 
    
    ?>

    <div class="card">

        <div class="card-header">
            <p class="mb-0"><?php the_category(', '); ?></p>
        </div>

        <a href="<?php the_permalink(); ?>">
            <img class="card-img-top" src="<?php the_post_thumbnail_url('sb_single'); ?>" alt="<?php the_title(); ?>">
        </a>

        <div class="card-body">

            <a href="<?php the_permalink(); ?>">
                <h3 class="card-title"><?php the_title(); ?></h3>
            </a>

            <p class="card-subtitle mb-2"><p><?php the_author(); ?> - <?php the_time('j M, Y'); ?></p></p>

            <div class="card-text"><?php the_excerpt(); ?></div>

            <a href="<?php the_permalink(); ?>" class="card-link"><?php esc_html_e('Read more', 'sb-base-theme'); ?></a>

        </div>

        <div class="card-footer">
            <p class="mb-0"><?php the_tags('', ', ', ''); ?></p>
        </div>

    </div>

    <?php endwhile; 

    // WP Query Reset
    wp_reset_query();
    wp_reset_postdata(); ?>
        
</div>
