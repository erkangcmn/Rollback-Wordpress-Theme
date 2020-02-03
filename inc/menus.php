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
		echo '<div class="menus-flex">';
		$ust_menu = false;
		foreach ((array) $menu_items as $key => $menu_item) {
			$mip = $menu_item->menu_item_parent;
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_order = $menu_item->menu_order;


			$menu_list .= "<b><a href='$url'>$title </a></b>";

			if($mip == 0){
				if($ust_menu){
					echo '</div></div>';
					$ust_menu = false;
				}

				echo '
				<div class="dropdown " style="text-align:center;margin:auto;padding:20px">
				<span  data-toggle="dropdown"><a class="top_menu">'.$title.'</a></span>
				<div class="dropdown-content" style="margin-top:5px">';		
				$ust_menu = true;
			}
			else{
				echo "<a href='$url' class='dropdown-item'>$title</a>";
			}		
			
		}	

		echo'</div></div></div>';


	  
	
	} else {

	}

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
			<div class='col-12 col-md-2 col-lg-2'>
			<li> 
			<b><a href='$url'>$title </a>
			</b>
			</li>
			</div>";
			
		}
	} else {
	}
	echo "<ul> ".$menu_list."</ul> ";
}



?>