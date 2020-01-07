<?php

// --- Contacts section ---

$wp_customize -> add_section ( 'sb_contacts', array(
    'title' => __('Contacts', 'bricks'),
    'description' => __('Contacts info', 'bricks'),
    'priority' => 20,
    'panel'  => 'sb_options_panel',
    )
);

    // --- Contacts settings ---

    // ----- Address -----

    $wp_customize -> add_setting ( 'sb_company', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_company', array(
        'type' => 'text',
        'label' => __('Company Name', 'bricks'),
        'description' => __('Full Company formal name', 'bricks' ),
        'section' => 'sb_contacts',
    ));

    $wp_customize -> add_setting ( 'sb_address_1', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_address_1', array(
        'type' => 'text',
        'label' => __('Address - Line 1', 'bricks'),
        'description' => __('i.e. "Street, Number"', 'bricks' ),
        'section' => 'sb_contacts',
    ));

    $wp_customize -> add_setting ( 'sb_address_2', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_address_2', array(
        'type' => 'text',
        'label' => __('Address - Line 2', 'bricks'),
        'description' => __('i.e. "Postal Code, City, State"', 'bricks'),
        'section' => 'sb_contacts',
    ));

    $wp_customize -> add_setting ( 'sb_mapurl', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_mapurl', array(
        'type' => 'url',
        'label' => __('Map URL', 'bricks'),
        'description' => __('Online Map Service URL, i.e. "https://goo.gl/maps/sNAFh8SNCLH5cYyL7" for Google Maps', 'bricks' ),
        'section' => 'sb_contacts',
    ));

    // ----- Phone -----

    $wp_customize -> add_setting ( 'sb_phone', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_phone', array(
        'type' => 'tel',
        'label' => __('Phone number', 'bricks'),
        'section' => 'sb_contacts',
    ));

    // ----- Email -----

    $wp_customize -> add_setting ( 'sb_email', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_email', array(
        'type' => 'email',
        'label' => __('Email Address', 'bricks'),
        'section' => 'sb_contacts',
    ));

    // ----- Italian Fiscal Code -----

    $wp_customize -> add_setting ( 'sb_cfisc', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_cfisc', array(
        'type' => 'text',
        'label' => __('Italian Fiscal Code', 'bricks'),
        'section' => 'sb_contacts',
    ));

    // ----- VAT Identification Number -----

    $wp_customize -> add_setting ( 'sb_piva', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_piva', array(
        'type' => 'text',
        'label' => __('VAT Number', 'bricks'),
        'section' => 'sb_contacts',
    ));