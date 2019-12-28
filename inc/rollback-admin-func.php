<?php 
if(!empty($_SERVER['SCRIPT_FILENAME']) && 'wayne-admin-func.php' == basename($_SERVER['SCRIPT_FILENAME'])) : 
     die('Something went wrong. ERR4004'); 
 endif; 

function wayne_ajax_footer_social_media_facebook(){
    update_option('wayne_footer_social_media_facebook', sanitize_text_field($_POST['data']));
    wp_die();
}


add_action( 'wp_ajax_wayne_ajax_footer_social_media_facebook', 'wayne_ajax_footer_social_media_facebook');

?>