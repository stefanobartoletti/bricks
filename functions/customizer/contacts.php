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

    $wp_customize -> add_setting ( 'sb_address', array( 'default' => '' ) );
    $wp_customize -> add_control ( 'sb_address', array(
        'type' => 'textarea',
        'label' => __('Address', 'sb-base-theme'),
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