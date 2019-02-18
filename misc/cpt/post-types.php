<?php

// Custom Post Type Generations

// Register Custom Post Type Barrister
function create_barrister_cpt() {

	$labels = array(
		'name' => _x( 'Barristers', 'Post Type General Name', 'sqe-custom' ),
		'singular_name' => _x( 'Barrister', 'Post Type Singular Name', 'sqe-custom' ),
		'menu_name' => _x( 'Barristers', 'Admin Menu text', 'sqe-custom' ),
		'name_admin_bar' => _x( 'Barrister', 'Add New on Toolbar', 'sqe-custom' ),
		'archives' => __( 'Barrister Archives', 'sqe-custom' ),
		'attributes' => __( 'Barrister Attributes', 'sqe-custom' ),
		'parent_item_colon' => __( 'Parent Barrister:', 'sqe-custom' ),
		'all_items' => __( 'All Barristers', 'sqe-custom' ),
		'add_new_item' => __( 'Add New Barrister', 'sqe-custom' ),
		'add_new' => __( 'Add New', 'sqe-custom' ),
		'new_item' => __( 'New Barrister', 'sqe-custom' ),
		'edit_item' => __( 'Edit Barrister', 'sqe-custom' ),
		'update_item' => __( 'Update Barrister', 'sqe-custom' ),
		'view_item' => __( 'View Barrister', 'sqe-custom' ),
		'view_items' => __( 'View Barristers', 'sqe-custom' ),
		'search_items' => __( 'Search Barrister', 'sqe-custom' ),
		'not_found' => __( 'Not found', 'sqe-custom' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'sqe-custom' ),
		'featured_image' => __( 'Featured Image', 'sqe-custom' ),
		'set_featured_image' => __( 'Set featured image', 'sqe-custom' ),
		'remove_featured_image' => __( 'Remove featured image', 'sqe-custom' ),
		'use_featured_image' => __( 'Use as featured image', 'sqe-custom' ),
		'insert_into_item' => __( 'Insert into Barrister', 'sqe-custom' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Barrister', 'sqe-custom' ),
		'items_list' => __( 'Barristers list', 'sqe-custom' ),
		'items_list_navigation' => __( 'Barristers list navigation', 'sqe-custom' ),
		'filter_items_list' => __( 'Filter Barristers list', 'sqe-custom' ),
	);
	$args = array(
		'label' => __( 'Barrister', 'sqe-custom' ),
		'description' => __( 'Post Type of Barrister', 'sqe-custom' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => array('title', 'thumbnail', 'page-attributes'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'barrister', $args );

}
add_action( 'init', 'create_barrister_cpt', 0 );

// Register Custom Post Type Area
function create_area_cpt() {

	$labels = array(
		'name' => _x( 'Areas', 'Post Type General Name', 'sqe-custom' ),
		'singular_name' => _x( 'Area', 'Post Type Singular Name', 'sqe-custom' ),
		'menu_name' => _x( 'Areas', 'Admin Menu text', 'sqe-custom' ),
		'name_admin_bar' => _x( 'Area', 'Add New on Toolbar', 'sqe-custom' ),
		'archives' => __( 'Area Archives', 'sqe-custom' ),
		'attributes' => __( 'Area Attributes', 'sqe-custom' ),
		'parent_item_colon' => __( 'Parent Area:', 'sqe-custom' ),
		'all_items' => __( 'All Areas', 'sqe-custom' ),
		'add_new_item' => __( 'Add New Area', 'sqe-custom' ),
		'add_new' => __( 'Add New', 'sqe-custom' ),
		'new_item' => __( 'New Area', 'sqe-custom' ),
		'edit_item' => __( 'Edit Area', 'sqe-custom' ),
		'update_item' => __( 'Update Area', 'sqe-custom' ),
		'view_item' => __( 'View Area', 'sqe-custom' ),
		'view_items' => __( 'View Areas', 'sqe-custom' ),
		'search_items' => __( 'Search Area', 'sqe-custom' ),
		'not_found' => __( 'Not found', 'sqe-custom' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'sqe-custom' ),
		'featured_image' => __( 'Featured Image', 'sqe-custom' ),
		'set_featured_image' => __( 'Set featured image', 'sqe-custom' ),
		'remove_featured_image' => __( 'Remove featured image', 'sqe-custom' ),
		'use_featured_image' => __( 'Use as featured image', 'sqe-custom' ),
		'insert_into_item' => __( 'Insert into Area', 'sqe-custom' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Area', 'sqe-custom' ),
		'items_list' => __( 'Areas list', 'sqe-custom' ),
		'items_list_navigation' => __( 'Areas list navigation', 'sqe-custom' ),
		'filter_items_list' => __( 'Filter Areas list', 'sqe-custom' ),
	);
	$args = array(
		'label' => __( 'Area', 'sqe-custom' ),
		'description' => __( 'Custom Post Type for Area', 'sqe-custom' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-site-alt3',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'area', $args );

}
add_action( 'init', 'create_area_cpt', 0 );