<?php

// WP Query
$brk_cta_query = new WP_Query( $args );

// WP Loop
while ( $brk_cta_query->have_posts() ) :
	$brk_cta_query->the_post();

	?>

<div class="has-img-background py-5">

	<img class="is-background" src="<?php the_post_thumbnail_url( 'brk_big' ); ?>" alt="<?php the_title(); ?>">

	<div class="container py-5 text-center text-light">
		
		<div class="row justify-content-center">
			
			<div class="col-sm col-md-8 col-lg-6">

				<h2><?php the_title(); ?></h2>
				<div class="lead my-3"><?php the_excerpt(); ?></div>
				<a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button"><?php esc_html_e( 'Read more', 'bricks' ); ?></a>
			
			</div>

		</div>

	</div>

</div>

	<?php
endwhile;

// WP Query Reset
wp_reset_query();
wp_reset_postdata();
