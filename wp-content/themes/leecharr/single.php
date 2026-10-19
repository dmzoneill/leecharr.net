<?php

/**
 * Single post template
 *
 * @package Leecharr
 */

get_header();
get_template_part(
    'template-parts/singular',
    null,
    array(
        'post_class' => 'post-card',
        'show_meta' => true,
    )
);
get_footer();
