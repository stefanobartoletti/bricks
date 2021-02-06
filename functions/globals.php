<?php

/**
 * Custom global functions.
 * 
 */

// --- Enable SVG support ---

function brk_svg_upload( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';

    return $mimes;
}
add_filter( 'upload_mimes', 'brk_svg_upload' );

function brk_svg_mimetype( $data = null, $file = null, $filename = null, $mimes = null ) {
    $ext = isset( $data['ext'] ) ? $data['ext'] : '';
    if ( strlen( $ext ) < 1 ) {
        $exploded = explode( '.', $filename );
        $ext      = strtolower( end( $exploded ) );
    }
    if ( $ext === 'svg' ) {
        $data['type'] = 'image/svg+xml';
        $data['ext']  = 'svg';
    } elseif ( $ext === 'svgz' ) {
        $data['type'] = 'image/svg+xml';
        $data['ext']  = 'svgz';
    }

    return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'brk_svg_mimetype', 10, 4 );


// --- Thumbnail alt ---

// Echoes the "alt" value of a post thumbnail as inserted in the media gallery

function brk_thumbnail_alt() {
    $brk_thumbnail_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    echo $brk_thumbnail_alt;
}


// --- Excerpt lenght ---

function brk_excerpt_length( $length ) {
    return 40;
}
// add_filter( 'excerpt_length', 'brk_excerpt_length', 999 );


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
