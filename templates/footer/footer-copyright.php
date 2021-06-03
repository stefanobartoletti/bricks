<div id="footer-copyright" class="navbar navbar-expand navbar-dark container flex-column flex-md-row small">
               
    <span class="navbar-text">

        <?php if ( class_exists('ACF') ) {

                $company = get_field('contacts_company', 'option');
                $address1 = get_field('contacts_address_1', 'option');
                $address2 = get_field('contacts_address_2', 'option');
                $mapurl = get_field('contacts_map_url', 'option');
                $phone = get_field('contacts_phone', 'option');
                $email = get_field('contacts_email', 'option');
                $idnumber = get_field('contacts_id_number', 'option');
                $vatnumber = get_field('contacts_vat_number', 'option');  

                echo "&#169; ".date('o'); 
                echo $company ? ' | ' . $company : '';
                echo $address1 ? ' | ' . $address1 : '';
                echo $address2 ? ', ' . $address2 : '';
                echo $idnumber ? ' | c.f. ' . $idnumber : '';
                echo $vatnumber ? ' | p.i. ' . $vatnumber : '';
            
            } ?>
        
    </span>

    <span id="brk-signature" class="navbar-text ml-md-auto">
        <a class="text-white-50" href="<?php echo wp_get_theme()->get( 'ThemeURI' ); ?>" target="_blank">
            Made with <?php echo file_get_contents(get_template_directory().'/dist/img/logo-small.svg') ?> Bricks
        </a>
    </span>
   
</div> <!-- #footer-copyright --> 


