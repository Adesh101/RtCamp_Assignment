<?php

// This function creates a custom hierarchical taxonomy Book Category

function wp_book_create_bookcategory_taxonomy() {

	$labels = array(
		'name'              =>  'Book Categories',
		'singular_name'     =>  'Book Category',
		'search_items'      =>  'Search Book Categories',
		'all_items'         =>  'All Book Categories',
		'parent_item'       =>  'Parent Book Category',
		'parent_item_colon' =>  'Parent Book Category:',
		'edit_item'         =>  'Edit Book Category',
		'update_item'       =>  'Update Book Category',
		'add_new_item'      =>  'Add New Book Category',
		'new_item_name'     =>  'New Book Category Name',
		'menu_name'         =>  'Book Category'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'This taxonomy shows the different categories of books',
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'bookcategory', array( 'book' ), $args );

}
add_action( 'init', 'wp_book_create_bookcategory_taxonomy' );
