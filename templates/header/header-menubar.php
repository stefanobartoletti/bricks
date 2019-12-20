<nav id="header-menubar" class="navbar navbar-expand-lg navbar-dark container justify-content-center">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menubar-menu" aria-controls="header-menubar-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id="header-menubar-menu" class="collapse navbar-collapse">

        <?php
        
        wp_nav_menu(array(
                'theme_location'    => 'header',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'header-menu nav navbar-nav my-3 my-lg-0 text-center',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        
        ?>

    </div>
 
</nav>