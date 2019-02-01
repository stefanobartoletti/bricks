<?php get_header() ?>

<main class="content-wrap">

    <?php while ( have_posts() ) : the_post(); ?>

    <article <?php post_class(); ?> >

        <?php if (has_post_thumbnail()) { ?>

        <?php $sb_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'sb_big' ); ?>

        <div class="page-header jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0,0,0, 0.1), rgba(0,0,0, 1)), url(<?php echo $sb_thumbnail[0]; ?>); background-size: cover; background-position: center center">

            <div class="container text-center text-light">

                <h1 class="display-4">
                    <?php the_title(); ?>
                </h1>

            </div>

        </div>

        <?php } ?>

        <div class="container">

            <div class="row">

                <div class="col">

                    <?php if (! has_post_thumbnail() ) { ?>

                    <h1>
                        <?php the_title(); ?>
                    </h1>

                    <?php } ?>

                    <div>
                        <?php the_content(); ?>
                    </div>

                </div>

            </div>

        </div>

    </article>

    <?php endwhile ?>

</main>

<?php get_footer() ?>