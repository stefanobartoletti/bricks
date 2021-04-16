<ul class="socialicons navbar-nav flex-row">

    <?php 

    // --- Single icon -----

    foreach ( brk_socialicons() as $key => $value) {

        if ( get_field('social_'.$key, 'option') ) { ?>

            <li class="socialicon nav-item">
                <a class="nav-link" href="<?php echo get_field('social_'.$key, 'option') ?>" title="<?php echo $value['social-name'] ?>" target="_blank">
                    <i class="<?php echo $value['icon-style'].' '.$value['icon-name'] ?>"></i>
                </a>
            </li>
    
        <?php };
        
    };
    
    ?>

</ul>