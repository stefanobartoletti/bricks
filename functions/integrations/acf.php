<?php

/**
 * Integration with Advanced Custom Fields
 * 
 */

// https://www.advancedcustomfields.com/resources/options-page/

if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page();
	
}

// https://www.advancedcustomfields.com/resources/register-fields-via-php/

function brk_acf_options() {
	
	acf_add_local_field_group(array(

        'key' => 'group_theme_options',
        'title' => __('Options Page', 'bricks'),
        'fields' => array(
            array(
                'key' => 'field_6013f4fcd2434',
                'label' => __('Contacts', 'bricks'),
                'name' => 'contacts',
                'type' => 'group',
                'instructions' => __('Displayed in the site footer', 'bricks'),
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => ''
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6013f5efd2435',
                        'label' => __('Company', 'bricks'),
                        'name' => 'company',
                        'type' => 'text',
                        'instructions' => __('Example: Full Company Name', 'bricks'),
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => ''
                    ),
                    array(
                        'key' => 'field_6013f61bd2436',
                        'label' => __('Address - Line 1', 'bricks'),
                        'name' => 'address_1',
                        'type' => 'text',
                        'instructions' => __('Example: Street, Number', 'bricks'),
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => ''
                    ),
                    array(
                        'key' => 'field_6013f74fd2437',
                        'label' => __('Address - Line 2', 'bricks'),
                        'name' => 'address_2',
                        'type' => 'text',
                        'instructions' => __('Example => Postal Code, City, State', 'bricks'),
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => ''
                    ),
                    array(
                        'key' => 'field_6013fcab912d8',
                        'label' => __('Map URL', 'bricks'),
                        'name' => 'map_url',
                        'type' => 'url',
                        'instructions' => __('Example: https//goo.gl/maps/sNAFh8SNCLH5cYyL7 for Google Maps', 'bricks'),
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => ''
                    ),
                    array(
                        'key' => 'field_6013fcf2912d9',
                        'label' => __('Phone number', 'bricks'),
                        'name' => 'phone',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => ''
                    ),
                    array(
                        'key' => 'field_6013fd0b912da',
                        'label' => __('E-mail address', 'bricks'),
                        'name' => 'email',
                        'type' => 'email',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => ''
                    ),
                    array(
                        'key' => 'field_6013fd34912db',
                        'label' => __('ID Number', 'bricks'),
                        'name' => 'id_number',
                        'type' => 'text',
                        'instructions' => __('Example: Social Security Number, Fiscal Code, etc.', 'bricks'),
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => ''
                    ),
                    array(
                        'key' => 'field_6013fd4b912dc',
                        'label' => __('VAT Number', 'bricks'),
                        'name' => 'vat_number',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => ''
                    )
                )
            ),
            array(
                'key' => 'field_601400d769ba3',
                'label' => __('Social profiles', 'bricks'),
                'name' => 'social',
                'type' => 'group',
                'instructions' => __('Full social profile addresses. Not all fields are required, only filled fields will be displayed on the site as icons', 'bricks'),
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => ''
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_601400d769ba7',
                        'label' => 'Facebook',
                        'name' => 'facebook',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => ''
                    ),
                    array(
                        'key' => 'field_601401b269bac',
                        'label' => 'Twitter',
                        'name' => 'twitter',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => ''
                    ),
                    array(
                        'key' => 'field_601401e469bad',
                        'label' => 'LinkedIn',
                        'name' => 'linkedin',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => ''
                    ),
                    array(
                        'key' => 'field_601401f569bae',
                        'label' => 'Instagram',
                        'name' => 'instagram',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => ''
                    ),
                    array(
                        'key' => 'field_6014026069baf',
                        'label' => 'Pinterest',
                        'name' => 'pinterest',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => ''
                    ),
                    array(
                        'key' => 'field_6014026f69bb0',
                        'label' => 'YouTube',
                        'name' => 'youtube',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => ''
                    ),
                    array(
                        'key' => 'field_6014027e69bb1',
                        'label' => 'TripAdvisor',
                        'name' => 'tripadvisor',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '33',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => ''
                    )
                )
            ),
            array(
                'key' => 'field_60140651ee8f1',
                'label' => __('Meta', 'bricks'),
                'name' => 'meta',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => ''
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_60141233d0104',
                        'label' => __('Google Analytics ID', 'bricks'),
                        'name' => 'google_analytics_id',
                        'type' => 'text',
                        'instructions' => __('Google Analytics tracking code. Example: UA-000000000-0', 'bricks'),
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '25',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => ''
                    ),
                    array(
                        'key' => 'field_60141285d0105',
                        'label' => __('Google Tag Manager ID', 'bricks'),
                        'name' => 'gtag_id',
                        'type' => 'text',
                        'instructions' => __('Google Tag Manager tracking code. Example: GTM-0000000', 'bricks'),
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '25',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => ''
                    ),
                    array(
                        'key' => 'field_60141285d0106',
                        'label' => __('Facebook Pixel ID', 'bricks'),
                        'name' => 'fb_pixel_id',
                        'type' => 'text',
                        'instructions' => __('Facebook Pixel tracking code. Example: 000000000000000', 'bricks'),
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '25',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => ''
                    ),
                    array(
                        'key' => 'field_60140662ee8f2',
                        'label' => __('Chrome Theme', 'bricks'),
                        'name' => 'theme_color',
                        'type' => 'color_picker',
                        'instructions' => __('Tab color in Chrome for Android', 'bricks'),
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '25',
                            'class' => '',
                            'id' => ''
                        ),
                        'default_value' => ''
                    )
                )
            )
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options'
                )
            )
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
	
}

add_action('acf/init', 'brk_acf_options');


// --- Social networks ---

// Used in Social Icons

function brk_socialnetworks() {
      
    $brk_socialnetworks = array(
        'facebook' => array(
            'social-name'   => 'Facebook',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-facebook-f',
        ),
        'twitter' => array(
            'social-name'   => 'Twitter',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-twitter',
        ),
        'linkedin' => array(
            'social-name'   => 'LinkedIn',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-linkedin-in',
        ),
        'instagram' => array(
            'social-name'   => 'Instagram',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-instagram',
        ),
        'pinterest' => array(
            'social-name'   => 'Pinterest',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-pinterest-p',
        ),
        'youtube' => array(
            'social-name'   => 'YouTube',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-youtube',
        ),
        'tripadvisor' => array(
            'social-name'   => 'TripAdvisor',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-tripadvisor',
        ),
    );
    return $brk_socialnetworks;
}
