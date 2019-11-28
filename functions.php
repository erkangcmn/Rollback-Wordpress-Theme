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
		'blog_sayfam' => __( 'Header Menu' ),
		'extra-menu' => __( 'Extra Menu' )
	  )
	);
  }
  add_action( 'init', 'register_my_menus' );

// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
	$menu_name = 'blog_sayfam'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = "";
		$color_i = 0;
		$color_class_list = ['primary', 'danger', 'warning', 'success', 'primary', 'danger', 'warning', 'success', 'primary', 'danger', 'warning', 'success'];
		foreach ((array) $menu_items as $key => $menu_item) {
			$color = $color_class_list[$color_i];
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "<a class='btn btn-outline-$color header-menu-item ml-2' href='$url'>$title </a>";
			$color_i += 1;
		}
		$menu_list .= "<a href='#' class='header-menu-item ml-2 md-2'><i class='fas fa-search ml-3 text-danger'></i></a>";
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}

?>