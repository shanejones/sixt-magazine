<?php
/**
 * Template Name: Wonders of the US Template
 * Description: A custom template for the Rise at Seven campaign
 */

remove_action('genesis_loop', 'genesis_do_loop');
remove_action('genesis_sidebar', 'genesis_do_sidebar');

function wous_stripped_genesis_loop() {
    do_action('genesis_before_entry_content');
    do_action('genesis_entry_content');
    do_action('genesis_after_entry_content');
} add_action('genesis_loop', 'wous_stripped_genesis_loop');

function wous_enqueue() {
    wp_enqueue_style('wous-custom-template-style', plugins_url('wous-template-style.css', __FILE__), array(), '1.4.0', 'all');

    wp_enqueue_style('lightslider-css', plugins_url('lightslider/lightslider.min.css', __FILE__), array(), '1.1.6');
    wp_enqueue_script('lightslider-js', plugins_url('lightslider/lightslider.min.js', __FILE__), array('jquery'), '1.1.6', true);

    wp_enqueue_style('tooltip-css', plugins_url('tooltip/zebra_tooltips.min.css', __FILE__), array(), '1.1.6');
    wp_enqueue_script('tooltip-js', plugins_url('tooltip/zebra_tooltips.min.js', __FILE__), array('jquery'), '1.1.6', true);
} add_action('wp_enqueue_scripts', 'wous_enqueue');


add_action('genesis_after_header', function () {
    include 'inc/feature-image.php';
});

get_header();
genesis();
get_footer();
