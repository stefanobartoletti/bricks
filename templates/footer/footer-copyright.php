<div id="footer-copyright" class="navbar navbar-expand navbar-dark">
			   
	<div class="container flex-column flex-md-row small">
			   
		<span class="navbar-text">

			<?php if ( class_exists( 'ACF' ) ) {

					$company = get_field( 'contacts_company', 'option' );
					$address1 = get_field( 'contacts_address_1', 'option' );
					$address2 = get_field( 'contacts_address_2', 'option' );
					$mapurl = get_field( 'contacts_map_url', 'option' );
					$phone = get_field( 'contacts_phone', 'option' );
					$email = get_field( 'contacts_email', 'option' );
					$idnumber = get_field( 'contacts_id_number', 'option' );
					$vatnumber = get_field( 'contacts_vat_number', 'option' );

					echo '&#169; ' . esc_html( gmdate( 'o' ) );
					echo $company ? ' | ' . esc_html( $company ) : '';
					echo $address1 ? ' | ' . esc_html( $address1 ) : '';
					echo $address2 ? ', ' . esc_html( $address2 ) : '';
					echo $idnumber ? ' | c.f. ' . esc_html( $idnumber ) : '';
					echo $vatnumber ? ' | p.i. ' . esc_html( $vatnumber ) : '';

			} ?>
			
		</span>

		<span id="brk-signature" class="navbar-text ms-md-auto">
			<a class="text-white-50" href="<?php echo esc_attr( wp_get_theme()->get( 'ThemeURI' ) ); ?>" target="_blank">
				Made with <img src="<?php echo esc_attr( get_template_directory_uri() . '/dist/img/logo-small.svg' ); ?>" alt="Bricks WordPress Starter Theme Logo"> Bricks
			</a>
		</span>
   
	</div>
	
</div> <!-- #footer-copyright --> 


