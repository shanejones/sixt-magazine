<?php

/**
 * Template Name: Rise - Full Width Template
 * Description: A custom template for the Rise at Seven campaign
 */

remove_action('genesis_loop', 'genesis_do_loop');
remove_action('genesis_sidebar', 'genesis_do_sidebar');

function wous_stripped_genesis_loop()
{
    do_action('genesis_before_entry_content');
    do_action('genesis_entry_content');
    do_action('genesis_after_entry_content');
}
add_action('genesis_loop', 'wous_stripped_genesis_loop');


get_header();
genesis();
get_footer();
