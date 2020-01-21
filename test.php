<?php
add_action( 'admin_menu', 'my_custom_menu' );

function my_custom_menu(){

    //add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null )



    //add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '' );

    add_submenu_page( 'custom-options', 'Edit Image', 'Edit Images', 'manage_categories', 'edit-images', function_to_handle_the_request );
}


function function_to_handle_the_request(){
   print '<div class="wrap">';

    $file = "/path-to-your-file"; //get_stylesheet_directory() may be helpful

    if ( file_exists( $file ) )
        require $file;

    print '</div>';
}


?>