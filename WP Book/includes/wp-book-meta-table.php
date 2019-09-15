<?php

global $wp_book_db_version;
$wp_book_db_version = '1.0';

function wp_book_create_table() {
	global $wpdb;
	global $wp_book_db_version;

	$table_name = $wpdb->prefix . 'book';
	
	$charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(10) NOT NULL AUTO_INCREMENT,
        author_name text NOT NULL,
        price text NOT NULL,
        publisher text NOT NULL,
        year text NOT NULL,
        edition text NOT NULL,
        url text NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'wp_book_db_version', $wp_book_db_version );
}

function wp_book_insert_data_in_table() {

    global $wpdb;
	
    $author_name = 'Author Name';
    $price = 'Price';
    $publisher = 'Publisher';
    $year = 'Year';
    $edition = 'Edition';
    $url = 'URL';

	$table_name = $wpdb->prefix . 'book';
	
	$wpdb->insert( 
		$table_name, 
		array(  
			'author_name' => $author_name, 
            'price' => $price,
            'publisher' => $publisher,
            'year' => $year,
            'edition' => $edition,
            'url' => $url 
        ) 
    );
}