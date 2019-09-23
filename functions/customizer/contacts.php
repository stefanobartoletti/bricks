<?php

// --- Contacts section ---

$wp_customize -> add_section ( 'sb_contacts', array(
    'title' => __('Contacts', 'sb-base-theme'),
    'description' => __('Contacts info', 'sb-base-theme'),
    'priority' => 20,
    'panel'  => 'sb_options_panel',
    )
);

    // --- Contacts settings ---

    // ----- Address -----

    $wp_customize -> add_setting ( 'sb_company', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_company', array(
        'type' => 'text',
        'label' => __('Company Name', 'sb-base-theme'),
        'section' => 'sb_contacts',
    ));

    $wp_customize -> add_setting ( 'sb_address_1', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_address_1', array(
        'type' => 'text',
        'label' => __('Address - Line 1', 'sb-base-theme'),
        'section' => 'sb_contacts',
    ));

    $wp_customize -> add_setting ( 'sb_address_2', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_address_2', array(
        'type' => 'text',
        'label' => __('Address - Line 2', 'sb-base-theme'),
        'section' => 'sb_contacts',
    ));

    $wp_customize -> add_setting ( 'sb_mapurl', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_mapurl', array(
        'type' => 'url',
        'label' => __('Map URL', 'sb-base-theme'),
        'section' => 'sb_contacts',
    ));

    // ----- Phone -----

    $wp_customize -> add_setting ( 'sb_phone', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_phone', array(
        'type' => 'tel',
        'label' => __('Phone number', 'sb-base-theme'),
        'section' => 'sb_contacts',
    ));

    // ----- Email -----

    $wp_customize -> add_setting ( 'sb_email', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_email', array(
        'type' => 'email',
        'label' => __('Email Address', 'sb-base-theme'),
        'section' => 'sb_contacts',
    ));

    // ----- Codice Fiscale -----

    $wp_customize -> add_setting ( 'sb_cfisc', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_cfisc', array(
        'type' => 'text',
        'label' => __('Codice Fiscale', 'sb-base-theme'),
        'section' => 'sb_contacts',
    ));

    // ----- Partita IVA -----

    $wp_customize -> add_setting ( 'sb_piva', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_piva', array(
        'type' => 'text',
        'label' => __('Partita IVA', 'sb-base-theme'),
        'section' => 'sb_contacts',
    ));