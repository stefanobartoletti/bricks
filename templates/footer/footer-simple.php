<div id="footer-simple" class="navbar navbar-expand navbar-dark container flex-column flex-md-row my-3 small">
               
    <span class="navbar-text">
        <?php echo 
        "&#169; ", date('o'), " - ",
        bloginfo('name'), " - ",
        get_theme_mod('sb_address_1'), ", ",
        get_theme_mod('sb_address_2'), " - ",
        "c.f. ", get_theme_mod('sb_cfisc'), " - ",
        "p.i. ", get_theme_mod('sb_piva')
        ?>
    </span>

    <?php wp_nav_menu(array(
        'theme_location'    => 'footer',
        'depth'             => 1,
        'container'         => 'nav',
        'container_class'   => 'ml-md-auto',
        'container_id'      => '',
        'menu_class'        => 'footer-menu navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    )); ?>
   
</div> <!-- #footer-simple -->