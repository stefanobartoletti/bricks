<?php get_header(); ?>

<main id="content-wrap">

    <section id="sect-slider">

        <?php
        
        $args = array(
            'post_type' => 'post',
            'posts_per_page'    => 3,
        );
            
        get_template_part( 'templates/sections/home', 'slider', $args );
        
        ?>

    </section> <!-- #sect-slider -->

    <section id="sect-services">

        <?php
        
        $args = array(
            'post_type' => 'post',
            'posts_per_page'    => 3,
        );
              
        get_template_part( 'templates/sections/home', 'services', $args );
        
        ?>

    </section> <!-- #sect-services -->

    <section id="sect-cta">

        <?php
        
        $args = array(
            'post_type' => 'post',
            'posts_per_page'    => 1,
        );
        
        get_template_part( 'templates/sections/home', 'cta', $args );
        
        ?>

    </section> <!-- #sect-news -->
 
    <section id="sect-news">

        <?php
        
        $args = array(
            'post_type' => 'post',
            'posts_per_page'    => 3,
        );
        
        get_template_part( 'templates/sections/home', 'news', $args );
        
        ?>

    </section> <!-- #sect-news -->
 
</main> <!-- #content-wrap -->

<?php get_footer();