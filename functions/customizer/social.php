<?php

// --- Social section ---

$wp_customize -> add_section ( 'sb_social', array(
    'title' => __('Social', 'sb-base-theme'),
    'description' => __('Insert full addresses for Social Network profiles. Only filled fields will be displayed on the site as icons. For better layout, only use about 4~5 of them at most.', 'sb-base-theme'),
    'priority' => 20,
    'panel'  => 'sb_options_panel',
    )
);

    // --- Social settings ---

    // ----- Facebook -----

    $wp_customize -> add_setting ( 'sb_facebook', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_facebook', array(
        'type' => 'url',
        'label' => __('Facebook', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

    // ----- LinkedIn -----

    $wp_customize -> add_setting ( 'sb_linkedin', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_linkedin', array(
        'type' => 'url',
        'label' => __('LinkedIn', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

    // ----- Instagram -----

    $wp_customize -> add_setting ( 'sb_instagram', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_instagram', array(
        'type' => 'url',
        'label' => __('Instagram', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

    // ----- Twitter -----

    $wp_customize -> add_setting ( 'sb_twitter', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_twitter', array(
        'type' => 'url',
        'label' => __('Twitter', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

    // ----- YouTube -----

    $wp_customize -> add_setting ( 'sb_youtube', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_youtube', array(
        'type' => 'url',
        'label' => __('Youtube', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

    // ----- Pinterest -----

    $wp_customize -> add_setting ( 'sb_pinterest', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_pinterest', array(
        'type' => 'url',
        'label' => __('Pinterest', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

    // ----- TripAdvisor -----

    $wp_customize -> add_setting ( 'sb_tripadvisor', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_tripadvisor', array(
        'type' => 'url',
        'label' => __('TripAdvisor', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

    // ----- Telegram -----

    $wp_customize -> add_setting ( 'sb_telegram', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_telegram', array(
        'type' => 'url',
        'label' => __('Telegram', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

    // ----- Behance -----

    $wp_customize -> add_setting ( 'sb_behance', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_behance', array(
        'type' => 'url',
        'label' => __('Behance', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

    // ----- Dribbble -----

    $wp_customize -> add_setting ( 'sb_dribbble', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_dribbble', array(
        'type' => 'url',
        'label' => __('Dribbble', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

    // ----- Flickr -----

    $wp_customize -> add_setting ( 'sb_flickr', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_flickr', array(
        'type' => 'url',
        'label' => __('Flickr', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

    // ----- GitHub -----

    $wp_customize -> add_setting ( 'sb_github', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_github', array(
        'type' => 'url',
        'label' => __('GitHub', 'sb-base-theme'),
        'section' => 'sb_social',
    ));

