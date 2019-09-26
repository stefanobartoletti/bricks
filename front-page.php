<?php get_header(); ?>

<main id="content-wrap">

    <section id="sect-slider">

        <?php
        
        $sb_args = array(
            'post_type' => 'post',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'slider',
                ),
            ),
            'posts_per_page'    => 3,
        );
        
        set_query_var( 'sb_args', $sb_args );          
        get_template_part( 'templates/sections/slider', '' );
        
        ?>

    </section> <!-- #sect-slider -->

    <section id="sect-services" class="container py-5">

        <?php
        
        $sb_args = array(
            'post_type' => 'post',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'news',
                ),
            ),
            'posts_per_page'    => 3,
        );
        
        set_query_var( 'sb_args', $sb_args );         
        get_template_part( 'templates/sections/services', '' );
        
        ?>

    </section> <!-- #sect-services -->

    <section id="sect-news" class="container py-5">

        <?php
        
        $sb_args = array(
            'post_type' => 'post',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'news',
                ),
            ),
            'posts_per_page'    => 3,
        );
        
        set_query_var( 'sb_args', $sb_args );    
        get_template_part( 'templates/sections/news', '' );
        
        ?>

    </section> <!-- #sect-news -->
 
</main> <!-- #content-wrap -->

<?php get_footer();