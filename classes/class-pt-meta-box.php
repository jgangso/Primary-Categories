<?php

class PT_Meta_Box {
    
    public function __construct() {
	    add_action( 'add_meta_boxes', array( $this, 'pt_meta_box' ) );
	    add_action( 'save_post', array( $this, 'pt_field_data' ) );
    }


    public function load_definitions(){
    	$this->definition = new PT_Definition();
    }
    
    public function pt_meta_box() {

    	$this->load_definitions();

    	// Retrieve all post types and add meta box to all post types, including custom post types
    	$post_types = $this->definition->get_post_type_array();
    
    	foreach ( $post_types as $post_type ) {
    
    		add_meta_box (
    			'primary_term',
    			$post_type['metabox_title'],
    			array( $this, 'pt_meta_box_content' ),
    			$post_type['slug'],
    			'side',
    			'default',
			    array( 'taxonomy' => $post_type['taxonomy'] )
    		);
    	}
    	
    }
    
    public function pt_meta_box_content( $post, $box ) {
        
        $primary_term = 0;
    
    	// Retrieve data from primary_term custom field
    	$current_selected = get_post_meta( $post->ID, 'primary_term', true );
    
    	// Set variable so that select element displays the set primary term on page load
    	if ( $current_selected !== '' ) {
    		$primary_term = $current_selected;
    	}
    
    	// Get list of terms associated with post
    	$post_terms = get_the_terms( $post->ID, $box['args']['taxonomy'] );

    	$html = '<select name="primary_term" id="primary_term">';
    
    	// Load each associated term into select element and display set primary term on page load
    	foreach( $post_terms as $term ) {
    		$html .= '<option value="' . $term->term_id . '" ' . selected( $primary_term, $term->term_id, false ) . '>' . $term->name . '</option>';
    	}
    
    	$html .= '</select>';
    
    	echo $html;
        
    }
    
    public function pt_field_data() {
        
        global $post;

    	if ( isset( $_POST[ 'primary_term' ] ) ) {
    
    		$primary_term = sanitize_text_field( $_POST[ 'primary_term' ] );
    
    		update_post_meta( $post->ID, 'primary_term', $primary_term );
    
    	}
        
    }
    
}