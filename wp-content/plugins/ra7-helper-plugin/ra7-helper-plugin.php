<?php

/**
 * Plugin Name:       Rise at Seven Helper Plugin
 * Plugin URI:        https://riseatseven.com
 * Description:       A collection of Gutenberg blocks using Genesis custom blocks for Rise at Seven landing Pages.
 * Requires at least: 5.9
 * Tested up to:      6.1
 * Requires PHP:      7.0
 * Version:           100.0.38
 * Author:            Rise at Seven
 * Author URI:        https://shanejones.co.uk
 * Text Domain:       rise-at-seven-blocks
 *
 * @package            rise-at-seven-blocks
 */


 // excessive version number to always override the gravity custom blocks version
define('RAS_HP_VERSION', '100.0.38');

/**
 * Exit if accessed directly.
 */
if (!defined('ABSPATH')) {
  exit;
}


function ras_hp_get_blocks_template_path($path)
{
  unset($path);
  return __DIR__;
}
add_filter('genesis_custom_blocks_template_path', 'ras_hp_get_blocks_template_path');


function ras_hp_load()
{
  wp_enqueue_script('jquery');
  wp_enqueue_style('ras-hp-styles', plugins_url('style.css', __FILE__), array(), RAS_HP_VERSION, 'all');
}
add_action('init', 'ras_hp_load');

function ras_hp_enqueue_full_width_styles()
{
  if (is_page_template('full-width.php')) {
    wp_enqueue_style('ras-hp-full-width-styles', plugins_url('templates/full-width-styles.css', __FILE__), array(), RAS_HP_VERSION, 'all');
  }
}
add_action('wp_enqueue_scripts', 'ras_hp_enqueue_full_width_styles');


function ras_hp_custom_template($template)
{
  if (is_single() && get_post_meta(get_the_ID(), '_wp_page_template', true) == 'full-width.php') {
    $template = plugin_dir_path(__FILE__) . '/templates/full-width.php';
  }
  return $template;
}
add_filter('template_include', 'ras_hp_custom_template');


function ras_hp_add_my_custom_templates($templates)
{
  $templates['full-width.php'] = 'Full Width Template';
  return $templates;
}
add_filter('theme_post_templates', 'ras_hp_add_my_custom_templates');

/**
 * Use the below if we're having caching issues
 */


function ras_override_block_scripts()
{
    global $wp_scripts, $wp_styles;

    if (!is_singular()) {
        return;
    }

    $post_id = get_the_ID();
    if (!$post_id) {
        return;
    }

    $content = get_post_field('post_content', $post_id);
    $blocks_on_page = parse_blocks($content);

    if (empty($blocks_on_page)) {
        return;
    }

    $ra7_blocks = [];
    foreach ($blocks_on_page as $block) {
        if (isset($block['blockName']) && strpos($block['blockName'], 'genesis-custom-blocks/') === 0) {
            $ra7_blocks[] = str_replace('genesis-custom-blocks/', '', $block['blockName']);
        }
    }
    $ra7_blocks = array_unique($ra7_blocks);

    foreach ($ra7_blocks as $block_name) {
        // Update CSS version - Genesis Custom Blocks uses this handle format with double underscores
        $style_handle = 'genesis-custom-blocks__block-' . $block_name;
        if (isset($wp_styles->registered[$style_handle])) {
            $wp_styles->registered[$style_handle]->ver = RAS_HP_VERSION;
        }

        // Update JS version - The script handle is defined in the block's `block.php` file
        $script_handle = $block_name . '-js';
        if (isset($wp_scripts->registered[$script_handle])) {
            $wp_scripts->registered[$script_handle]->ver = RAS_HP_VERSION;
        }
    }
}
add_action('wp_print_footer_scripts', 'ras_override_block_scripts', 1);


/** Shortcodes */
include 'shortcodes/social-sharing.php';
include 'shortcodes/hoagie-hunter-table.php';

// Register Hoagie Hunter Table shortcode
function register_ra7_shortcodes() {
    add_shortcode('hoagie_hunter_table', 'ra7_hoagie_hunter_table_shortcode');
}
add_action('init', 'register_ra7_shortcodes');
