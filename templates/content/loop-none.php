<div class="loop-none">

    <p>
        <?php if ( is_search() ) {

            esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sb-base-theme' );

        } else {

            esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sb-base-theme' );

        }; ?>
    </p>

    <?php get_search_form(); ?>
    
</div>