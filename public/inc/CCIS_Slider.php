<?php
defined( 'ABSPATH' ) || die();

require_once CCIS_PLUGIN_DIR_PATH . 'includes/CCIS_Helper.php';

class CCIS_Slider {
	public static function register_slider_post_type() {

		$labels = array(
			'name'               => esc_html_x( 'Clove Image Slider', 'General Name', 'ccis' ),
			'singular_name'      => esc_html_x( 'Clove Image Slider', 'Singular name', 'ccis' ),
			'add_new'            => esc_html__( 'Add New Image Slider', 'ccis' ),
			'add_new_item'       => esc_html__( 'Add New Image Slider', 'ccis' ),
			'edit_item'          => esc_html__( 'Edit Image Slider', 'ccis' ),
			'new_item'           => esc_html__( 'New Image Slider', 'ccis' ),
			'view_item'          => esc_html__( 'View Image Slider', 'ccis' ),
			'search_items'       => esc_html__( 'Search Image Slider', 'ccis' ),
			'not_found'          => esc_html__( 'No Image Slider found', 'ccis' ),
			'not_found_in_trash' => esc_html__( 'No Image Slider found in Trash', 'ccis' ),
			'parent_item_colon'  => esc_html__( 'Parent Image Slider:', 'ccis' ),
			'all_items'          => esc_html__( 'All Image Sliders', 'ccis' ),
			'menu_name'          => esc_html_x( 'Clove Image Slider', 'Menu Name', 'ccis' ),
		);

		$args = array(
			'labels'              => $labels,
			'hierarchical'        => false,
			'supports'            => array( 'title' ),
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 10,
			'menu_icon'           => 'dashicons-images-alt2',
			'show_in_nav_menus'   => false,
			'publicly_queryable'  => false,
			'exclude_from_search' => true,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => false,
			'capability_type'     => 'post',
		);

		register_post_type( 'ccis_slider', $args );
	}
}
