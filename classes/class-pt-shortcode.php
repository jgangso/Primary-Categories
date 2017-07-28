<?php

class PT_Shortcode {
    
    public function __construct() {
        
        add_shortcode( 'primary-term', array( $this, 'pt_display' ) );
        
    }
    
    public function pt_display( $atts ) {
        
        // Set valid shortcode attributes
    	$a = shortcode_atts( array(
    		'name' => 'uncategorized'
    	), $atts );
    
    	// Set query args to display any post type with a primary term set to name attribute from shortcode
    	$pt_query_args = array( 
    		'post_type'     => apply_filters('pt_post_type_query', 'any'),
    		'meta_key'      => 'primary_term',
    		'meta_value'    => $a['name'] 
    	);
    
    	// Create custom query
    	$pt_query = new WP_Query( $pt_query_args );
    
    	// Loop through posts returned by query
    	if( $pt_query->have_posts() ) {
    
    		echo '<ul>';
    	
    		while ( $pt_query->have_posts() ) {
    
    			$pt_query->the_post();
    
    			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
    
    		}
    
    		echo '</ul>';
    
    	} else {
    	    
    	    echo __( 'Sorry, there are no posts with that primary term.', 'primary-terms');
    	    
    	}
    
    	// reset postdata
    	wp_reset_postdata();
        
    }
}