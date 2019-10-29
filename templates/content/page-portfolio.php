<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (! has_post_thumbnail() ) { 
        
        the_title('<h1>', '</h1>');

    } ?>

    <div id="portfolio-filter" class="row py-5">

        <div class="col text-center">

            <button id="category-all" class="btn btn-primary mx-1 mt-2" type="button"><?php esc_html_e('All', 'bricks') ?></button>

            <?php
            
            $sb_portfolio_cats = get_terms( array(
                'taxonomy' => 'category',
            ));

            foreach ($sb_portfolio_cats as $sb_portfolio_cat) { ?>
              
            <button id="category-<?php echo strtolower($sb_portfolio_cat->name) ?>" class="btn btn-primary mx-1 mt-2" type="button" ><?php echo $sb_portfolio_cat->name ?></button>

            <?php }; ?>

        </div>

    </div>

    <div id="portfolio-items" class="row pb-5">

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

        <div <?php post_class('portfolio-item col-sm-12 col-md-3 my-3'); ?>>

            <div class="card">

            <?php the_post_thumbnail('sb_square', array( 'class' => 'card-img h-auto' )); ?>
            
            <a href="<?php the_permalink(); ?>">
                <div class="card-img-overlay">
                    <h2 class="card-title h4 text-white"><?php the_title(); ?></h2>
                </div>
            </a>

            </div>

        </div>

        <?php endwhile; 

        // WP Query Reset
        wp_reset_query();
        wp_reset_postdata(); ?>

    </div>

</article> <!-- #post-<?php the_ID(); ?> -->