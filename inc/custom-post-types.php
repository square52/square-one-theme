<?php
/**
 * custom post type files and associated taxonomies
 *
 * @package Squareone
 * @since Squareone 1.0
 */

/****************************************************************** 
*
Custom Post Type Icons
*
******************************************************************/

add_action( 'admin_head', 'cpt_icons' );
function cpt_icons() {
    ?>
    <style type="text/css" media="screen">
        #menu-posts-portfolio .wp-menu-image {
            background: url(<?php echo get_stylesheet_directory_uri() ?>/assets/img/folder-open-image.png) no-repeat 6px -17px !important;
        }
    #menu-posts-portfolio:hover .wp-menu-image, #menu-posts-portfolio.wp-has-current-submenu .wp-menu-image {
            background-position:6px 7px!important;
        }
        #menu-posts-testimonial .wp-menu-image {
            background: url(<?php echo get_stylesheet_directory_uri() ?>/assets/img/users.png) no-repeat 6px -17px !important;
        }
    #menu-posts-testimonial:hover .wp-menu-image, #menu-posts-testimonial.wp-has-current-submenu .wp-menu-image {
            background-position:6px 7px!important;
        }
    </style>
<?php }

/****************************************************************** 
*
Add and register custom post type for Portfolio
*
******************************************************************/

add_action( 'init', 'register_square_cpt_portfolio' );

function register_square_cpt_portfolio() {

    $labels = array( 
        'name' => _x( 'Portfolio', 'portfolio' ),
        'singular_name' => _x( 'Portfolio Item', 'portfolio' ),
        'add_new' => _x( 'Add New', 'portfolio' ),
        'add_new_item' => _x( 'Add New Portfolio Item', 'portfolio' ),
        'edit_item' => _x( 'Edit Portfolio Item', 'portfolio' ),
        'new_item' => _x( 'New Portfolio Item', 'portfolio' ),
        'view_item' => _x( 'View Portfolio Item', 'portfolio' ),
        'search_items' => _x( 'Search Portfolio', 'portfolio' ),
        'not_found' => _x( 'No portfolio found', 'portfolio' ),
        'not_found_in_trash' => _x( 'No portfolio found in Trash', 'portfolio' ),
        'parent_item_colon' => _x( 'Parent Portfolio Item:', 'portfolio' ),
        'menu_name' => _x( 'Portfolio', 'portfolio' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array( 'post_tag' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 21,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'portfolio', $args );
}

/*Taxonomies for portfolio custom post type*/
function square_portfolio_taxonomies() {
    // Add new "services" taxonomy to Portfolio Posts
    register_taxonomy('service', 'portfolio', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x( 'Services', 'taxonomy general name' ),
            'singular_name' => _x( 'service', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search services' ),
            'all_items' => __( 'All services' ),
            'parent_item' => __( 'Parent service' ),
            'parent_item_colon' => __( 'Parent service:' ),
            'edit_item' => __( 'Edit service' ),
            'update_item' => __( 'Update service' ),
            'add_new_item' => __( 'Add New service' ),
            'new_item_name' => __( 'New service Name' ),
            'menu_name' => __( 'Services' ),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'services', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/services/"
            'hierarchical' => true // This will allow URL's like "/services/boston/cambridge/"
        ),
    ));
}
add_action( 'init', 'square_portfolio_taxonomies', 0 );


/****************************************************************** 
*
Add and register custom post type for Testimonial
*
******************************************************************/

add_action( 'init', 'register_square_cpt_Testimonial' );


function register_square_cpt_Testimonial() {

    $labels = array( 
        'name' => _x( 'Testimonial', 'Testimonial' ),
        'singular_name' => _x( 'Testimonial', 'Testimonial' ),
        'add_new' => _x( 'Add New', 'Testimonial' ),
        'add_new_item' => _x( 'Add New Testimonial', 'Testimonial' ),
        'edit_item' => _x( 'Edit Testimonial', 'Testimonial' ),
        'new_item' => _x( 'New Testimonial', 'Testimonial' ),
        'view_item' => _x( 'View Testimonial', 'Testimonial' ),
        'search_items' => _x( 'Search Testimonials', 'Testimonial' ),
        'not_found' => _x( 'No Testimonials found', 'Testimonial' ),
        'not_found_in_trash' => _x( 'No Testimonials found in Trash', 'Testimonial' ),
        'parent_item_colon' => _x( 'Parent Testimonial:', 'Testimonial' ),
        'menu_name' => _x( 'Testimonials', 'Testimonial' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'thumbnail' ),
        'taxonomies' => array( 'platform' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 22,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Testimonial', $args );
}

