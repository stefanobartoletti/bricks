<?php

// --- Yoast ---
// http://yoa.st/breadcrumbs

if (function_exists('yoast_breadcrumb')) {

  yoast_breadcrumb( '<nav class="breadcrumb">','</nav>' );

}

// --- Rank Math ---
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

// --- Nothing ---

else {}