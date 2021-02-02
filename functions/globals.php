<?php

/**
 * Custom global functions.
 * These functions are meant to be accessed from multiple locations.
 * 
 */

// --- Social networks ---

// Used in Social Icons and Social Share buttons
// https://github.com/bradvin/social-share-urls


function brk_socialnetworks() {
    
    global $post;

    $post_url      = get_the_permalink($post->ID);
    $post_title    = rawurlencode(get_the_title($post->ID).' - '.get_bloginfo('name'));
    $post_thumb    = get_the_post_thumbnail_url($post->ID);
    
    $brk_socialnetworks = array(
        'facebook' => array(
            'social-name'   => 'Facebook',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-facebook-f',
            'has-share'     => true,
            'share-url'     => 'https://www.facebook.com/sharer/sharer.php?u='.$post_url,
        ),
        'twitter' => array(
            'social-name'   => 'Twitter',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-twitter',
            'has-share'     => true,
            'share-url'     => 'https://twitter.com/intent/tweet?url='.$post_url.'&text='.$post_title,
        ),
        'linkedin' => array(
            'social-name'   => 'LinkedIn',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-linkedin-in',
            'has-share'     => true,
            'share-url'     => 'https://www.linkedin.com/shareArticle?mini=true&url='.$post_url.'&title='.$post_title,
        ),
        'instagram' => array(
            'social-name'   => 'Instagram',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-instagram',
            'has-share'     => false,
        ),
        'pinterest' => array(
            'social-name'   => 'Pinterest',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-pinterest-p',
            'has-share'     => true,
            'share-url'     => 'https://pinterest.com/pin/create/button/?url='.$post_url.'&description='.$post_title.'&media='.$post_thumb,
        ),
        'youtube' => array(
            'social-name'   => 'YouTube',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-youtube',
            'has-share'     => false,
        ),
        'tripadvisor' => array(
            'social-name'   => 'TripAdvisor',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-tripadvisor',
            'has-share'     => false,
        ),
        'pocket' => array(
            'social-name'   => 'Pocket',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-get-pocket',
            'has-share'     => true,
            'share-url'     => 'https://getpocket.com/edit?url='.$post_url,
        ),
        'whatsapp' => array(
            'social-name'   => 'WhatsApp',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-whatsapp',
            'has-share'     => true,
            'share-url'     => 'https://api.whatsapp.com/send?text='.$post_title.'%20'.$post_url,
        ),
        'telegram' => array(
            'social-name'   => 'Telegram',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-telegram-plane',
            'has-share'     => true,
            'share-url'     => 'https://t.me/share/url?url='.$post_url.'&text='.$post_title,
        ),
        'github' => array(
            'social-name'   => 'GitHub',
            'icon-style'    => 'fab',
            'icon-name'     => 'fa-github',
            'has-profile'   => false,
            'has-share'     => false,
        ),
        'mail' => array(
            'social-name'   => 'E-Mail',
            'icon-style'    => 'fas',
            'icon-name'     => 'fa-envelope',
            'has-profile'   => false,
            'has-share'     => true,
            'share-url'     => 'mailto:?subject='.$post_title.'&body='.$post_url,
        ),
    );
    return $brk_socialnetworks;
}

// --- Thumbnail alt ---

// Echoes the "alt" value of a post thumbnail as inserted in the media gallery

function brk_thumb_alt() {

    $brk_thumb_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    echo $brk_thumb_alt;

}

// --- Custom logo SVG ---

// Inlines custom logo if it is in SVG format

function brk_custom_logo_svg() {

    $logourl = wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full');
    $logoid = attachment_url_to_postid($logourl);
    $logomime = get_post_mime_type($logoid);

    if ($logomime == 'image/svg+xml') { ?>

        <a href="<?php echo esc_url_raw(home_url()); ?>" class="custom-logo-link" rel="home"><div class="custom-logo"><?php echo file_get_contents($logourl) ?></div></a>     
        
    <?php } else {

        return the_custom_logo();

    }   

}

// --- [sb] signature ---

// Used to print signature in the footer

function brk_signature($sigType = 'text') {

    $sigURL         = 'https://www.stefanobartoletti.it';
    $sigLogoFull    = get_template_directory().'/dist/img/sb-logo-full.svg';
    $sigLogoSmall   = get_template_directory().'/dist/img/sb-logo-small.svg';
    $sigLogoAlt     = 'Stefano Bartoletti Web Design';

    switch ($sigType) {

        case 'logo-full':
            echo '<a id="sb-signature" class="ml-md-auto" href="'.$sigURL.'" target="_blank">'.file_get_contents($sigLogoFull).'</a>';
            break;

        case 'logo-small':
            echo '<a id="sb-signature" class="ml-md-auto" href="'.$sigURL.'" target="_blank">'.file_get_contents($sigLogoSmall).'</a>';
            break;

        case 'text':
            echo '<span id="sb-signature" class="navbar-text ml-md-auto">Made by <a class="text-white-50" " href="'.$sigURL.'" target="_blank">Stefano Bartoletti</a></span>';
            break;

    }

}

// --- Excerpt lenght ---

// function brk_excerpt_length( $length ) {
//     return 40;
// }
// add_filter( 'excerpt_length', 'brk_excerpt_length', 999 );