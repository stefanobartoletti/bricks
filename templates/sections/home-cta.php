<?php

// WP Query 
$brk_cta_query = new WP_Query( $args ); 

// WP Loop
while ( $brk_cta_query->have_posts() ) : $brk_cta_query->the_post(); 

?>

<div class="jumbotron jumbotron-fluid mb-0" style="background: linear-gradient(rgba(0,0,0, 0.1), rgba(0,0,0, 1)), url(<?php the_post_thumbnail_url('brk_big'); ?>); background-size: cover; background-position: center center; background-attachment: fixed;">

    <div class="container py-4 text-center text-light">
        
        <div class="row justify-content-center">
            
            <div class="col-sm col-md-8 col-lg-6">

                <h2><?php the_title(); ?></h2>
                <div class="lead my-3"><?php the_excerpt(); ?></div>
                <a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button"><?php esc_html_e( 'Read more', 'bricks' ); ?></a>
            
            </div>

        </div>

    </div>

</div>

<?php endwhile; 

// WP Query Reset
wp_reset_query();
wp_reset_postdata();