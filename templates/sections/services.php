<div class="row justify-content-center pb-5">

    <h2><?php esc_html_e('Services', 'sb-base-theme') ?></h2>

</div>

<div class="row">

    <?php

    // WP Query 
    $args = get_query_var('sb_args');

    $sb_services_query = new WP_Query( $args ); 

    // WP Loop
    while ( $sb_services_query->have_posts() ) : $sb_services_query->the_post(); 
    
    ?>

    <div class="col-sm text-center pb-5">

        <img class="img-fluid rounded-circle w-50 mb-4" src="<?php the_post_thumbnail_url('sb_square'); ?>" alt="<?php sb_thumb_alt(); ?>">

        <h3><?php the_title(); ?></h3>

        <div class="w-75 mx-auto"><?php the_excerpt(); ?></div>

        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e('Read more', 'sb-base-theme'); ?></a>

    </div>

    <?php endwhile; 

    // WP Query Reset
    wp_reset_query();
    wp_reset_postdata(); ?>
    
</div>

