<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

function pc_display( $atts ) {

	$a = shortcode_atts( array(
		'name' => 'uncategorized'
	), $atts );

	$pc_query_args = array( 
		'post_type' => 'any', 
		'meta_key' => 'primary_category', 
		'meta_value' => $a['name'] 
	);

	$pc_query = new WP_Query( $pc_query_args );

	while ( $pc_query->have_posts() ) {

		$pc_query->the_post();

		echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';

	}

	wp_reset_postdata();

}
add_shortcode( 'primary_category', 'pc_display' );