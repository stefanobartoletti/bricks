<ul class="socialicons navbar-nav flex-row">

	<?php

	// --- Single icon -----

	foreach ( brk_socialicons() as $key => $value ) {

		if ( get_field( 'social_' . $key, 'option' ) ) { ?>

			<li class="socialicon nav-item">
				<a class="nav-link p-2" href="<?php echo esc_attr( get_field( 'social_' . $key, 'option' ) ); ?>" title="<?php echo esc_attr( $value['social-name'] ); ?>" target="_blank">
					<i class="<?php echo esc_attr( $value['icon-style'] ) . ' ' . esc_attr( $value['icon-name'] ); ?>"></i>
				</a>
			</li>
	
			<?php
		};

	};

	?>

</ul>
