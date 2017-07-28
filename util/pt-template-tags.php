<?php
/**
 * Author:  Johannes Gangsö <johannes@aikadesign.fi>
 * Since:   2017/06
 */

function the_primary_term( $post_id = null, $link = true, $echo = true ){

	if( null === $post_id ){
		$post_id = get_post()->ID;
	}

	$ptd      = new PT_Definition();
	$main_tax = $ptd->get_post_main_taxonomy( $post_id );

	$term_id = get_post_meta( $post_id, 'primary_term', true );

	$output = '';

	if( $term_id !== '' ){
		if( $link ){
			$output = sprintf('<a href="%1$s">%2$s</a>', get_term_link( (int) $term_id, $main_tax ), get_term( $term_id, $main_tax)->name );
		} else {
			$output = get_term( $term_id, $main_tax )->name;
		}
	}

	if( strlen( $output ) <= 0 ){
		return false;
	}

	if ( $echo ) {
		echo $output;
	}

	return $output;
}


function has_primary_term( $post_id = null ){
	return strlen( the_primary_term( $post_id, false, false ) ) > 0;
}