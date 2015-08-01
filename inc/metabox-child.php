<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'squarechild_cmb_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function squarechild_cmb_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_sqcmb_';

/*Metaboxes for masthead section */
	$meta_boxes[] = array(
		'id'         => 'masthead-options',
		'title'      => 'Masthead Options',
		'pages'      => array( 'page' ), // Show on Pages
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name'    => 'Display Masthead',
				'desc'    => 'Check this box id you want to display the Masthead Section.',
				'id'      => $prefix . 'masthead_select',
				'type'    => 'checkbox',
				),
			array(
				'name'    => 'Masthead Content',
				'desc'    => 'Enter the content of the masthead section here. You can insert media, shortcodes, etc.',
				'id'      => $prefix . 'masthead_content',
				'type'    => 'wysiwyg',
				'options' => array(	'textarea_rows' => 5, ),
			),
			array(
	            'name' => 'Background Color',
	            'desc' => 'Choose a background color.',
	            'id'   => $prefix . 'masthead_bg_color',
	            'type' => 'colorpicker',
				'std'  => '#ffffff'
	        ),
	        array(
				'name' => 'Background Image',
				'desc' => 'Upload an image as the background. This will override the Background Color. (optional)',
				'id'   => $prefix . 'masthead_bg_image',
				'type' => 'file',
			),
		),
	);

/*Metaboxes for Portfolio Custom Post Type */
	$meta_boxes[] = array(
		'id'         => 'project-info',
		'title'      => 'Project Information',
		'pages'      => array( 'portfolio', ), // Show on Custom Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
				array(
				'name' => 'Website',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'website',
				'type' => 'text_medium',
			),
				array(
				'name' => 'Summary',
				'desc' => 'field description (optional)',
				'id'   => $prefix . 'summary',
				'type' => 'textarea',
			),
		),
	);

	// Add other metaboxes as needed
	return $meta_boxes;

}

