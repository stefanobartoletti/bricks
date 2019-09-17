<?php get_header(); ?>

<!-- main content wrapper -->

<main class="content-wrap">

    <?php while ( have_posts() ) : the_post(); ?>
    
    <div class="container">

        <div class="row py-5">

            <!-- blog post wrapper -->

            <div class="article-wrap col">       

                <?php get_template_part( 'templates/elements/breadcrumbs', '' ); ?>
                

                <?php if (is_file(get_theme_file_path('templates/elements/socialshare-copy.php'))) {

                    get_template_part( 'templates/elements/socialshare', 'copy' );
                
                } ?>

                <article <?php post_class(); ?> >

                    <h1><?php the_title(); ?></h1>

                    <p><?php the_author(); ?> - <?php the_time('j M, Y'); ?></p>

                    <p><?php the_category(', '); ?> - <?php the_tags('', ', ', ''); ?></p>
                    
                    <?php the_post_thumbnail('sb_single', array( 'class' => 'img-fluid', 'alt' => get_the_title() )); ?>

                    <div><?php the_content(); ?></div>

                    <?php wp_link_pages('pagelink=Page %'); ?>

                </article>

                <?php get_template_part( 'templates/elements/socialshare', '' ); ?>

                <nav>
                    <?php previous_post_link(); ?> | <?php next_post_link(); ?>
                </nav>
                    
                <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
            
            </div>

            <?php get_sidebar(); ?>

        </div>

    </div>
  
    <?php endwhile ?>

</main>

<?php get_footer();