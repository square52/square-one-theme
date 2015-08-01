<?php
/**
 * Child Specific Functions
 *
 * Add custom functions for the child theme here.
 *
 * @package Squarechild
 * @since Squarechild 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 * Used to set the width of images and content. Should be equal to the width the theme is designed for, generally via the style.css stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 1170;

/* Add differnt thumbnail (featured image) sizes */
    add_image_size( 'gallery', 737, 500, true ); // gallery page size
    add_image_size( 'category', 770, 225, true ); // blog page size

/*  Register child widgetized areas (sidebar is in parent theme). */
function squarechild_widgets_init() {

		register_sidebar( array(
		'name'          => __( 'Home Left', 'squarechild' ),
		'id'            => 'home-left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home Middle', 'squarechild' ),
		'id'            => 'home-middle',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

		register_sidebar( array(
		'name'          => __( 'Home Right', 'squarechild' ),
		'id'            => 'home-right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


		register_sidebar( array(
		'name'          => __( 'Footer Left', 'squarechild' ),
		'id'            => 'Footer-left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Middle', 'squarechild' ),
		'id'            => 'Footer-middle',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

		register_sidebar( array(
		'name'          => __( 'Footer Right', 'squarechild' ),
		'id'            => 'Footer-right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'squarechild_widgets_init' );


function squarechild_add_masthead() { 
	get_template_part('templates/masthead');
 }
 add_action('squareone_before_opening_content', 'squarechild_add_masthead');

