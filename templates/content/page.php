<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (! has_post_thumbnail() ) { 
        
        the_title('<h1>', '</h1>');

    } ?>

    <div>
    
        <?php the_content(); 

        wp_link_pages(array(
            'before'        => '<nav class="nav"><span class="nav-link">' . esc_html__( 'Part:', 'sb-base-theme' ) . '</span>',
			'after'         => '</nav>',
			'link_before'   => '<span class="nav-link">',
			'link_after'    => '</span>',
		));
        
        ?>

    </div>

</article> <!-- #post-<?php the_ID(); ?> -->