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

        add_theme_support( 'customize-selective-refresh-widgets' );

        // custom image sizes

        add_image_size('sb_big', 1400, 800, true);
        add_image_size('sb_square', 400, 400, true);
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
            'id' => 'sidebar-r',
            'description' => esc_html__( 'Sidebar to the right of the main content', 'sb-base-theme' ),
            'before_widget' => '<div class="widget mb-4 %2$s clearfix">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="mb-4">',
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

      wp_enqueue_script('sb-custom-js', get_template_directory_uri() .'/js/scripts.min.js', array('jquery'), null, true );

    }

}

add_action('wp_enqueue_scripts', 'sb_styles_scripts');


/* Customizer options
----------------------------------------------------------------------------------------*/

function sb_customizer_options($wp_customize) {

    //* Branding section 

    $wp_customize -> add_section ( 'sb_branding', array(
        'title' => __('Branding', 'sb-base-theme'),
        'description' => __('Branding options', 'sb-base-theme'),
        'priority' => 20,
        )
    );

        // Chrome theme color 

        $wp_customize -> add_setting ( 'sb_chrome_theme', array( 'default' => '' ) );
        $wp_customize -> add_control ( new WP_Customize_Color_Control ( $wp_customize, 'sb_chrome_theme', array(
            'label' => __('Chrome theme color', 'sb-base-theme'),
            'description' => __('Tab color in Chrome for Android', 'sb-base-theme'),
            'section' => 'sb_branding',
            'settings' => 'sb_chrome_theme',
        )));

}

add_action( 'customize_register', 'sb_customizer_options' );


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
