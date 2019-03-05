<?php

function sb_search_filter($query) {

    if ($query->is_search) {

        $query->set('post_type', array(
            'post',
        ));

    }

    return $query;
}

add_filter('pre_get_posts','sb_search_filter');

?>