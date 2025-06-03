<?php

/**
 * Plugin Name:       Rise at Seven Helper Plugin
 * Plugin URI:        https://riseatseven.com
 * Description:       A collection of Gutenberg blocks using Genesis custom blocks for Rise at Seven landing Pages.
 * Requires at least: 5.9
 * Tested up to:      6.1
 * Requires PHP:      7.0
 * Version:           100.0.2
 * Author:            Rise at Seven
 * Author URI:        https://shanejones.co.uk
 * Text Domain:       rise-at-seven-blocks
 *
 * @package            rise-at-seven-blocks
 */



 // excessive version number to always override the gravity custom blocks version
define('RAS_HP_VERSION', '100.0.2');

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
function ras_override_style_import()
{
  $post_id = get_the_ID();

  $blocks = array_map(function($dir) {
    return basename($dir);
  }, glob(__DIR__ . '/blocks/*', GLOB_ONLYDIR));


  foreach ($blocks as $block) {
    if (has_block('genesis-custom-blocks/' . $block, $post_id)) {

      $handle = 'genesis-custom-blocks__block-' . $block;
      $blocks_url = plugins_url() . '/ra7-helper-plugin/blocks/';

      unregister_block_style('genesis-custom-blocks', 'block-' . $block);
      wp_enqueue_style(
        $handle,
        $blocks_url . '/' . $block . '/block.css',
        array(),
        RAS_HP_VERSION
      );
    }
  }
}
add_action('enqueue_block_assets', 'ras_override_style_import');


/** Shortcodes */
include 'shortcodes/social-sharing.php';
include 'shortcodes/hoagie-hunter-table.php';

// Register Hoagie Hunter Table shortcode
function register_ra7_shortcodes() {
    add_shortcode('hoagie_hunter_table', 'ra7_hoagie_hunter_table_shortcode');
}
add_action('init', 'register_ra7_shortcodes');
