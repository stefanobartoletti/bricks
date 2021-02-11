<?php

/**
 * https://developer.wordpress.org/themes/basics/including-css-javascript/
 * 
 */

if(! function_exists('brk_styles_scripts')) {

    function brk_styles_scripts() {

        // --- CSS ---

        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Rubik:400,700&display=swap');

        wp_enqueue_style('brk-styles', get_template_directory_uri() .'/dist/css/style.min.css');

        // --- JS ---
               
        wp_enqueue_script('fontawesome', get_template_directory_uri() .'/dist/js/fa5.min.js', false, null, true );
        
        wp_enqueue_script('popper', get_template_directory_uri() .'/dist/js/popper.min.js', false, null, true );

        wp_enqueue_script('bootstrap-native', get_template_directory_uri() .'/dist/js/bootstrap-native.min.js', array('popper'), null, true );

        if ( is_singular() && comments_open() && get_option('thread_comments') ) { wp_enqueue_script('comment-reply'); }

        wp_enqueue_script('brk-scripts', get_template_directory_uri() .'/dist/js/scripts.min.js', false, null, true );

    }

}

add_action('wp_enqueue_scripts', 'brk_styles_scripts');