<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Projects.
	 */

	$labels = array(
		"name" => __( 'Projects', 'spidex-software' ),
		"singular_name" => __( 'Project', 'spidex-software' ),
	);

	$args = array(
		"label" => __( 'Projects', 'spidex-software' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "projects", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-analytics",
		"supports" => array( "title" ),
	);

	register_post_type( "projects", $args );

	/**
	 * Post Type: Events.
	 */

	$labels = array(
		"name" => __( 'Events', 'spidex-software' ),
		"singular_name" => __( 'Event', 'spidex-software' ),
	);

	$args = array(
		"label" => __( 'Events', 'spidex-software' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "support/events", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-tickets-alt",
		"supports" => array( "title" ),
	);

	register_post_type( "events", $args );

	/**
	 * Post Type: Products.
	 */

	$labels = array(
		"name" => __( 'Products', 'spidex-software' ),
		"singular_name" => __( 'Product', 'spidex-software' ),
	);

	$args = array(
		"label" => __( 'Products', 'spidex-software' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "products", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-cart",
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "products", $args );

	/**
	 * Post Type: Articles.
	 */

	$labels = array(
		"name" => __( 'Articles', 'spidex-software' ),
		"singular_name" => __( 'Article', 'spidex-software' ),
		"menu_name" => __( 'What\'s new', 'spidex-software' ),
	);

	$args = array(
		"label" => __( 'Articles', 'spidex-software' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "articles", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-media-document",
		"supports" => array( "title", "editor", "thumbnail" ),
		"taxonomies" => array( "category" ),
	);

	register_post_type( "articles", $args );

	/**
	 * Post Type: Resources.
	 */

	$labels = array(
		"name" => __( 'Resources', 'spidex-software' ),
		"singular_name" => __( 'Resource', 'spidex-software' ),
	);

	$args = array(
		"label" => __( 'Resources', 'spidex-software' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "resources", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-book",
		"supports" => array( "title" ),
		"taxonomies" => array( "post_tag" ),
	);

	register_post_type( "resources", $args );

	/**
	 * Post Type: Partners.
	 */

	$labels = array(
		"name" => __( 'Partners', 'spidex-software' ),
		"singular_name" => __( 'Partner', 'spidex-software' ),
	);

	$args = array(
		"label" => __( 'Partners', 'spidex-software' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "partners", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => array( "title" ),
	);

	register_post_type( "partners", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );