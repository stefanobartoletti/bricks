    </div> <!-- #page-wrap -->

    <footer id="footer-wrap" class="bg-dark text-light">

        <div class="container my-4">
               
            <p><?php echo 
                "&#169; ", date('o'), " - ",
                bloginfo('name'), " - ",
                get_theme_mod('sb_address_1'), ", ",
                get_theme_mod('sb_address_2'), " - ",
                "c.f. ", get_theme_mod('sb_cfisc'), " - ",
                "p.i. ", get_theme_mod('sb_piva'), " - ",
                esc_html_e('All rights reserved.', 'sb-base-theme')
            ?></p>

        </div>

    </footer> <!-- #footer-wrap -->

    <?php 
    
    get_template_part( 'templates/elements/backtotop', '' );
    
    wp_footer(); 
    
    ?>

</div> <!-- #site-wrap -->

</body>