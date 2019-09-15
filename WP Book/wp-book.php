<?php
/**
 * @package WP Book
 */
/*
Plugin Name: WP Book
Plugin URI: 
Description: Plugin assignment for RtCamp
Version: 1.0.0
Author: Adesh Pingle
Author URI: 
License: GPLv2 or later
Text Domain: wp_book

Assignment is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Assignment is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Assignment.
*/

if ( ! defined ('ABSPATH') ) {
	exit;
}

require 'includes/wp-book-custom-post.php';
require 'includes/wp-book-category-taxonomy.php';
require 'includes/wp-book-tag-taxonomy.php';
require 'includes/wp-book-meta-box.php';



