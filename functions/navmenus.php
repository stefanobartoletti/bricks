<?php

/**
 * https://developer.wordpress.org/themes/functionality/navigation-menus/
 * 
 */

if (! function_exists('sb_navmenus')) {

    function sb_navmenus() {

        register_nav_menus(array(
            'header' => esc_html__('Header Menu', 'bricks'),
            'footer' => esc_html__('Footer Menu', 'bricks'),
        ));

    }

}

add_action('after_setup_theme', 'sb_navmenus');