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
		$order_list = "";
		$i = 0;
		foreach ((array) $menu_items as $key => $menu_item) {
			$mip = $menu_item->menu_item_parent;
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_order = $menu_item->menu_order;


			$menu_list .= "<b><a href='$url'>$title </a></b>";
			$order_list .= $mip;
			/*if($mip > 0){
				$i++;
				if($i == 1){
					echo '<b>Önceki menünün numarası</b>'.($menu_order - 1).'<br>';
				}

				echo 'Menu number -> '.$menu_order.' i nin yeni değeri = '.$i.'<br>';

			}			
			elseif($mip == 0){
				$i = 0;
				if($mip == 0){
					$i = 0;		
					echo 'Menu number -> '.$menu_order.' i nin yeni değeri = '.$i.'<br>';		
	
				}
				elseif(($i != 0) && ($mip == 0)){
					echo 'Menu number -> '.$menu_order.' i nin yeni değeri = '.$i.'<br>';
				}
				
				
				

			}*/
			

		}	
		echo $order_list;
	
	} else {

	}
	
	
		/* 
		$menu_item_parent 0 ise ve alt menüsü yok ise menünün tasarımı normal olacak 
		$menu_item_parent 0 dan farklı ise alt menü olarak eklenecek ve ana menünün tasarımı dropdown olacak
		$menu_item_parent 0 oluncada aynı kontrolleri tekrar yapacak
		*/
		
			echo "<div class='row mt-5 mb-5 ml-0 mr-0  d-none d-sm-block' >
			<div class=' col-sm submit-wrapper' style='padding-left:0 auto;padding-right:0 auto;text-align: center'>".$menu_list."</div></div>";
		
	

	


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
		// $menu_list = '<!-- no list defined -->';
	}
	echo "<ul> ".$menu_list."</ul> ";
}



?>