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


// --- Excerpt lenght ---

function brk_excerpt_length( $length ) {
    return 40;
}
// add_filter( 'excerpt_length', 'brk_excerpt_length', 999 );


// --- Thumbnail alt ---

// Echoes the "alt" value of a post thumbnail as inserted in the media gallery

function brk_thumbnail_alt() {
    $brk_thumbnail_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    echo $brk_thumbnail_alt;
}


// --- Breadcrumbs ---

function brk_breadcrumbs() {

    // http://yoa.st/breadcrumbs

    if (function_exists('yoast_breadcrumb')) {

        yoast_breadcrumb( '<nav class="breadcrumb">','</nav>' );
    
    }
    
    // https://s.rankmath.com/breadcrumbs
    
    elseif (function_exists('rank_math_the_breadcrumbs')) {
    
        add_filter( 'rank_math/frontend/breadcrumb/args', function( $args ) {
            $args = array(
                'delimiter'   => '&nbsp;&#47;&nbsp;',
                'wrap_before' => '<nav class="breadcrumb"><span>',
                'wrap_after'  => '</span></nav>',
                'before'      => '',
                'after'       => '',
            );
            return $args;
        });
    
        rank_math_the_breadcrumbs();
    
    }

}
