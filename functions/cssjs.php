<?php

/**
 * https://developer.wordpress.org/themes/basics/including-css-javascript/
 * 
 */

if(! function_exists('sb_styles_scripts')) {

    function sb_styles_scripts() {

        // --- CSS ---

        // wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');

        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Rubik:400,700&display=swap');

        // wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');
        
        // wp_enqueue_style('aos', '//cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');

        wp_enqueue_style('sb-styles', get_template_directory_uri() .'/dist/css/style.min.css');

        // --- JS ---
               
        wp_enqueue_script('fontawesome', get_template_directory_uri() .'/dist/js/fa5.min.js', false, null, true );

        wp_enqueue_script('bootstrap-bundle', '//stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js', array('jquery'), null, true );

        // wp_enqueue_script('aos', '//cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', false, null, true );

        if ( is_singular() && comments_open() && get_option('thread_comments') ) { wp_enqueue_script('comment-reply'); }

        wp_enqueue_script('sb-scripts', get_template_directory_uri() .'/dist/js/scripts.min.js', false, null, true );

    }

}

add_action('wp_enqueue_scripts', 'sb_styles_scripts');