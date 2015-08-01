<?php
/**
 * Enqueue scripts and styles
 * @package Squareone
 * @since Squareone 1.0
 */

function squareone_scripts() {
  wp_enqueue_style('squareone_normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css');
  wp_enqueue_style('squareone_foundation', get_stylesheet_directory_uri() . '/assets/css/foundation.min.css');
  wp_enqueue_style('squareone_custom_css', get_stylesheet_directory_uri() . '/assets/css/custom.css');
  wp_enqueue_style( 'squareone_dashicons', get_stylesheet_uri(), array( 'dashicons' ), '1.0' );

  wp_register_script('squareone_modernizr', get_stylesheet_directory_uri() . '/assets/js/vendor/modernizr.js', false, null, false);
  wp_register_script('squareone_foundation_js', get_stylesheet_directory_uri() . '/assets/js/foundation.min.js','','',true);
  wp_register_script('squareone_script_js', get_stylesheet_directory_uri() . '/assets/js/script.js','','',true);
  wp_register_script('squareone_plugins_js', get_stylesheet_directory_uri() . '/assets/js/plugins.js','','',true);

  wp_enqueue_script('jquery');
  wp_enqueue_script('squareone_modernizr');
  wp_enqueue_script('squareone_foundation_js');
  wp_enqueue_script('squareone_script_js');
  wp_enqueue_script('squareone_plugins_js');
}
add_action('wp_enqueue_scripts', 'squareone_scripts', 100);

