<?php get_header() ?>

<!-- main content wrapper -->

<main class="content-wrap">

    <?php while ( have_posts() ) : the_post(); ?>

    <article <?php post_class(); ?> >

        <?php if (has_post_thumbnail()) { ?>

        <div class="page-header jumbotron jumbotron-fluid mb-0" style="background: linear-gradient(rgba(0,0,0, 0.1), rgba(0,0,0, 1)), url(<?php the_post_thumbnail_url('sb_big'); ?>); background-size: cover; background-position: center center">

            <div class="container py-5 text-center text-light">

                <h1 class="display-4"><?php the_title(); ?></h1>

            </div>

        </div>

        <?php } ?>

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