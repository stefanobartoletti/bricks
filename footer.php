	</div> <!-- #page-wrapper -->

	<footer id="footer-wrapper" class="bg-dark text-light">

		<?php

		// get_template_part( 'templates/footer/footer', 'columns' );
		get_template_part( 'templates/footer/footer', 'simple' );
		get_template_part( 'templates/footer/footer', 'copyright' );

		?>

	</footer> <!-- #footer-wrapper -->

	<?php

	get_template_part( 'templates/components/backtotop', '' );

	wp_footer();

	?>

</div> <!-- #site-wrapper -->

</body>
