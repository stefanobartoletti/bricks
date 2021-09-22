<?php get_header(); ?>

<main id="content-wrapper">

	<?php
	while ( have_posts() ) :
		the_post();

		if ( has_post_thumbnail() ) {

			get_template_part( 'templates/sections/common', 'pageheader' );

		}
		?>

		<div class="container">

			<?php

			brk_breadcrumbs();

			// Get this page slug
			$slug = $post->post_name;

			// Check if template file exists, set the template to be used
			$template_name = ( is_file( get_theme_file_path( 'templates/content/page-' . $slug . '.php' ) ) ) ? $slug : '';

			get_template_part( 'templates/content/page', $template_name );

			if ( comments_open() || get_comments_number() ) {
				comments_template(); }

			?>
			
		</div>

	<?php endwhile ?>

</main> <!-- #content-wrapper -->

<?php
get_footer();
