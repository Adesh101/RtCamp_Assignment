<?php

//This function creates a custom post type

function wp_book_register_post_type(){
    
    $labels = array(
		'name'               => 'Books',
		'singular_name'      => 'Book',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Book',
		'edit_item'          => 'Edit Book',
		'new_item'           => 'New Book',
		'all_items'          => 'All Books',
		'view_item'          => 'View Book',
		'search_items'       => 'Search Books',
		'not_found'          => 'No books found',
		'not_found_in_trash' => 'No books found in Trash',
		'parent_item_colon'  => 'Parent Item',
		'menu_name'          => 'Books'
	);
 
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'         => array('category', 'post_tag'),
        'exclude_from_search'=> false 
	);
    register_post_type( 'book', $args );
}

add_action('init', 'wp_book_register_post_type');
