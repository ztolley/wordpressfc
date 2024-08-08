<?php
/**
 * Wordpress FC functions and definitions
*/

/**
 * Registers a custom post type 'team'.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wordpressfc_register_my_custom_post_type() : void {
	$labels = [
		'name' => _x( 'Teams', 'Post Type General Name', 'wordpressfc' ),
		'singular_name' => _x( 'Team', 'Post Type Singular Name', 'wordpressfc' ),
		'menu_name' => __( 'Teams', 'wordpressfc' ),
		'name_admin_bar' => __( 'Teams', 'wordpressfc' ),
		'archives' => __( 'Teams Archives', 'wordpressfc' ),
		'attributes' => __( 'Teams Attributes', 'wordpressfc' ),
		'parent_item_colon' => __( 'Parent Team:', 'wordpressfc' ),
		'all_items' => __( 'All Teams', 'wordpressfc' ),
		'add_new_item' => __( 'Add New Team', 'wordpressfc' ),
		'add_new' => __( 'Add New', 'wordpressfc' ),
		'new_item' => __( 'New Team', 'wordpressfc' ),
		'edit_item' => __( 'Edit Team', 'wordpressfc' ),
		'update_item' => __( 'Update Team', 'wordpressfc' ),
		'view_item' => __( 'View Team', 'wordpressfc' ),
		'view_items' => __( 'View Teams', 'wordpressfc' ),
		'search_items' => __( 'Search Teams', 'wordpressfc' ),
		'not_found' => __( 'Team Not Found', 'wordpressfc' ),
		'not_found_in_trash' => __( 'Team Not Found in Trash', 'wordpressfc' ),
		'featured_image' => __( 'Featured Image', 'wordpressfc' ),
		'set_featured_image' => __( 'Set Featured Image', 'wordpressfc' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'wordpressfc' ),
		'use_featured_image' => __( 'Use as Featured Image', 'wordpressfc' ),
		'insert_into_item' => __( 'Insert into Team', 'wordpressfc' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'wordpressfc' ),
		'items_list' => __( 'Teams List', 'wordpressfc' ),
		'items_list_navigation' => __( 'Teams List Navigation', 'wordpressfc' ),
		'filter_items_list' => __( 'Filter Teams List', 'wordpressfc' ),
	];
	$labels = apply_filters( 'team-labels', $labels );

	$args = [
		'label' => __( 'Team', 'wordpressfc' ),
		'description' => __( 'Details for a team that plays for the club', 'wordpressfc' ),
		'labels' => $labels,
		'supports' => [
			'title',
			'editor',
			'excerpt',
			'thumbnail',
		],
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-groups',
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'can_export' => false,
		'capability_type' => 'page',
		'show_in_rest' => true,
	];
	$args = apply_filters( 'team-args', $args );

	register_post_type( 'team', $args );
}
add_action( 'init', 'wordpressfc_register_my_custom_post_type', 0 );
