<?php

// --- Branding section ---

$wp_customize -> add_section ( 'sb_branding', array(
    'title' => __('Branding', 'sb-base-theme'),
    'description' => __('Branding options', 'sb-base-theme'),
    'priority' => 20,
    'panel'  => 'sb_options_panel',
    )
);

// --- Branding settings ---

    // Chrome mobile theme color

    $wp_customize -> add_setting ( 'sb_chrome_theme', array( 'default' => '' ) );
    $wp_customize -> add_control ( new WP_Customize_Color_Control ( $wp_customize, 'sb_chrome_theme', array(
        'label' => __('Chrome theme color', 'sb-base-theme'),
        'description' => __('Tab color in Chrome for Android', 'sb-base-theme'),
        'section' => 'sb_branding',
        'settings' => 'sb_chrome_theme',
    )));