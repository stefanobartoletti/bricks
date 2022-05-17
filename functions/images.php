<?php

/**
 * https://developer.wordpress.org/reference/functions/add_image_size/
 * add_image_size( $name:string, $width:integer, $height:integer, $crop:boolean|array )
 * array( 'x_crop_position', 'y_crop_position' )
 * x_crop_position > left center right
 * y_crop_position > top center bottom
 */

if ( ! function_exists( 'brk_image_settings' ) ) {
	function brk_image_settings() {
		add_image_size( 'brk_big', 1400, 800, true );
		add_image_size( 'brk_square', 400, 400, true );
		add_image_size( 'brk_single', 800, 500, true );
		// remove_image_size('large');
		// remove_image_size('thumbnail');
		// remove_image_size('medium');
		// remove_image_size('medium_large');
		remove_image_size( '1536x1536' );
		remove_image_size( '2048x2048' );
	}
}
add_action( 'after_setup_theme', 'brk_image_settings' );


// --- Set image compression value ---
// https://developer.wordpress.org/reference/hooks/jpeg_quality/

// function brk_image_quality() {
// 	return 80;
// }
// add_filter( 'jpeg_quality', 'brk_image_quality' );
