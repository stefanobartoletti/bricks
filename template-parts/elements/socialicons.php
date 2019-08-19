<ul class="social-icons nav ml-lg-2">

    <?php 

    // ----- Icon entry -----

/*     $sb_socialnetworks = array(
        // option name => icon name
        'facebook' => 'fa-facebook-f',
        'linkedin' => 'fa-linkedin-in',
        'instagram' => 'fa-instagram',
        'twitter' => 'fa-twitter',
    ); */

    foreach ($sb_socialnetworks as $key => $value) {

        if ( get_theme_mod('sb_'.$key, '')) { ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_theme_mod('sb_'.$key, '') ?>" target="_blank"><i class="fab <?php echo $value ?>"></i></a>
            </li>
    
        <?php };
        
    }
    
    ?>

</ul>