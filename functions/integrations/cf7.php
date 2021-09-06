<?php

/**
 * Integration with Contact Form 7
 */

// Load CSS & JS only when needed
// https://contactform7.com/loading-javascript-and-stylesheet-only-when-it-is-necessary/
// https://orbitingweb.com/blog/prevent-cf7-from-loading-css-js/

function brk_cf7_styles_scripts() {

	wp_dequeue_script( 'contact-form-7' );
	wp_dequeue_style( 'contact-form-7' );

	$has_cf7_form = is_front_page() || is_page( array( 'contacts' ) );

	if ( $has_cf7_form ) {

		wp_enqueue_script( 'contact-form-7' );
		wp_enqueue_style( 'contact-form-7' );

	}

}

add_action( 'wp_enqueue_scripts', 'brk_cf7_styles_scripts' );
