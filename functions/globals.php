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