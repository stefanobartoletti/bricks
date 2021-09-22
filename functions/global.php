<?php

/**
 * Custom global functions.
 */

// --- Enable SVG support ---

function brk_svg_upload( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';

	return $mimes;
}
add_filter( 'upload_mimes', 'brk_svg_upload' );

function brk_svg_mimetype( $data = null, $file = null, $filename = null, $mimes = null ) {
	$ext = isset( $data['ext'] ) ? $data['ext'] : '';
	if ( strlen( $ext ) < 1 ) {
		$exploded = explode( '.', $filename );
		$ext      = strtolower( end( $exploded ) );
	}
	if ( 'svg' === $ext ) {
		$data['type'] = 'image/svg+xml';
		$data['ext']  = 'svg';
	} elseif ( 'svgz' === $ext ) {
		$data['type'] = 'image/svg+xml';
		$data['ext']  = 'svgz';
	}

	return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'brk_svg_mimetype', 10, 4 );


// --- Excerpt lenght ---

function brk_excerpt_length( $length ) {
	return 40;
}
// add_filter( 'excerpt_length', 'brk_excerpt_length', 999 );


// --- Thumbnail alt ---

// Echoes the "alt" value of a post thumbnail as inserted in the media gallery

function brk_thumbnail_alt() {
	$brk_thumbnail_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
	echo esc_attr( $brk_thumbnail_alt );
}


// --- Breadcrumbs ---

function brk_breadcrumbs() {

	if ( function_exists( 'yoast_breadcrumb' ) ) {

		// http://yoa.st/breadcrumbs

		yoast_breadcrumb( '<nav class="breadcrumb mt-3">', '</nav>' );

	} elseif ( function_exists( 'rank_math_the_breadcrumbs' ) ) {

		// https://s.rankmath.com/breadcrumbs

		add_filter(
			'rank_math/frontend/breadcrumb/args',
			function( $args ) {
				$args = array(
					'delimiter'   => '&nbsp;&#47;&nbsp;',
					'wrap_before' => '<nav class="breadcrumb mt-3"><span>',
					'wrap_after'  => '</span></nav>',
					'before'      => '',
					'after'       => '',
				);
				return $args;
			}
		);

		rank_math_the_breadcrumbs();

	}

}


// --- Nav Walker attributes fix for Bootstrap 5 ---

function brk_bs5_navwalker_fix( $atts ) {

	if ( array_key_exists( 'data-toggle', $atts ) ) {
		unset( $atts['data-toggle'] );
		$atts['data-bs-toggle'] = 'dropdown';
	}
	return $atts;

}
add_filter( 'nav_menu_link_attributes', 'brk_bs5_navwalker_fix' );
