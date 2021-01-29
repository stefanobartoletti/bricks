<?php

// --- Get values ---

$analyticsID = get_field('meta_google_analytics_id', 'option');
$gtagID = get_field('meta_gtag_id', 'option');
$themecolor = get_field('meta_theme_color', 'option');


// --- Set metadata ---

function sb_head_meta() {

    global $analyticsID;
    global $gtagID;
    global $themecolor;

    // --- Google Analytics ---

    if ( $analyticsID ) {
    
        echo
        "
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src='https://www.googletagmanager.com/gtag/js?id=" . $analyticsID . "'></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '" . $analyticsID . "');
        </script>
        ";
    
    }

    // --- Google Tag Manager ---

    if ( $gtagID ) {
    
        echo
        "
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','" . $gtagID . "');</script>
        <!-- End Google Tag Manager -->
        ";
    
    }

    // --- Chrome theme ---
   
    if( $themecolor ) {          
        echo '<meta name="theme-color" content="', $themecolor, '">';
    }

}
add_action('wp_head', 'sb_head_meta');

function sb_body_open() { 

    global $gtagID;

    if ( $gtagID ) {

        echo
        '
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=' . $gtagID . '"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        ';  
    
    }

};
add_action('wp_body_open', 'sb_body_open');
