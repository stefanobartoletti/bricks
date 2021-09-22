<?php

/**
 * https://developer.wordpress.org/themes/basics/including-css-javascript/
 */

if ( ! function_exists( 'brk_styles_scripts' ) ) {

	function brk_styles_scripts() {

		$theme_version = wp_get_theme()->get( 'Version' );

		// --- CSS ---

		wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap', false, $theme_version, 'all' );

		wp_enqueue_style( 'brk-styles', get_template_directory_uri() . '/dist/css/style.min.css', false, $theme_version, 'all' );

		// --- JS ---

		wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/dist/js/fa5.min.js', false, $theme_version, true );

		wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/dist/js/bootstrap.min.js', false, $theme_version, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' ); }

		wp_enqueue_script( 'brk-scripts', get_template_directory_uri() . '/dist/js/scripts.min.js', false, $theme_version, true );

	}
}

add_action( 'wp_enqueue_scripts', 'brk_styles_scripts' );


// Disable this action if not loading Google Fonts from their external server

function brk_google_fonts_preconnect() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'brk_google_fonts_preconnect', 7 );
