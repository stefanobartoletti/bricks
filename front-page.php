<?php get_header() ?>

<main class="content-wrap">

<section class="section-wrap element-slider">

    <?php $sb_slider_args = array(
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
    
    set_query_var( 'sb_slider_args', $sb_slider_args );
        
    get_template_part( 'template-parts/section', 'slider' ); ?>

</section>

<section class="section-wrap element-cards container py-5">

    <h2>News</h2>

    <?php $sb_cards_args = array(
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
    
    set_query_var( 'sb_cards_args', $sb_cards_args );
        
    get_template_part( 'template-parts/section', 'cards' ); ?>

</section>
 
</main>

<?php get_footer() ?>