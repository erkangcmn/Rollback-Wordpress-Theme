<?php 
register_sidebar(
    array(
        'name' => 'Menu',
        'id' => 'menu',
        'before_widget' => '<li>',
        'after_widget' => '</li><hr>'


        
    )
);
add_theme_support( 'post-thumbnails' );

function tn_custom_excerpt_length( $length ) {
	return 10;
	}
	add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );


function register_my_menus() {
	register_nav_menus(
	  array(
		'header_menu' => __( 'Header Menu' ),
		'extra-menu' => __( 'Extra Menu' )
	  )
	);
  }
  add_action( 'init', 'register_my_menus' );


function header_menus() {
	$menu_name = 'header_menu'; 
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = "";
	
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "<b><a class='baslik' href='$url'>$title </a></b>";
		}
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}


/* */

?>