<?php

/**
 * Custom global functions.
 * These functions are meant to be accessed from multiple locations.
 * 
 */

// --- Social networks ---

// Used in Customizer, Social Icons element, Social Share buttons
// https://github.com/bradvin/social-share-urls


function sb_socialnetworks() {
    
    global $post;

    $post_url      = get_the_permalink($post->ID);
    $post_title    = rawurlencode(get_the_title($post->ID).' - '.get_bloginfo('name'));
    $post_thumb    = get_the_post_thumbnail_url($post->ID);
    
    $sb_socialnetworks = array(
        'facebook' => array(
            'nice-name'     => 'Facebook',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-facebook-f',
            'has-profile'   => true,
            'has-share'     => true,
            'share-url'     => 'https://www.facebook.com/sharer.php?u='.$post_url,
        ),
        'twitter' => array(
            'nice-name'     => 'Twitter',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-twitter',
            'has-profile'   => true,
            'has-share'     => true,
            'share-url'     => 'https://twitter.com/intent/tweet?url='.$post_url.'&text='.$post_title,
        ),
        'linkedin' => array(
            'nice-name'     => 'LinkedIn',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-linkedin-in',
            'has-profile'   => true,
            'has-share'     => true,
            'share-url'     => 'https://www.linkedin.com/shareArticle?mini=true&url='.$post_url.'&title='.$post_title,
        ),
        'instagram' => array(
            'nice-name'     => 'Instagram',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-instagram',
            'has-profile'   => true,
            'has-share'     => false,
        ),
        'pinterest' => array(
            'nice-name'     => 'Pinterest',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-pinterest-p',
            'has-profile'   => true,
            'has-share'     => true,
            'share-url'     => 'https://pinterest.com/pin/create/button/?url='.$post_url.'&description='.$post_title.'&media='.$post_thumb,
        ),
        'youtube' => array(
            'nice-name'     => 'YouTube',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-youtube',
            'has-profile'   => true,
            'has-share'     => false,
        ),
        'tripadvisor' => array(
            'nice-name'     => 'TripAdvisor',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-tripadvisor',
            'has-profile'   => true,
            'has-share'     => false,
        ),
        'pocket' => array(
            'nice-name'     => 'Pocket',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-get-pocket',
            'has-profile'   => false,
            'has-share'     => true,
            'share-url'     => 'https://getpocket.com/edit?url='.$post_url,
        ),
        'whatsapp' => array(
            'nice-name'     => 'WhatsApp',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-whatsapp',
            'has-profile'   => false,
            'has-share'     => true,
            'share-url'     => 'whatsapp://send?text='.$post_url,
        ),
        'telegram' => array(
            'nice-name'     => 'Telegram',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-telegram-plane',
            'has-profile'   => true,
            'has-share'     => true,
            'share-url'     => 'https://t.me/share/url?url='.$post_url.'&text='.$post_title,
        ),
        'github' => array(
            'nice-name'     => 'GitHub',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-github',
            'has-profile'   => true,
            'has-share'     => false,
        ),
        'mail' => array(
            'nice-name'     => 'E-Mail',
            'icon-style'    => 'fas',
            'icon-name'     => 'fa-envelope',
            'has-profile'   => false,
            'has-share'     => true,
            'share-url'     => 'mailto:?subject='.$title.'&body='.$url,
        ),
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
            echo '<a class="ml-md-auto" href="'.$sigURL.'" target="_blank">'.file_get_contents($sigLogoFull).'</a>';
            break;

        case 'logo-small':
            echo '<a class="ml-md-auto" href="'.$sigURL.'" target="_blank">'.file_get_contents($sigLogoSmall).'</a>';
            break;

        case 'text':
            echo '<span class="navbar-text ml-md-auto">Made by <a class="text-white-50" " href="'.$sigURL.'" target="_blank">Stefano Bartoletti</a></span>';
            break;

    }

}