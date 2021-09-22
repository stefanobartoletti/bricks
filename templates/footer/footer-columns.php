<div id="footer-columns" class="navbar navbar-expand navbar-dark">

	<div class="container mt-5">
		
		<div class="row w-100">  

			<div class="col-md-3 mb-4">
				
				<?php if ( has_custom_logo() ) {

					the_custom_logo();

				} else { ?>

					<a href="<?php echo esc_url_raw( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>

				<?php } ?>
	
			</div>

			<div class="col-md-3 mb-4">

				<h3 class="h4 mb-4"><?php esc_html_e( 'Contacts', 'bricks' ); ?></h3>

				<ul class="list-unstyled navbar-nav flex-column">

					<?php
					if ( class_exists( 'ACF' ) ) {

						$company = get_field( 'contacts_company', 'option' );
						$address1 = get_field( 'contacts_address_1', 'option' );
						$address2 = get_field( 'contacts_address_2', 'option' );
						$mapurl = get_field( 'contacts_map_url', 'option' );
						$phone = get_field( 'contacts_phone', 'option' );
						$email = get_field( 'contacts_email', 'option' );
						$idnumber = get_field( 'contacts_id_number', 'option' );
						$vatnumber = get_field( 'contacts_vat_number', 'option' );

						if ( $address1 ) {
							?>

							<li class="d-flex mb-3">
								<div class="flex-shrink-0">
									<i class="fas fa-map-marker-alt fa-fw mt-1 nav-link p-0"></i>
								</div>
								<div class="flex-grow-1 ms-3">
									<?php
									echo $mapurl ? '<a class="nav-link p-0" href="' . esc_html( $mapurl ) . '" target="_blank">' : '<p>';
									echo $company ? esc_html( $company ) . ', <br>' : '';
									echo $address1 ? esc_html( $address1 ) : '';
									echo $address2 ? ', <br>' . esc_html( $address2 ) : '';
									echo $mapurl ? '</a>' : '<p>';
									?>
								</div>
							</li>

						<?php }; if ( $phone ) { ?>

							<li class="d-flex mb-3">
								<div class="flex-shrink-0">
									<i class="fas fa-phone fa-fw mt-1 nav-link p-0"></i>
								</div>
								<div class="flex-grow-1 ms-3">
									<a class="nav-link p-0" href="tel:<?php echo esc_attr( $phone ); ?>"><?php echo esc_html( $phone ); ?></a>
								</div>
							</li>

						<?php }; if ( $email ) { ?>

							<li class="d-flex mb-3">
								<div class="flex-shrink-0">
									<i class="fas fa-envelope fa-fw mt-1 nav-link p-0"></i>
								</div>
								<div class="flex-grow-1 ms-3">
									<a class="nav-link p-0" href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
								</div>
							</li>

						<?php }; ?>

					</ul>

						<?php

						get_template_part( 'templates/components/socialicons', '' );

					} // closes "if ( class_exists('ACF') )"
					?>
				
			</div>

			<div class="col-md-3 mb-4">

				<h3 class="h4 mb-4"><?php esc_html_e( 'Pages', 'bricks' ); ?></h3>

				<?php
				wp_nav_menu(
					array(
						'theme_location'    => 'header',
						'depth'             => 1,
						'container'         => 'nav',
						'container_class'   => 'navbar-nav',
						'container_id'      => '',
						'menu_class'        => 'footer-menu list-unstyled',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					)
				);
				?>

			</div>

			<div class="col-md-3 mb-4">

				<h3 class="h4 mb-4"><?php esc_html_e( 'Privacy', 'bricks' ); ?></h3>

				<?php
				wp_nav_menu(
					array(
						'theme_location'    => 'footer',
						'depth'             => 1,
						'container'         => 'nav',
						'container_class'   => 'navbar-nav',
						'container_id'      => '',
						'menu_class'        => 'footer-menu list-unstyled',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					)
				);
				?>

			</div>

		</div>

	</div>

</div> <!-- #footer-columns -->
