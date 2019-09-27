<div class="row justify-content-center pb-4">

    <h2><?php esc_html_e('News', 'sb-base-theme') ?></h2>

</div>

<div class="card-deck">

    <?php

    // WP Query 
    $args = get_query_var('sb_args');

    $sb_cards_query = new WP_Query( $args ); 

    // WP Loop
    while ( $sb_cards_query->have_posts() ) : $sb_cards_query->the_post(); 
    
    ?>

    <div class="card border-0">

        <div class="card-body">

            <p class="card-subtitle mb-2"><small><?php the_category(', '); ?> | <?php the_time('j F Y'); ?></small></p>

            <a href="<?php the_permalink(); ?>">
                <h3 class="card-title"><?php the_title(); ?></h3>
            </a>

            <a href="<?php the_permalink(); ?>">
                <img class="img-fluid pb-3" src="<?php the_post_thumbnail_url('sb_single'); ?>" alt="<?php sb_thumb_alt(); ?>">
            </a>

            <p class="card-text"><small class="text-muted"><?php esc_html_e('By ', 'sb-base-theme'); the_author(); ?></small></p>

            <div class="card-text"><?php the_excerpt(); ?></div>

            <a href="<?php the_permalink(); ?>" class="card-link"><?php esc_html_e('Read more', 'sb-base-theme'); ?></a>

        </div>


    </div>

    <?php endwhile; 

    // WP Query Reset
    wp_reset_query();
    wp_reset_postdata(); ?>
        
</div>
