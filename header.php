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

<header class="header-wrap bg-primary">

    <nav class="navbar navbar-expand-lg navbar-dark container" role="navigation">

        <?php if ( has_custom_logo() ) { 

            the_custom_logo();

        } else { ?>

            <a class="navbar-brand" href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo('name'); ?></a>

        <?php } ?>
 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">

            <?php wp_nav_menu(array(
                    'theme_location'    => 'header',
                    'depth'             => 2,
                    'container'         => '',
                    'container_class'   => '',
                    'container_id'      => '',
                    'menu_class'        => 'nav navbar-nav mr-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
            )); ?>               
            
            <form class="form-inline my-2 my-lg-0" action="<?php echo esc_url_raw(home_url()); ?>" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="s">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <ul class="social-icons nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank"><i class="fab fa-github"></i></a>
                </li>
            </ul>

        </div>

    </nav>

</header>

<!-- main content + sidebars wrapper -->

<div class="page-wrap">