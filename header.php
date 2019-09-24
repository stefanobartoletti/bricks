<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 
<?php wp_body_open(); ?>

<div id="site-wrap">

    <header id="header-wrap" class="sticky-top bg-dark">

        <nav class="navbar navbar-expand-lg navbar-dark container" role="navigation">

            <?php if ( has_custom_logo() ) { 

                the_custom_logo();

            } else { ?>

                <a class="navbar-brand" href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo('name'); ?></a>

            <?php } ?>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu-header"
                aria-controls="navbar-menu-header" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbar-menu-header" class="collapse navbar-collapse">

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
                
                get_template_part( 'templates/elements/socialicons', '' );
                
                ?>

            </div>

        </nav>

    </header> <!-- #header-wrap -->

    <div id="page-wrap">