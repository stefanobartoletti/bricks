    </div> <!-- #page-wrap -->

    <footer id="footer-wrap" class="bg-dark text-light">

        <?php

        get_template_part( 'templates/footer/footer', 'simple' ); 
        get_template_part( 'templates/footer/footer', 'copyright' ); 
        
        ?>

    </footer> <!-- #footer-wrap -->

    <?php 
    
    get_template_part( 'templates/elements/backtotop', '' );
    
    wp_footer(); 
    
    ?>

</div> <!-- #site-wrap -->

</body>