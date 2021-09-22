<?php

/**
 * Preventing WP to load unnecessary stuff
 * https://perfmatters.io/features/
 * https://orbitingweb.com/blog/remove-unnecessary-tags-wp-head/
 * https://kinsta.com/knowledge_categories/general-wordpress/
 */

add_action( 'init', 'brk_disable_gutenberg' );        // https://metabox.io/disable-gutenberg-without-using-plugins/
add_action( 'init', 'brk_disable_emojis' );           // https://wordpress.stackexchange.com/q/185577/
add_action( 'init', 'brk_disable_oembed' );           // https://wordpress.stackexchange.com/q/211467/
// add_action('init', 'brk_disable_query_strings');    // https://stackoverflow.com/q/38288476/
add_action( 'wp_enqueue_scripts', 'brk_jquery_footer' );    // https://wordpress.stackexchange.com/a/173605/
add_action( 'init', 'brk_disable_head_links' );


function brk_disable_gutenberg() {
	function brk_disable_gutenberg_scripts() {
		wp_dequeue_style( 'wp-block-library' );
	}
	add_action( 'wp_enqueue_scripts', 'brk_disable_gutenberg_scripts' );
	add_filter( 'use_block_editor_for_post', '__return_false' ); // Disables the block editor for editing posts.
	add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' ); // Disables the block editor from managing widgets in the Gutenberg plugin.
	add_filter( 'use_widgets_block_editor', '__return_false' ); // Disables the block editor from managing widgets.
}

function brk_disable_emojis() {
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
	add_filter( 'emoji_svg_url', '__return_false' );
	function disable_emojicons_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}
}

function brk_disable_oembed() {
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
	add_filter( 'embed_oembed_discover', '__return_false' );
	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
	function disable_embeds_rewrites( $rules ) {
		foreach ( $rules as $rule => $rewrite ) {
			if ( false !== strpos( $rewrite, 'embed=true' ) ) {
				unset( $rules[ $rule ] );
			}
		}
		return $rules;
	}
}

function brk_disable_query_strings() {
	function rm_query_string( $src ) {
		$parts = explode( '?ver', $src );
		return $parts[0];
	}
	if ( ! is_admin() ) {
		add_filter( 'script_loader_src', 'rm_query_string', 15, 1 );
		add_filter( 'style_loader_src', 'rm_query_string', 15, 1 );
	}
}

function brk_jquery_footer() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, $theme_version, true );
}


function brk_disable_head_links() {

	// Disable XML-RPC, RSD, WLW links // https://wordpress.stackexchange.com/q/219181/
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	add_filter( 'xmlrpc_enabled', '__return_false' );

	// Disable shortlink // https://wordpress.stackexchange.com/q/288089/
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );

	// Disable generator (WP version) // https://stackoverflow.com/q/16335347/
	remove_action( 'wp_head', 'wp_generator' );

	// Disable recent comments style // https://wordpress.stackexchange.com/q/289440/
	add_filter( 'show_recent_comments_widget_style', '__return_false' );

}
