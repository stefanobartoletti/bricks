<?php get_header(); ?>

<main id="content-wrap">

    <?php while ( have_posts() ) : the_post();

        if (has_post_thumbnail()) {

            get_template_part( 'templates/sections/pageheader', '' );

        } ?>

        <div class="container">

            <div class="row">

                <div class="col">

                    <?php get_template_part( 'templates/elements/breadcrumbs', '' ); ?>

                </div>

            </div>
        
            <div class="row py-5 justify-content-center">

                <div class="col-sm-8">

                    <?php get_template_part( 'templates/content/page', '' );

                    if ( comments_open() || get_comments_number() ) {
                        comments_template(); }
                    ?>

                </div>

            </div>
            
        </div>

    <?php endwhile ?>

</main> <!-- #content-wrap -->

<?php get_footer();