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

        add_theme_support('customize-selective-refresh-widgets');

        // custom image sizes

        require_once get_template_directory() . '/functions/imagesizes.php';

        // Set max content width

        if (! isset($content_width)) { $content_width = 1400;}

        // register navigation menus

        require_once get_template_directory() . '/functions/navmenus.php';

        // load translations
        
        load_theme_textdomain( 'sb-base-theme', get_template_directory().'/languages' );

    }

}

add_action('after_setup_theme', 'sb_setup_theme');


/* Register sidebars
----------------------------------------------------------------------------------------*/

require_once get_template_directory() . '/functions/sidebars.php';


/* Include assets
----------------------------------------------------------------------------------------*/

require_once get_template_directory() . '/assets/navwalker/class-wp-bootstrap-navwalker.php';


/* Include CSS & JavaScript
----------------------------------------------------------------------------------------*/

require_once get_template_directory() . '/functions/cssjs.php';


/* Customizer options
----------------------------------------------------------------------------------------*/

require_once get_template_directory() . '/functions/customizer.php';


/* Meta tags
----------------------------------------------------------------------------------------*/

// Chrome theme color meta tag

function sb_chrome_theme_meta() {
    
    if( get_theme_mod('sb_chrome_theme', '')) {
         
        echo '<meta name="theme-color" content="', get_theme_mod( 'sb_chrome_theme', '' ), '">';

    }

}

add_action('wp_head', 'sb_chrome_theme_meta');


?>
