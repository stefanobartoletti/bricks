<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5 border-bottom' ); ?>>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<p><?php the_time( get_option( 'date_format' ) ); ?> - <?php the_category( ', ' ); ?></p>

	<a href="<?php the_permalink(); ?>">
		<?php
		the_post_thumbnail(
			'brk_single',
			array(
				'class' => 'img-fluid mb-3',
				'alt' => get_the_title(),
			)
		);
		?>
	</a>

	<div><?php the_excerpt(); ?></div>

</article> <!-- #post-<?php the_ID(); ?> -->
