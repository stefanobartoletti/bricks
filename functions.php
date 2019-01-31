<?php

/* Theme setup
----------------------------------------------------------------------------------------*/

if (! function_exists('sb_setup_theme')) {

    function sb_setup_theme() {

        // basic theme features

        add_theme_support('post-thumbnails');
   
        add_theme_support('custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        ));
        
        add_theme_support('automatic-feed-links');

        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
        
        add_theme_support('title-tag');

        // custom image sizes

        add_image_size('sb_big', 1400, 800, true);
        add_image_size('sb_square', 600, 600, true);
        add_image_size('sb_single', 800, 500, true);

        // Set max content width

        if (! isset($content_width)) { $content_width = 1400;}

        // register navigation menus

        register_nav_menus(array(
            'header' => esc_html__('Header Menu', 'sb-base-theme'),
        ));

        // load translations
        
        load_theme_textdomain( 'sb-base-theme', get_template_directory().'/languages' );

    }

}

add_action('after_setup_theme', 'sb_setup_theme');

// register sidebars

if(! function_exists('sb_sidebars')) {

    function sb_sidebars() {

        register_sidebar(array(
            'name' =>  esc_html__('Right Sidebar', 'sb-base-theme'),
            'id' => 'right',
            'description' => esc_html__( 'Right Sidebar', 'sb-base-theme' ),
            'before_widget' => '<div class="widget mb-5 %2$s clearfix">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

    }

}

add_action('widgets_init', 'sb_sidebars');




/* Include assets
----------------------------------------------------------------------------------------*/

require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';


/* Include CSS & JavaScript
----------------------------------------------------------------------------------------*/

if(! function_exists('sb_styles_scripts')) {

    function sb_styles_scripts() {

      wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');

      wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Muli:400,700');

      wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');

      wp_enqueue_style('sb-custom-css', get_template_directory_uri() .'/css/style.min.css');

      wp_enqueue_script('sb-bootstrap-bundle-js', '//stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js', array('jquery'), null, true );

      if ( is_singular() && comments_open() && get_option('thread_comments') ) { wp_enqueue_script('comment-reply'); }

      wp_enqueue_script('sb-custom-js', get_template_directory_uri() .'/js/script.min.js', array('jquery'), null, true );

    }

}

add_action('wp_enqueue_scripts', 'sb_styles_scripts');


?>