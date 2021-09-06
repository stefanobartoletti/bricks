<?php get_header(); ?>

<main id="content-wrapper">

	<div class="container">

		<?php brk_breadcrumbs(); ?>

		<div class="row py-5">

			<div id="loop-wrapper" class="col">
				   
				<h1 class="mb-5 border-bottom">
					<?php
					if ( is_home() ) {

						bloginfo( 'description' );

					} elseif ( is_search() ) {

						esc_html_e( 'Results for: ', 'bricks' );
						the_search_query();

					} else {

						the_archive_title();

					}
					?>
				</h1>
			
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();

						get_template_part( 'templates/content/loop', '' );

					endwhile;

					the_posts_pagination(
						array(
							'mid_size'  => 2,
							'prev_text' => esc_html__( '&laquo; Previous', 'bricks' ),
							'next_text' => esc_html__( 'Next &raquo;', 'bricks' ),
						)
					);

				else :

					get_template_part( 'templates/content/loop', 'none' );

				endif;
				?>
			
			</div> <!-- #loop-wrapper -->

			<?php get_sidebar(); ?>

		</div>

	</div>
		   
</main> <!-- #content-wrapper -->

<?php
get_footer();
