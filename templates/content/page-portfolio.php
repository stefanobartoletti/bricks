<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (! has_post_thumbnail() ) { 
        
        the_title('<h1>', '</h1>');

    } ?>

    <div id="portfolio-filter" class="row py-5">

        <div class="col-12 d-flex justify-content-center">

            <?php
            
            $sb_portfolio_cats = get_terms( array(
                'taxonomy' => 'category',
            ));

            foreach ($sb_portfolio_cats as $sb_portfolio_cat) {
              
                echo '<button type="button" class="btn btn-primary mx-1">' . $sb_portfolio_cat->name . '</button>';

            };

            ?>

        </div>

    </div>

    <div id="portfolio-items" class="row py-5">

        <?php 

        // WP Query 
        $sb_portfolio_query = new WP_Query( array(
            'post_type'         => 'post',
            'posts_per_page'    => 100,
            'orderby'           => 'title',
            'order'             => 'ASC',
        )); 

        // WP Loop
        while ( $sb_portfolio_query->have_posts() ) :
            $sb_portfolio_query->the_post(); 
        
        ?>

        <div class="col-sm-12 col-md-3">

            <div>
            
                <?php the_content(); 

                wp_link_pages(array(
                    'before'        => '<nav class="nav"><span class="nav-link">' . esc_html__( 'Part:', 'sb-base-theme' ) . '</span>',
                    'after'         => '</nav>',
                    'link_before'   => '<span class="nav-link">',
                    'link_after'    => '</span>',
                ));
                
                ?>

            </div>

        </div>

        <?php endwhile; 

        // WP Query Reset
        wp_reset_query();
        wp_reset_postdata(); ?>

    </div>

</article> <!-- #post-<?php the_ID(); ?> -->