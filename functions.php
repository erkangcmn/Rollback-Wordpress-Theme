<?php 

add_theme_support( 'post-thumbnails' );

function tn_custom_excerpt_length( $length ) {
	return 10;
	}
	add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

	require get_template_directory() . '/inc/menus.php';

	require get_template_directory() . '/inc/sidebar_menus.php';

	require get_template_directory() . '/inc/wiget.php';

	require get_template_directory() . '/inc/trendler.php';
?>