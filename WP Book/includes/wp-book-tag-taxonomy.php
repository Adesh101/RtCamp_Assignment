<?php 

//This function creates a non hierarchical taxonomy Book Tag

function wp_book_create_booktag_taxonomy() {

	$labels = array(
		'name'              =>  'Book Tags',
		'singular_name'     =>  'Book Tag',
		'search_items'      =>  'Search Book Tags',
		'all_items'         =>  'All Book Tags',
		'parent_item'       =>  'Parent Book Tag',
		'parent_item_colon' =>  'Parent Book Tag:',
		'edit_item'         =>  'Edit Book Tag',
		'update_item'       =>  'Update Book Tag',
		'add_new_item'      =>  'Add New Book Tag',
		'new_item_name'     =>  'New Book Tag Name',
		'menu_name'         =>  'Book Tag'
	);
	
	$args = array(
		'labels' => $labels,
		'description' => 'This taxonomy shows the different tags of books', 'wp_book',
		'hierarchical' => false,
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
	register_taxonomy( 'booktag', array('book'), $args );

}
add_action( 'init', 'wp_book_create_booktag_taxonomy' );
