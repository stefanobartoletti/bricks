<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (! has_post_thumbnail() ) { 
        
        the_title('<h1>', '</h1>');

    } ?>

    <div id="portfolio-filter" class="row py-5">

        <div class="col text-center">

            <?php $taxonomy_name = 'category'; ?>

            <button id="<?php echo $taxonomy_name ?>-all" class="btn btn-primary mx-1 mt-2" type="button"><?php esc_html_e('All', 'bricks') ?></button>

            <?php
            
            $sb_portfolio_cats = get_terms( array(
                'taxonomy' => $taxonomy_name,
            ));

            foreach ($sb_portfolio_cats as $sb_portfolio_cat) { ?>
              
            <button id="<?php echo $taxonomy_name.'-'.$sb_portfolio_cat->slug ?>" class="btn btn-primary mx-1 mt-2" type="button" ><?php echo $sb_portfolio_cat->name ?></button>

            <?php }; ?>

        </div>

    </div>

    <div id="portfolio-items" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 pb-5">

        <?php 

        // WP Query 
        $sb_portfolio_query = new WP_Query( array(
            'post_type'         => 'post',
            'posts_per_page'    => 100,
            'orderby'           => 'title',
            'order'             => 'ASC',
        )); 

        // WP Loop
        while ( $sb_portfolio_query->have_posts() ) : $sb_portfolio_query->the_post(); 
        
            get_template_part( 'templates/content/loop', 'portfolio' );

        endwhile; 

        // WP Query Reset
        wp_reset_query();
        wp_reset_postdata(); ?>

    </div>

</section> <!-- #post-<?php the_ID(); ?> -->