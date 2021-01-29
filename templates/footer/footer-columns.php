<div id="footer-columns" class="container mt-5">

    <div class="row">

        <div class="col-md-3 mb-4">
            
            <?php if ( has_custom_logo() ) { 

                brk_custom_logo_svg();

            } else { ?>

                <a href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo('name'); ?></a>

            <?php } ?>
  
        </div>

        <div class="col-md-3 mb-4">

            <h3 class="h4 mb-4"><?php esc_html_e('Contacts', 'bricks') ?></h3>

            <ul class="list-unstyled">

                <?php 
                
                $company = get_field('contacts_company', 'option');
                $address1 = get_field('contacts_address_1', 'option');
                $address2 = get_field('contacts_address_2', 'option');
                $mapurl = get_field('contacts_map_url', 'option');
                $phone = get_field('contacts_phone', 'option');
                $email = get_field('contacts_email', 'option');
                $fiscalcode = get_field('contacs_fiscal_code', 'option');
                $vat = get_field('contacs_vat_number', 'option');               
                
                if( $address1 ) { ?>

                    <li class="media mb-3">
                        <i class="fas fa-map-marker-alt fa-fw mt-1"></i>
                        <div class="media-body ml-3">
                            <?php                                                   
                            echo $mapurl ? '<a href="' . $mapurl . '" target="_blank">' : '<p>';
                            echo $company ? $company . ', <br>' : '';
                            echo $address1 ? $address1 : '';
                            echo $address2 ? ', <br>' . $address2 : '';
                            echo $mapurl ? '</a>' : '<p>';
                            ?>
                        </div>
                    </li>

                <?php }; if( $phone ) { ?>

                    <li class="media mb-3">
                        <i class="fas fa-phone fa-fw mt-1"></i>
                        <div class="media-body ml-3">
                            <a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
                        </div>
                    </li>

                <?php }; if( $email ) { ?>

                    <li class="media mb-3">
                        <i class="fas fa-envelope fa-fw mt-1"></i>
                        <div class="media-body ml-3">
                            <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
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