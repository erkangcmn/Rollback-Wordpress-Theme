<?php
function misha_my_load_more_scripts() {
 
	global $wp_query; 
 
	wp_enqueue_script('jquery');
 
	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/myloadmore.js', array('jquery') );
 
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

$args = json_decode( stripslashes( $_POST['query'] ), true );
$args['paged'] = $_POST['page'] + 1; 
$args['post_status'] = 'publish';

query_posts( $args );

if( have_posts() ) :

    while( have_posts() ): the_post();
 
        ?>
        
    <div class="row mt-5">
        <div class="col-12 mt-3">
            <div class="card" style="margin:auto">

                <a href="<?php the_permalink(); ?>">
                    <img  class="govde_resim_buyuk" src="<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url(); }
                        else{ echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg';}?>" 
                        style="width: 100% !important;height:360px !important;padding:1px !important;"/>
                    </a>
    
                    <div class="test">
                        <?php echo okuma_suresi(get_the_content());?> dk okuma süresi</b></span>
                        <span style="float:right">Görüntülenme | <?php echo getPostViews(get_the_ID()); ?></span>
                    </div>

                <div class="card-body">
                    <span class="card-title"><a href="<?php the_permalink(); ?>"class="govde_baslik"><?php the_title(); ?></a></span>
                    <p class="card-text"><?php the_excerpt(); ?></p>

                </div>
            </div>
        </div>
    </div>

<?php

    endwhile;

endif;
echo'<script>$(document).ready(function(){
    $(".govde_resim_buyuk").hover(function(){
      $(this).parent().parent().children(".test").css({
        "visibility" : "visible",
        "transition" : ".3s linear",
        "opacity" : "1",
        "top" : "25px",
        "background-color":"rgba(0, 0, 0, 0.2)", 
        "padding":"2px",
        "padding-left":"4px",
        "padding-right":"4px",
        "color":"white"})
      }, function(){
      $(this).parent().parent().children(".test").css({
        "visibility" : "hidden", 
        "transition" : ".3s linear", 
        "opacity" : "0",
         "top" : "25px",

        })
        
    });
  });</script>';
die;
}



add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}