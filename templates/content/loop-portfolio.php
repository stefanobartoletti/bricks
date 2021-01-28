<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item col my-3'); ?>>

    <div class="card">

        <?php the_post_thumbnail('sb_square', array( 'class' => 'card-img h-auto' )); ?>

        <a href="<?php the_permalink(); ?>">
            <div class="card-img-overlay">
                <h2 class="card-title h4 text-white"><?php the_title(); ?></h2>
            </div>
        </a>

    </div>

</article> <!-- #post-<?php the_ID(); ?> -->