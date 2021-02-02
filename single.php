<?php get_header(); ?>

<main id="content-wrap">

    <?php while ( have_posts() ) : the_post(); ?>
    
    <div class="container">

        <?php get_template_part( 'templates/elements/breadcrumbs', '' ); ?>

        <div class="row py-5">

            <div id="article-wrap" class="col">       

                <?php
                
                get_template_part( 'templates/content/single', '' ); 
                
                get_template_part( 'templates/elements/socialshare', '' );
                
                ?>

                <nav class="nav">
                    <?php previous_post_link('<span class="nav-link mr-auto">&laquo; %link</span>');
                        next_post_link('<span class="nav-link ml-auto">%link &raquo;</span>'); ?>
                </nav>
                    
                <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
            
            </div> <!-- #article-wrap -->

            <?php get_sidebar(); ?>

        </div>

    </div>
  
    <?php endwhile ?>

</main> <!-- #content-wrap -->

<?php get_footer();