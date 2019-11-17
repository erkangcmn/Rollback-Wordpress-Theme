<?php 
register_sidebar(
    array(
        'name' => 'Menu',
        'id' => 'menu',
        'before_widget' => '<li>',
        'after_widget' => '</li><hr>'


        
    )
);
add_theme_support( 'post-thumbnails' );
?>