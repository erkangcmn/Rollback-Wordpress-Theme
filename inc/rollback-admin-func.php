<?php 
if(!empty($_SERVER['SCRIPT_FILENAME']) && 'wayne-admin-func.php' == basename($_SERVER['SCRIPT_FILENAME'])) : 
     die('Something went wrong. ERR4004'); 
 endif; 


/* Instagram */
function rollback_ajax_social_media_instagram(){
    update_option('rollback_social_media_instagram', sanitize_text_field($_POST['data']));
    wp_die();
}
add_action( 'wp_ajax_rollback_ajax_social_media_instagram', 'rollback_ajax_social_media_instagram');


/* Twitter */
function rollback_ajax_social_media_twitter(){
    update_option('rollback_social_media_twitter', sanitize_text_field($_POST['data']));
    wp_die();
}
add_action( 'wp_ajax_rollback_ajax_social_media_twitter', 'rollback_ajax_social_media_twitter');


/* Gmail */
function rollback_ajax_social_media_gmail(){
    update_option('rollback_social_media_gmail', sanitize_text_field($_POST['data']));
    wp_die();
}
add_action( 'wp_ajax_rollback_ajax_social_media_gmail', 'rollback_ajax_social_media_gmail');


/* Github */
function rollback_ajax_social_media_github(){
    update_option('rollback_social_media_github', sanitize_text_field($_POST['data']));
    wp_die();
}
add_action( 'wp_ajax_rollback_ajax_social_media_github', 'rollback_ajax_social_media_github');


/* facebook */
function rollback_ajax_social_media_facebook(){
    update_option('rollback_social_media_facebook', sanitize_text_field($_POST['data']));
    wp_die();
}
add_action( 'wp_ajax_rollback_ajax_social_media_facebook', 'rollback_ajax_social_media_facebook');


/* LinkedIn */
function rollback_ajax_social_media_linkedin(){
    update_option('rollback_social_media_linkedin', sanitize_text_field($_POST['data']));
    wp_die();
}
add_action( 'wp_ajax_rollback_ajax_social_media_linkedin', 'rollback_ajax_social_media_linkedin');


/* pinterest */
function rollback_ajax_social_media_pinterest(){
    update_option('rollback_social_media_pinterest', sanitize_text_field($_POST['data']));
    wp_die();
}
add_action( 'wp_ajax_rollback_ajax_social_media_pinterest', 'rollback_ajax_social_media_pinterest');

/* youtube */
function rollback_ajax_social_media_youtube(){
    update_option('rollback_social_media_youtube', sanitize_text_field($_POST['data']));
    wp_die();
}
add_action( 'wp_ajax_rollback_ajax_social_media_youtube', 'rollback_ajax_social_media_youtube');

?>
