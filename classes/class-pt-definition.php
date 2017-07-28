<?php

/**
 * Author:  Aikadesign Oy (JG) <tuki@aikadesign.fi>
 * Since:   2017/06
 *
 */
class PT_Definition {

	private $definition;

	public function __construct() {
		$post_types = get_post_types();
		$def = [];

		foreach ( $post_types as $i => $post_type ) {

			if ( $post_type !== 'page' ) {
				$def[ $post_type ] = [
					'slug'          => $post_type,
					'metabox_title' => __( 'Primary Term', 'primary-terms' ),
					'taxonomy'      => 'category'
				];
			}
		}

		$this->definition = $def;
	}

	public function get_post_type_array() {
		return apply_filters( 'pt_enabled_post_types', $this->definition );
	}



	public function get_post_main_taxonomy( $post_id ){
		$post = get_post( $post_id );

		return $this->get_post_type_array()[ $post->post_type ]['taxonomy'];
	}
}