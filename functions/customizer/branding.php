<?php

// --- Branding section ---

$wp_customize -> add_section ( 'sb_branding', array(
    'title' => __('Branding', 'bricks'),
    'description' => __('Branding options', 'bricks'),
    'priority' => 20,
    'panel'  => 'sb_options_panel',
    )
);

// --- Branding settings ---

    // Chrome mobile theme color

    $wp_customize -> add_setting ( 'sb_chrome_theme', array(
        'default' => '',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize -> add_control ( new WP_Customize_Color_Control ( $wp_customize, 'sb_chrome_theme', array(
        'label' => __('Chrome theme color', 'bricks'),
        'description' => __('Tab color in Chrome for Android', 'bricks'),
        'section' => 'sb_branding',
        'settings' => 'sb_chrome_theme',
    )));