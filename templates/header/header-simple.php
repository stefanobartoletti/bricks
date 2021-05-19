<nav id="header-simple" class="navbar navbar-expand-lg navbar-dark container" role="navigation">

    <?php if ( has_custom_logo() ) { 

        the_custom_logo();

    } else { ?>

        <a class="navbar-brand" href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo('name'); ?></a>

    <?php } ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-simple-menu" aria-controls="header-simple-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id="header-simple-menu" class="collapse navbar-collapse">

        <?php
        
        wp_nav_menu(array(
                'theme_location'    => 'header',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'header-menu nav navbar-nav my-3 my-lg-0 ml-lg-2 mr-auto',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        
        get_search_form();
        
        if ( class_exists('ACF') ) { 
            get_template_part( 'templates/components/socialicons', '' );
        };
        
        ?>

    </div>

</nav>