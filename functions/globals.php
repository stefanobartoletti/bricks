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