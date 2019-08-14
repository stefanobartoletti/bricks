<?php

/**
 * https://developer.wordpress.org/themes/functionality/navigation-menus/
 * 
 */

if (! function_exists('sb_navmenus')) {

    function sb_navmenus() {

        register_nav_menus(array(
            'header' => esc_html__('Header Menu', 'sb-base-theme'),
            'footer' => esc_html__('Footer Menu', 'sb-base-theme'),
        ));

    }

}

add_action('after_setup_theme', 'sb_navmenus');