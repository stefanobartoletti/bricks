<?php

if(! function_exists('sb_styles_scripts')) {

    function sb_styles_scripts() {

        // CSS

        // wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');

        // wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Muli:400,700');

        wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');

        wp_enqueue_style('sb-custom-css', get_template_directory_uri() .'/dist/css/style.min.css');

        // JS

        wp_enqueue_script('sb-bootstrap-bundle-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js', array('jquery'), null, true );

        if ( is_singular() && comments_open() && get_option('thread_comments') ) { wp_enqueue_script('comment-reply'); }

        wp_enqueue_script('sb-custom-js', get_template_directory_uri() .'/dist/js/scripts.min.js', array('jquery'), null, true );

    }

}

add_action('wp_enqueue_scripts', 'sb_styles_scripts');

?>