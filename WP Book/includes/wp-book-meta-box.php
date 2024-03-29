<?php
   
function wp_book_create_bookinfo_metabox() {

    $id = 'wp_book_meta';
    $title = 'Book Information';
    $callback = 'wp_book_meta_callback';
    $screen = 'book';
    $context = 'side';
    $priority = 'high';

    add_meta_box($id, $title, $callback, $screen, $context, $priority);
}

add_action('add_meta_boxes', 'wp_book_create_bookinfo_metabox');

function wp_book_meta_callback( $post ) {
    
        wp_nonce_field( plugin_basename(__FILE__), 'wp_book_nonce_name' );

    ?>

    <div>
        <div>
            <label for="book_id">Book ID</label>
        </div>
        <div>
            <input type="text" name="book_id" id="book_id" />
        </div>        
    </div>
    
    <div>
        <div>
            <label for="author_name">Author Name</label>
        </div>
        <div>
            <input type="text" name="author_name" id="author_name" />
        </div>        
    </div>
    
    <div>
        <div>
            <label for="price">Price</label>
        </div>
        <div>
            <input type="text" name="price" id="price" />
        </div>        
    </div>

    <div>
        <div>
            <label for="publisher">Publisher</label>
        </div>
        <div>
            <input type="text" name="publisher" id="publisher" />
        </div>        
    </div>

    <div>
        <div>
            <label for="year">Year</label>
        </div>
        <div>
            <input type="text" name="year" id="year" />
        </div>        
    </div>

    <div>
        <div>
            <label for="edition">Edition</label>
        </div>
        <div>
            <input type="text" name="edition" id="edition" />
        </div>        
    </div>

    <div>
        <div>
            <label for="url">URL</label>
        </div>
        <div>
            <input type="text" name="url" id="url" />
        </div>        
    </div>
 
    <?php
}

