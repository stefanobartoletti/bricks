<img class="is-background" src='<?php the_post_thumbnail_url( 'brk_big' ); ?>' alt='<?php brk_thumbnail_alt(); ?>' loading="lazy" />

<div class="container d-flex flex-column vh-100 text-center text-light">

	<div class="row justify-content-center my-auto">

		<div class="col-12 text-center">
		
			<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>

			<hr class="border border-light mx-auto mt-0 w-25 opacity-50" />

		</div>

		<div class="col-12 col-md-6">
			
			<p class="h4"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>

		</div>      
	
	</div>

	<div class="row justify-content-center">       
		
		<div class="col">
			
			<div class="mouse-wheel"></div>

		</div>

	</div>

</div>
