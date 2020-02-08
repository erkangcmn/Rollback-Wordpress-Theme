<?php
add_action( 'admin_menu', 'my_custom_menu' );

function my_custom_menu(){

    add_theme_page( 'custom-options', 'Edit Image', 'Edit Images', 'manage_categories', 'edit-images', function_to_handle_the_request );
}


function function_to_handle_the_request(){
   print '<div class="wrap">';

    $file = "/path-to-your-file";

    if ( file_exists( $file ) )
        require $file;

    print '</div>';
}


?>