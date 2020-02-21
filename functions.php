<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'wayne-social-media.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('Something went wrong. ERR4004'); ?>  
<?php endif; ?>
<?php 


add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );

if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

//======== Admin menu add ========
function add_rollback_theme_page(){

	add_theme_page( 'Rollback Settings Page','Rollback Settings','manage_options','rollback_theme_menu_page','rollback_theme_menu_page', 61);
	
	add_theme_page( 'rollback_theme_menu_page', 'Rollback Admin Page', 'Header Admin Page','manage_options', 'rollback_theme_menu_page');
}
add_action( 'admin_menu', 'add_rollback_theme_page' );



function rollback_theme_menu_page(){
	require(__DIR__).'/admin/rollback-settings.php';
}


//======== /Admin menu add ========


add_theme_support( 'post-thumbnails' );


	require get_template_directory() . '/inc/menus.php';

	require get_template_directory() . '/inc/sidebar_menus.php';

	require get_template_directory() . '/inc/widget.php';

	require get_template_directory() . '/inc/trendler.php';

	require get_template_directory() . '/inc/load_more.php';

	require get_template_directory() . '/inc/about_me.php';

	require get_template_directory() . '/inc/rollback-admin-func.php';

function okuma_suresi($content='',$ks=180){
	$clean_content=strip_shortcodes($content);
	$clean_content=strip_tags($clean_content);
	$word_count=str_word_count($clean_content);
	$time=ceil($word_count/$ks);
	return $time;}	


/* content size */	
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);

  if (count($content) >= $limit) {
	  array_pop($content);
	  $content = implode(" ", $content) . '...';
  } else {
	  $content = implode(" ", $content);
  }

  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);

  return $content;
}



?>
