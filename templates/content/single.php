<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h1><?php the_title(); ?></h1>

    <p><?php the_author(); ?> - <?php the_time('j M, Y'); ?></p>

    <p><?php the_category(', '); ?> - <?php the_tags('', ', ', ''); ?></p>

    <?php the_post_thumbnail('sb_single', array( 'class' => 'img-fluid' )); ?>

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