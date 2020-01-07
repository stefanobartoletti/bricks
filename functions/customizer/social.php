<?php

// --- Social section ---

$wp_customize -> add_section ( 'sb_social', array(
    'title' => __('Social', 'bricks'),
    'description' => __('Insert full addresses for Social Network profiles. Only filled fields will be displayed on the site as icons. For better layout, only use about 3~4 of them at most.', 'bricks'),
    'priority' => 20,
    'panel'  => 'sb_options_panel',
    )
);

    // --- Social settings ---

    // Custom function from globals.php

    $sb_socialprofiles = sb_socialnetworks();

    // ----- Social entry -----

    foreach ($sb_socialprofiles as $key => $value) { 

        if ($value['has-profile'] == true) {

        $wp_customize -> add_setting ( 'sb_'.$key, array( 'default' => '' ) );
        $wp_customize -> add_control ( 'sb_'.$key, array(
            'type' => 'url',
            'label' => $value['social-name'],
            'section' => 'sb_social',
        ));
        
        }

    };