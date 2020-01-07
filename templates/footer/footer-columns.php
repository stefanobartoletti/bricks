<div id="footer-columns" class="container mt-5">

    <div class="row">

        <div class="col-md-3 mb-4">
            
            <?php if ( has_custom_logo() ) { 

                the_custom_logo();

            } else { ?>

                <a href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo('name'); ?></a>

            <?php } ?>
  
        </div>

        <div class="col-md-3 mb-4">

            <h3 class="h4 mb-4"><?php esc_html_e('Contacts', 'bricks') ?></h3>

            <ul class="list-unstyled">

                <?php if( get_option('sb_address_1')) { ?>

                    <li class="media mb-3">
                        <i class="fas fa-map-marker-alt fa-fw mt-1"></i>
                        <div class="media-body ml-3">
                            <?php                           
                            if( get_option('sb_mapurl')) {
                                echo '<a href="', get_option('sb_mapurl'), '" target="_blank">';
                            } else {
                                echo '<p>';
                            }
                            if( get_option('sb_company')) {echo get_option('sb_company'), ', <br>'; };
                            if( get_option('sb_address_1')) {echo get_option('sb_address_1'); };
                            if( get_option('sb_address_2')) {echo ', <br>', get_option('sb_address_2'); };
                            if( get_option('sb_mapurl')) {echo '</a>'; } else {echo '</p>';} ?>
                        </div>
                    </li>

                <?php }; if( get_option('sb_phone')) { ?>

                    <li class="media mb-3">
                        <i class="fas fa-phone fa-fw mt-1"></i>
                        <div class="media-body ml-3">
                            <a href="tel:<?php echo get_option('sb_phone') ?>"><?php echo get_option('sb_phone') ?></a>
                        </div>
                    </li>

                <?php }; if( get_option('sb_email')) { ?>

                    <li class="media mb-3">
                        <i class="fas fa-envelope fa-fw mt-1"></i>
                        <div class="media-body ml-3">
                            <a href="mailto:<?php echo get_option('sb_email', '') ?>"><?php echo get_option('sb_email', '') ?></a>
                        </div>
                    </li>

                <?php }; ?>

            </ul>

            <?php get_template_part( 'templates/elements/socialicons', '' ); ?>
            
        </div>

        <div class="col-md-3 mb-4">

            <h3 class="h4 mb-4"><?php esc_html_e('Pages', 'bricks') ?></h3>

            <?php wp_nav_menu(array(
                'theme_location'    => 'header',
                'depth'             => 1,
                'container'         => 'nav',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'footer-menu list-unstyled',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            )); ?>

        </div>

        <div class="col-md-3 mb-4">

            <h3 class="h4 mb-4"><?php esc_html_e('Privacy', 'bricks') ?></h3>

            <?php wp_nav_menu(array(
                'theme_location'    => 'footer',
                'depth'             => 1,
                'container'         => 'nav',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'footer-menu list-unstyled',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            )); ?>

        </div>

    </div>

</div> <!-- #footer-columns -->