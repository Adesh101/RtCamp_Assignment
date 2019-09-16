<?php

function wp_book_register_my_custom_menu_page(){
    
    add_submenu_page(
        'edit.php?post_type=book',   
        'Book Settings', 
        'Book Settings', 
        'manage_options', 
        'book_settings', 
        'wp_book_settings');
}
add_action( 'admin_menu', 'wp_book_register_my_custom_menu_page' );
 
function wp_book_settings(){

?>
<div class="wrap">
    <div class="icon32"><br/></div>
    <h2>Book Settings</h2>
    <table class="form-table">
	<tbody>
        <tr>
            <td>
                <div id="show-success" class="notice notice-success" style="display:none;"><p>Success notice</p></div>
            </td>
        </tr>
		<tr>
			<th scope="row"><label for="select_id">Select Currency</label></th>
			<td>
				<select name="select_id" id="select_id">
					<option selected="selected" value="option_one">U.S. Dollar</option>
					<option value="option_2">Rupees</option>
					<option value="option_3">Pounds</option>
					<option value="option_4">Dirham</option>
				</select>
			</td>
		</tr>
        <tr>
			<th scope="row"><label for="select_id">Number of Books Displayed</label></th>
			<td>
				<select name="select_id" id="select_id">
					<option selected="selected" value="option_one">0-1</option>
					<option value="option_2">1-3</option>
					<option value="option_3">3-5</option>
					<option value="option_4">5-10</option>
				</select>
			</td>
        </tr>
        <tr>
            <td>
                <input type="button" name="submit_button" class="button button-primary" value="Save Settings" onclick="showDiv()" />
            </td>    
        </tr>
	</tbody>
</table>
</div>


<?php
}
?>
<script>
    function showDiv() {
   document.getElementById('show-success').style.display = "block";
}
</script>