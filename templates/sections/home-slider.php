<div id="carousel-slider" class="carousel slide" data-bs-ride="carousel">

	<div class="carousel-inner">

		<?php

		$brk_slidecount = 0;

		// WP Query
		$brk_slider_query = new WP_Query( $args );

		// WP Loop
		while ( $brk_slider_query->have_posts() ) :
			$brk_slider_query->the_post();

			$brk_slidecount++;

			?>

		<div class="carousel-item 
			<?php
			if ( 1 == $brk_slidecount ) {
				echo 'active'; }
			?>
		">

			<img class="d-block w-100" src="<?php the_post_thumbnail_url( 'brk_big' ); ?>" alt="<?php brk_thumbnail_alt(); ?>" loading="lazy">

			<div class="carousel-caption">
				<h2><?php the_title(); ?></h2>
				<div class="d-none d-md-block"><?php the_excerpt(); ?></div>
				<a class="btn btn-light" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'bricks' ); ?></a>
			</div>

		</div>

			<?php
		endwhile;

		// WP Query Reset
		wp_reset_query();
		wp_reset_postdata();
		?>
		
	</div>

	<a class="carousel-control-prev" data-bs-target="#carousel-slider" role="button" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>

	<a class="carousel-control-next" data-bs-target="#carousel-slider" role="button" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>

</div>
