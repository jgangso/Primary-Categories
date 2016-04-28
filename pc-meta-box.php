<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Register Meta Box
add_action( 'add_meta_boxes', 'pc_meta_box' );
function pc_meta_box() {

	$post_types = get_post_types();

	foreach ( $post_types as $post_type ) {

		if ( $post_type == 'page' ) {
			continue;
		}

		add_meta_box (
			'primary_category',
			'Primary Category',
			'pc_meta_box_content',
			$post_type,
			'side', // part of page
			'high' // priority
		);

	}
}

// Display Meta Box
function pc_meta_box_content() {

	global $post;

	$primary_category = '';

	$current_selected = get_post_meta( $post->ID, 'primary_category', true );

	if ( $current_selected != '' ) {
		$primary_category = $current_selected;
	}

	$post_categories = get_the_category();

	$html = '<select name="primary_category" id="primary_category">';

	foreach( $post_categories as $category ) {
		$html .= '<option value="' . $category->name . '" ' . selected( $primary_category, $category->name, false ) . '>' . $category->name . '</option>';
	}

	$html .= '</select>';

	echo $html;

}

// Save Data
add_action( 'save_post', 'pc_field_data' );
function pc_field_data() {
	global $post;

	if ( isset( $_POST[ 'primary_category' ] ) ) {

		$primary_category = $_POST[ 'primary_category' ];

		update_post_meta( $post->ID, 'primary_category', $primary_category );

	}

}