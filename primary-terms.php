<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Plugin Name: Primary Terms
 * Description: Enables user to select a primary term for one taxonomy per post type and display posts based on their primary term.
 * Plugin URI: https://wordpress.org/plugins/primary-categories/
 * Author: jacobmc, jgangso
 * Version: 1.0.0
 * Author URI: http://jacobmckinney.com/
 * License: GNU GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright 2016 Jacob McKinney
 */

// Define constant for plugin path
define( 'PT_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

// include files containing meta box and shortcode
include PT_PLUGIN_PATH . 'classes/class-pt-meta-box.php';
include PT_PLUGIN_PATH . 'classes/class-pt-shortcode.php';
include PT_PLUGIN_PATH . 'classes/class-pt-definition.php';
include PT_PLUGIN_PATH . 'util/pt-template-tags.php';

function pt_init_plugin(){
	new PT_Meta_Box();

	if( apply_filters('pt_enable_shortcode', true) ) {
		new PT_Shortcode();
	}
}

add_action('plugins_loaded', 'pt_init_plugin');