<?php if ( post_password_required() ) {
	return;
} ?>

<!-- comments wrapper -->

<div class="comments-wrap mt-5">

    <?php if ( have_comments() ) { ?>

        <h2 class="comments-title mb-3">
            <?php comments_number(
                esc_html__('No comments yet.', 'sb-base-theme'),
                esc_html__('One comment.', 'sb-base-theme'),
                esc_html__('% comments.', 'sb-base-theme')
            ); ?>
        </h2>

        <ol class="comment-list">
            <?php wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 48,
            )); ?>
        </ol>

        <!-- comments navigation -->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>

            <nav class="navigation comment-navigation" role="navigation">

                <h1 class="screen-reader-text section-heading">
                    <?php esc_html_e('Comment navigation', 'sb-base-theme'); ?>
                </h1>

                <div class="nav-previous">
                    <?php previous_comments_link(esc_html__('&larr; Older Comments', 'sb-base-theme')); ?>
                </div>

                <div class="nav-next">
                    <?php next_comments_link(esc_html__('Newer Comments &rarr;', 'sb-base-theme')); ?>
                </div>

            </nav>
        
        <?php } ?>        

    <?php } ?>

    <!-- if closed comments -->

    <?php if ( ! comments_open() && get_comments_number() ) { ?>

        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'sb-base-theme'); ?></p>

    <?php } ?>

    <!-- comment form -->

    <?php comment_form( array(
        'class_submit'  => 'submit btn btn-primary',
    )); ?>

</div>