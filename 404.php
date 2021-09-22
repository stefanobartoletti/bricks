<?php get_header(); ?>

<main id="content-wrapper">

	<div class="container">

		<div class="row py-5 justify-content-center">

			<div class="col-sm-8">

				<h1 class="mb-5 text-center">
					<?php esc_html_e( 'Oops, that page can&#39;t be found', 'bricks' ); ?>
				</h1>

				<h2 class="mb-5 text-center">
					<?php esc_html_e( 'Error 404', 'bricks' ); ?>
				</h2>

			</div>

		</div>
		
	</div>

</main> <!-- #content-wrapper -->

<?php
get_footer();
