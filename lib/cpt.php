<?php 


// Sample Custom Post Type
if ( ! function_exists('squareone_sample_post_type') ) {

// Register Custom Post Type
function squareone_sample_post_type() {

	$labels = array(
		'name'                => _x( 'Samples', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Sample', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Samples', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Sample:', 'text_domain' ),
		'all_items'           => __( 'All Samples', 'text_domain' ),
		'view_item'           => __( 'View Sample', 'text_domain' ),
		'add_new_item'        => __( 'Add New Sample', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Sample', 'text_domain' ),
		'update_item'         => __( 'UpdateSample', 'text_domain' ),
		'search_items'        => __( 'Search Samples', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'sample', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'thumbnail', 'title'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-aside',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'sample', $args );

}

// Hook into the 'init' action
add_action( 'init', 'squareone_sample_post_type', 0 );

}

function squareone_taxonomy() {  
    register_taxonomy(  
        'samplecategories',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'sample',        //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'sample Category',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'sample', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'squareone_taxonomy');