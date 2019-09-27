<?php

/**
 * Custom global functions.
 * These functions are meant to be accessed from multiple locations.
 * 
 */

// --- Social networks ---

// Used in Customizer and Social Icons element
// social name => icon name (FontAwesome 5)

function sb_socialnetworks() {
    
    $sb_socialnetworks = array(
        'facebook' => 'fa-facebook-f',
        'linkedin' => 'fa-linkedin-in',
        'instagram' => 'fa-instagram',
        'twitter' => 'fa-twitter',
        // 'youtube' => 'fa-youtube',
        // 'pinterest' => 'fa-pinterest-p',
        // 'tripadvisor' => 'fa-tripadvisor',
        // 'telegram' => 'fa-telegram-plane',
        // 'behance' => 'fa-behance',
        // 'dribbble' => 'fa-dribbble',
        // 'flickr' => 'fa-flickr',
        // 'github' => 'fa-github',
        // 'gitlab' => 'fa-gitlab',
    );
    return $sb_socialnetworks;
}

// --- Thumbnail alt ---

// Echoes the "alt" value of a post thumbnail as inserted in the media gallery

function sb_thumb_alt() {

    $sb_thumb_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    echo $sb_thumb_alt;

}


// --- [sb] signature ---

// Used to print signature in the footer

function sb_signature($sigType = 'text') {

    $sigURL         = 'https://www.stefanobartoletti.it';
    $sigLogoFull    = get_template_directory_uri().'/dist/img/sb-logo-full.svg';
    $sigLogoSmall   = get_template_directory_uri().'/dist/img/sb-logo-small.svg';
    $sigLogoAlt     = 'Stefano Bartoletti Web Design';

    switch ($sigType) {

        case 'logo-full':
            echo '<a class="ml-md-auto" href="'.$sigURL.'" target="_blank"><img class="sb-logo" src="'.$sigLogoFull.'" alt="'.$sigLogoAlt.'"></a>';
            break;

        case 'logo-small':
            echo '<a class="ml-md-auto" href="'.$sigURL.'" target="_blank"><img class="sb-logo" src="'.$sigLogoSmall.'" alt="'.$sigLogoAlt.'"></a>';
            break;

        case 'text':
            echo '<span class="navbar-text ml-md-auto">Made by <a class="text-white-50" " href="'.$sigURL.'" target="_blank">Stefano Bartoletti</a></span>';
            break;

    }

}

