<?php
/* Create Custom Post Type */
	
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'List Products', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Products', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Product', 'twentythirteen' ),
        'all_items'           => __( 'All Products', 'twentythirteen' ),
        'view_item'           => __( 'View Product', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Product', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Product', 'twentythirteen' ),
        'update_item'         => __( 'Update Product', 'twentythirteen' ),
        'search_items'        => __( 'Search Product', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Products', 'twentythirteen' ),
        'description'         => __( 'Product news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => true,
         
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Products', $args );
 
}

add_action('init','custom_post_type');