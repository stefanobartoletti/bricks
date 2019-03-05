<?php get_header() ?>

<!-- main content wrapper -->

<main class="content-wrap">

    <?php while ( have_posts() ) : the_post(); ?>

    <article <?php post_class(); ?> >

        <?php if (has_post_thumbnail()) {

            get_template_part( 'template-parts/sections/pageheader', '' );

        } ?>

        <div class="container">

            <div class="row py-5 justify-content-center">

                <div class="col-sm-8">

                    <?php if (! has_post_thumbnail() ) { ?>

                    <h1><?php the_title(); ?></h1>

                    <?php } ?>

                    <div><?php the_content(); ?></div>

                </div>

            </div>

        </div>

    </article>

    <?php endwhile ?>

</main>

<?php get_footer() ?>