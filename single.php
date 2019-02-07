<?php get_header() ?>

<!-- main content wrapper -->

<main class="content-wrap">

    <?php while ( have_posts() ) : the_post(); ?>
    
    <div class="container">

        <div class="row">

            <!-- blog post wrapper -->

            <div class="article-wrap col">

                <article <?php post_class(); ?> >

                    <h1><?php the_title(); ?></h1>

                    <p><?php the_author(); ?> - <?php the_time('j M, Y'); ?></p>

                    <p><?php the_category(', '); ?> - <?php the_tags('', ', ', ''); ?></p>
                    
                    <?php the_post_thumbnail('sb_single', array( 'class' => 'img-fluid', 'alt' => get_the_title() )); ?>

                    <div><?php the_content(); ?></div>

                    <?php wp_link_pages('pagelink=Page %'); ?>

                </article>
              
                <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
            
            </div>

            <?php get_sidebar() ?>

        </div>

    </div>
  
    <?php endwhile ?>

</main>

<?php get_footer() ?>