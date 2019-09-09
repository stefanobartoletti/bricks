<?php get_header(); ?>

<!-- main content wrapper -->

<main class="content-wrap">

    <div class="container">

        <div class="row py-5 justify-content-center">

            <article class="col-sm-8">

                <h1 class="mb-5 text-center">
                    <?php esc_html_e( 'Oops, that page can&#39;t be found', 'sb-base-theme' ); ?>
                </h1>

                <h2 class="mb-5 text-center">
                    <?php esc_html_e( 'Error 404', 'sb-base-theme' ); ?>
                </h2>

            </article>

        </div>

    </div>

</main>

<?php get_footer();