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

    // Custom function from globals.php

    $sb_socialnetworks = sb_socialnetworks();

    // ----- Social entry -----

    foreach ($sb_socialnetworks as $key => $value) {

        $wp_customize -> add_setting ( 'sb_'.$key, array( 'default' => '' ) );
        $wp_customize -> add_control ( 'sb_'.$key, array(
            'type' => 'url',
            'label' => __(ucfirst($key), 'sb-base-theme'),
            'section' => 'sb_social',
        ));
        
    }

