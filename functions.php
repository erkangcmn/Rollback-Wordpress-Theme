<?php 

add_theme_support( 'post-thumbnails' );



	require get_template_directory() . '/inc/menus.php';

	require get_template_directory() . '/inc/sidebar_menus.php';

	require get_template_directory() . '/inc/widget.php';

	require get_template_directory() . '/inc/trendler.php';

	require get_template_directory() . '/inc/load_more.php';

	require get_template_directory() . '/inc/about_me.php';


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
