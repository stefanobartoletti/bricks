<?php

/**
 * https://stackoverflow.com/a/9885744/10580177
 * 
 */

function sb_search_filter($query) {

    if ($query->is_search) {

        $query->set('post_type', array(
            'post',
        ));

    }

    return $query;
}

add_filter('pre_get_posts','sb_search_filter');