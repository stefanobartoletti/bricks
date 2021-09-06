<?php get_header(); ?>

<main id="content-wrapper">

	<section id="section-slider">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 3,
		);

		get_template_part( 'templates/sections/home', 'slider', $args );

		?>

	</section> <!-- #section-slider -->

	<section id="section-services">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 3,
		);

		get_template_part( 'templates/sections/home', 'services', $args );

		?>

	</section> <!-- #section-services -->

	<section id="section-cta">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 1,
		);

		get_template_part( 'templates/sections/home', 'cta', $args );

		?>

	</section> <!-- #section-news -->
 
	<section id="section-news">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 3,
		);

		get_template_part( 'templates/sections/home', 'news', $args );

		?>

	</section> <!-- #section-news -->
 
</main> <!-- #content-wrapper -->

<?php
get_footer();
