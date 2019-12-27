<div id="footer-copyright" class="navbar navbar-expand navbar-dark container flex-column flex-md-row small">
               
    <span class="navbar-text">

        <?php       
        echo "&#169; ".date('o');
        if( get_theme_mod('sb_company')) { echo ' | ', get_theme_mod('sb_company'); };
        if( get_theme_mod('sb_address_1')) { echo ' | ', get_theme_mod('sb_address_1'); };
        if( get_theme_mod('sb_address_2')) { echo ', ', get_theme_mod('sb_address_2'); };
        if( get_theme_mod('sb_cfisc')) { echo ' | c.f. ', get_theme_mod('sb_cfisc'); };
        if( get_theme_mod('sb_piva')) { echo ' | p.i. ', get_theme_mod('sb_piva'); };
        ?>
        
    </span>

    <?php sb_signature('logo-small'); ?>
   
</div> <!-- #footer-copyright --> 


