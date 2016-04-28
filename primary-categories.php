<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Plugin Name: Primary Categories
 * Description: Enebles user to select a primary category for posts and custom posts types and display posts based on their primary categories.
 * Plugin URI: 
 * Author: Jacob McKinney
 * Version: 0.1.0
 * Author URI: http://jacobmckinney.com/
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright 2016 Jacob McKinney
 */


// include files containing meta box, shortcode, and custom query/loop
include 'pc-meta-box.php';
include 'pc-loop.php';
