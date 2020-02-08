<?php 
function register_my_menus() {
	register_nav_menus(
	  array(
		'header_menu' => __( 'Header Menu', 'rollback-blog' ),
		'404-menu' => __( '404 Menu', 'rollback-blog' ),
		'footer-menu' => __( 'Footer Menu', 'rollback-blog' ),
		'mobil-menu' => __( 'Mobil Menu', 'rollback-blog' )
	  )
	);
	
  }
  add_action( 'init', 'register_my_menus' );

/*  ------------------ Header Menu ------------------*/
function header_menus() {
	$menu_name = 'header_menu'; 
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = "";
		echo '<div class="d-none d-md-block d-lg-nonek"><div class="menus-flex">';
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
				echo"
				<div class='dropdown' style='text-align:center;margin:auto;padding:20px'>	
				<span><a href='$url'class='top_menu'>$title</a></span>
				<div class='dropdown-content' style='margin-top:5px'>";	
				$ust_menu = true;
			}
			else{
				echo "<a href='$url' class='dropdown-item'>$title</a>";
			}					
		}	
		echo'</div></div></div></div>';
	} else {}
}
/*  ------------------ Header Menu ------------------*/


/*  ------------------ Mobil Menu ------------------*/
function mobil_menus() {
	$menu_name = 'mobil-menu'; 
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = "";

		echo '<div class="col-12 col-md-12 col-lg-12"><ul class="navbar-nav mr-auto">';

		foreach ((array) $menu_items as $key => $menu_item) {
			$mip = $menu_item->menu_item_parent;
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_order = $menu_item->menu_order;


			$menu_list .= "<b><a href='$url'>$title </a></b>";

			if($mip == 0){			
				
				echo"  <li class='nav-item active'>
					<a class='nav-link' href='$url'>$title</a>
					</li>";

			}
			else{	
				
				echo "<li class='nav-item mobil_drop'>
					<a class='nav-link' href='$url'>$title</a>
					</li>";
			}		
			
		}	

		echo'</ul></div>';


	  
	
	} else {}

}
/* ------------------ Mobil Menu ------------------*/


/*  ------------------ 404 Menu ------------------*/
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
/*  ------------------ 404 Menu ------------------*/


/*  ------------------ Footer Menu ------------------*/
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
/*  ------------------ Footer Menu ------------------*/
?>
