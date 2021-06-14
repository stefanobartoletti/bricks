<?php

/**
 * https://developer.wordpress.org/themes/basics/including-css-javascript/
 * 
 */

if(! function_exists('brk_styles_scripts')) {

    function brk_styles_scripts() {

        $themeVersion = wp_get_theme()->get( 'Version' );

        // --- CSS ---

        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap');

        wp_enqueue_style('brk-styles', get_template_directory_uri() .'/dist/css/style.min.css', false, $themeVersion, 'all' );

        // --- JS ---
               
        wp_enqueue_script('fontawesome', get_template_directory_uri() .'/dist/js/fa5.min.js', false, $themeVersion, true );
        
        wp_enqueue_script('bs-native-bundle', get_template_directory_uri() .'/dist/js/bsnative.min.js', false, $themeVersion, true );

        if ( is_singular() && comments_open() && get_option('thread_comments') ) { wp_enqueue_script('comment-reply'); }

        wp_enqueue_script('brk-scripts', get_template_directory_uri() .'/dist/js/scripts.min.js', false, $themeVersion, true );

    }

}

add_action('wp_enqueue_scripts', 'brk_styles_scripts');


// Disable this action if not loading Google Fonts from their external server

function brk_google_fonts_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.gstatic.com/">'."\n";
}
add_action( 'wp_head', 'brk_google_fonts_preconnect', 7 );