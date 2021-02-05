<?php

/**
 * Preventing WP to load unnecessary stuff
 * https://perfmatters.io/features/
 * https://orbitingweb.com/blog/remove-unnecessary-tags-wp-head/
 * https://kinsta.com/knowledge_categories/general-wordpress/
 */

if(! function_exists('brk_cleanup_init')) {

    function brk_cleanup_init() {  
        
        function brk_cleanup_scripts() { 
            // Disable Gutenberg CSS // https://stackoverflow.com/q/52277629/
            wp_dequeue_style('wp-block-library');
            
            // Remove dashicons in frontend for unauthenticated users // https://wordpress.stackexchange.com/a/281482/
            if ( ! is_user_logged_in() ) {
                wp_deregister_style( 'dashicons' );
            }

            // Jquery from footer, remove migrate // https://wordpress.stackexchange.com/a/173605/
            wp_deregister_script('jquery');
            wp_enqueue_script('jquery', includes_url('/js/jquery/jquery.js'), false, null, true);
        }
        add_action('wp_enqueue_scripts', 'brk_cleanup_scripts');

        // Disable Gutenberg and use Classic Editor // https://metabox.io/disable-gutenberg-without-using-plugins/
        add_filter('use_block_editor_for_post', '__return_false');
        
        // Disable XML-RPC, RSD, WLW links // https://wordpress.stackexchange.com/q/219181/   
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        // add_filter('xmlrpc_enabled’, ‘__return_false');
        
        // Disable shortlink // https://wordpress.stackexchange.com/q/288089/
        remove_action('wp_head', 'wp_shortlink_wp_head');
        
        // Disable generator (WP version) // https://stackoverflow.com/q/16335347/
        remove_action('wp_head', 'wp_generator');

        // Disable recent comments style // https://wordpress.stackexchange.com/q/289440/
        add_filter( 'show_recent_comments_widget_style', '__return_false');

        // Disable JSON oEmbed // https://wordpress.stackexchange.com/q/211467/
        remove_action('wp_head', 'rest_output_link_wp_head', 10);
        remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
        remove_action('rest_api_init', 'wp_oembed_register_route');
        add_filter('embed_oembed_discover', '__return_false');
        remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
        remove_action('wp_head', 'wp_oembed_add_discovery_links');
        remove_action('wp_head', 'wp_oembed_add_host_js');
        add_filter('rewrite_rules_array', 'disable_embeds_rewrites');
        function disable_embeds_rewrites( $rules ) {
            foreach ( $rules as $rule => $rewrite ) {
                if ( false !== strpos( $rewrite, 'embed=true' ) ) {
                    unset( $rules[ $rule ] );
                }
            }
            return $rules;
        }

        // Disable Emojis // https://wordpress.stackexchange.com/q/185577/
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');
        add_filter('emoji_svg_url', '__return_false');
        function disable_emojicons_tinymce( $plugins ) {
            if ( is_array( $plugins ) ) {
              return array_diff( $plugins, array( 'wpemoji' ) );
            } else {
              return array();
            }
        }

        // Remove query strings // https://stackoverflow.com/q/38288476/
        function rm_query_string($src){   
            $parts = explode('?ver', $src);
            return $parts[0];
        }       
        if ( !is_admin() ) {
            add_filter('script_loader_src', 'rm_query_string', 15, 1);
            add_filter('style_loader_src', 'rm_query_string', 15, 1);
        }
        
    }

}

add_action('init', 'brk_cleanup_init');