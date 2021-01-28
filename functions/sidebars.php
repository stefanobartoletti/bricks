<?php

/**
 * https://developer.wordpress.org/themes/functionality/sidebars/
 * 
 */

if(! function_exists('sb_sidebars')) {

    function sb_sidebars() {

        register_sidebar(array(
            'name' =>  esc_html__('Main Sidebar', 'bricks'),
            'id' => 'sidebar-main',
            'description' => esc_html__('Main Sidebar', 'bricks'),
            'before_widget' => '<div class="widget mb-4 %2$s clearfix">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="mb-4">',
            'after_title' => '</h3>',
        ));

        register_sidebar(array(
            'name' =>  esc_html__('Footer Widgets', 'bricks'),
            'id' => 'sidebar-footer',
            'description' => esc_html__('Footer Widgets', 'bricks'),
            'before_widget' => '<div class="widget col-md mb-4 %2$s clearfix">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="h4 mb-3">',
            'after_title' => '</h3>',
        ));

    }

}

add_action('widgets_init', 'sb_sidebars');