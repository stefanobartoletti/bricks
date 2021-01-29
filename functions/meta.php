<?php

function sb_head_meta() {

    $themecolor = get_field('meta_theme_color', 'option');
    
    // --- Chrome theme ---
   
    if( $themecolor ) {          
        echo '<meta name="theme-color" content="', $themecolor, '">';
    }

}
add_action('wp_head', 'sb_head_meta');