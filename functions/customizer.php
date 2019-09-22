<?php

/**
 * https://developer.wordpress.org/themes/customize-api/customizer-objects/
 * 
 */

// --- Customizer setup ---

function sb_customizer_options($wp_customize) {

    $wp_customize->add_panel( 'sb_options_panel', array(
        'title' => __('[sb] Options', 'sb-base-theme'),
        'description' => __('[sb] Options', 'sb-base-theme'),
        'priority' => 0,
    ) );

    // Branding section
    require_once get_template_directory() . '/functions/customizer/branding.php';

    // Contacts section
    require_once get_template_directory() . '/functions/customizer/contacts.php';

    // Social section
    require_once get_template_directory() . '/functions/customizer/social.php';

}

add_action( 'customize_register', 'sb_customizer_options' );

// --- Customizer actions ---

function sb_head_meta() {
    
    if( get_theme_mod('sb_chrome_theme')) {
          
        echo '<meta name="theme-color" content="', get_theme_mod('sb_chrome_theme'), '">';

    }

}

add_action('wp_head', 'sb_head_meta');