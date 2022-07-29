<?php 
defined('ABSPATH') or die("No script kiddies please!");
$labels = array(
		'name'               => _x( 'banner slider', 'post type general name', 'wpbs-slider' ),
		'singular_name'      => _x( 'banner slider', 'post type singular name', 'wpbs-slider' ),
		'menu_name'          => _x( 'banner slider', 'admin menu', 'wpbs-slider' ),
		'name_admin_bar'     => _x( 'banner slider', 'add new on admin bar', 'wpbs-slider' ),
		'add_new'            => _x( 'Add New', 'banner slider', 'wpbs-slider' ),
		'add_new_item'       => __( 'Add New banner slider', 'wpbs-slider' ),
		'new_item'           => __( 'New banner slider', 'wpbs-slider' ),
		'edit_item'          => __( 'Edit banner slider', 'wpbs-slider' ),
		'view_item'          => __( 'View banner slider', 'wpbs-slider' ),
		'all_items'          => __( 'All banner sliders', 'wpbs-slider' ),
		'search_items'       => __( 'Search banner sliders', 'wpbs-slider' ),
		'parent_item_colon'  => __( 'Parent banner sliders:', 'wpbs-slider' ),
		'not_found'          => __( 'No banner sliders found.', 'wpbs-slider' ),
		'not_found_in_trash' => __( 'No banner sliders found in Trash.', 'wpbs-slider' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'wpbs-slider' ),
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'   		 => 'dashicons-admin-generic',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'wpbs-slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title')
	);
