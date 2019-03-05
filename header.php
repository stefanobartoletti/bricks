<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class()?>> 

<!-- full site wrapper -->

<div id="page" class="site-wrap">

<!-- header wrapper -->

<header class="header-wrap sticky-top bg-primary">

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

            <?php wp_nav_menu(array(
                    'theme_location'    => 'header',
                    'depth'             => 2,
                    'container'         => '',
                    'container_class'   => '',
                    'container_id'      => '',
                    'menu_class'        => 'main-menu nav navbar-nav my-3 my-lg-0 ml-lg-2 mr-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
            )); ?>               
            
            <form class="form-inline my-2 my-lg-0" action="<?php echo esc_url_raw(home_url()); ?>" method="get">
                <input class="form-control w-auto mr-2" type="search" placeholder="Search" aria-label="Search" name="s">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>

            <?php get_template_part( 'template-parts/elements/socialicons', '' ); ?>

        </div>

    </nav>

</header>

<!-- main content + sidebars wrapper -->

<div class="page-wrap">