<ul class="social-icons nav ml-lg-2">

    <?php 

    // Custom function from globals.php

    $sb_socialnetworks = sb_socialnetworks();

    // ----- Single icon -----

    foreach ($sb_socialnetworks as $key => $value) {

        if ( get_theme_mod('sb_'.$key, '')) { ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_theme_mod('sb_'.$key, '') ?>" target="_blank"><i class="fab <?php echo $value ?>"></i></a>
            </li>
    
        <?php };
        
    }
    
    ?>

</ul>