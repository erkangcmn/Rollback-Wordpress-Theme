<?php 

add_theme_support( 'post-thumbnails' );

function tn_custom_excerpt_length( $length ) {
	return 10;
	}
	add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

	require get_template_directory() . '/inc/menus.php';

	require get_template_directory() . '/inc/sidebar_menus.php';

	require get_template_directory() . '/inc/widget.php';

	require get_template_directory() . '/inc/trendler.php';


function okuma_suresi($content='',$ks=180){
	$clean_content=strip_shortcodes($content);
	$clean_content=strip_tags($clean_content);
	$word_count=str_word_count($clean_content);
	$time=ceil($word_count/$ks);
	return $time;}	


/*Load more */	
function misha_my_load_more_scripts() {
 
	global $wp_query; 
 
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');
 
	// register our main script but do not enqueue it yet
	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/myloadmore.js', array('jquery') );
 
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore' );
}
 
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();
 
			// look into your theme code how the posts are inserted, but you can use your own HTML of course
			// do you remember? - my example is adapted for Twenty Seventeen theme
			//get_template_part( 'template-parts/post/content', get_post_format() );
			// for the test purposes comment the line above and uncomment the below one
			?>
			<div class="col-12 mt-3">
      <div class="card" style="margin:auto">
      <a href="<?php the_permalink(); ?>">

      <img src="<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url(); }
          else{ echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg';}?>" 
          style="width: 716px !important;height:360px !important;padding:1px !important;"/></a>

          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Devamını oku</a>
          </div>
        </div>
        </div>
 <?php
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
?>