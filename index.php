<?php get_header(); ?>

<!-- main content wrapper -->

<main class="content-wrap">

    <div class="container">

        <div class="row py-5">

            <!-- article index wrapper -->

            <div class="index-wrap col">

                <?php if ( ! is_home() ) { ?>

                    <h1><?php the_archive_title(); ?></h1>

                <?php } else { ?>

                    <h1><?php bloginfo('description'); ?></h1>

                <?php } ?>

                <hr class="mb-5">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <article <?php post_class(); ?> >

                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <p><?php the_time('j M, Y'); ?> - <?php the_category(', '); ?></p>

                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('sb_single', array( 'class' => 'img-fluid mb-3', 'alt' => get_the_title() )); ?>
                        </a>

                        <div><?php the_excerpt(); ?></div>

                    </article>

                    <hr class="my-4">
                                               
                <?php endwhile; ?>

                    <div class="index-post-pager nav">
                
                        <?php global $wp_query; $big = 999999999; // need an unlikely integer

                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages,
                            'prev_next' => true,
                            'prev_text' => esc_html__('« Previous', 'sb-base-theme'),
                            'next_text' => esc_html__('Next »', 'sb-base-theme'),
                        ));
                        
                        ?>

                    </div>
            
                <?php else : ?>

                    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'sb-base-theme'); ?></p>

                <?php endif; ?>
            
            </div>

            <?php get_sidebar(); ?>

        </div>

    </div>
           
</main>

<?php get_footer();