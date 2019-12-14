<?php 
function register_my_menus() {
	register_nav_menus(
	  array(
		'header_menu' => __( 'Header Menu' ),
		'404-menu' => __( '404 Menu' ),
		'footer-menu' => __( 'Footer Menu' ),
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
		$i=0;
		foreach ((array) $menu_items as $key => $menu_item) {
			$i++;
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "
			

			<span class='ml-4'><b><a href='$url'>$title </a></b></span>";
			
		}
	} 
	

		echo "<div class='row mt-5 mb-5 ml-0 mr-0' >
		<div class=' submit-wrapper col-12 col-md-12 col-lg-12  d-none d-sm-block'>".$menu_list."</div></div>";


}

/* ------------------404 Menus--------------- */
function error_menus() {
	$menu_name = '404-menu'; 
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = "";
	
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "
			<div class='col-2'>
			<div class=''> 
			<b><a href='$url'>$title </a>
			</b>
			</div>
			</div>";
			
		}
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo "<div class='row mt-5 mb-5'><div class='col-3' ></div>".$menu_list." <div class='col-3' ></div></div>";
}
/* ------------------Footer Menus--------------- */
function footer_menus() {
	$menu_name = 'footer-menu'; 
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = "";
	
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "
			<div class='col-2'>
			<li> 
			<b><a href='$url'>$title </a>
			</b>
			</li>
			</div>";
			
		}
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo "<ul> ".$menu_list."</ul> ";
}



?>