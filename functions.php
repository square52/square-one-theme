<?php
/**
 * Square One functions and definitions
 *
 * @package Square One
 */

/** Start the engine */
require_once( TEMPLATEPATH . '/lib/init.php' );

/*Load scripts and styles.*/
require( get_stylesheet_directory() . '/lib/load-scripts.php' );
/*Load custom functions.*/
require( get_stylesheet_directory() . '/lib/custom.php' );
/*Load Hooks & Filters.*/
require( get_stylesheet_directory() . '/lib/hooks.php' );
/*Load Custom Post Types.*/
require( get_stylesheet_directory() . '/lib/cpt.php' );

