<div id="footer-copyright" class="navbar navbar-expand navbar-dark container flex-column flex-md-row small">
               
    <span class="navbar-text">

        <?php
        
        $company = get_field('contacts_company', 'option');
        $address1 = get_field('contacts_address_1', 'option');
        $address2 = get_field('contacts_address_2', 'option');
        $mapurl = get_field('contacts_map_url', 'option');
        $phone = get_field('contacts_phone', 'option');
        $email = get_field('contacts_email', 'option');
        $fiscalcode = get_field('contacs_fiscal_code', 'option');
        $vat = get_field('contacs_vat_number', 'option');  

        echo "&#169; ".date('o'); 
        echo $company ? ' | ' . $company : '';
        echo $address1 ? ' | ' . $address1 : '';
        echo $address2 ? ', ' . $address2 : '';
        echo $fiscalcode ? ' | c.f. ' . $fiscalcode : '';
        echo $vat ? ' | p.i. ' . $vat : '';
        ?>
        
    </span>

    <?php sb_signature('logo-small'); ?>
   
</div> <!-- #footer-copyright --> 


