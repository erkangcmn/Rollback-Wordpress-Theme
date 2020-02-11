<?php 
function add_editor_style( $stylesheet = 'editor-style.css' ) {
    add_theme_support( 'editor-style' );
 
    if ( ! is_admin() ) {
        return;
    }
 
    global $editor_styles;
    $editor_styles = (array) $editor_styles;
    $stylesheet    = (array) $stylesheet;
    if ( is_rtl() ) {
        $rtl_stylesheet = str_replace( '.css', '-rtl.css', $stylesheet[0] );
        $stylesheet[]   = $rtl_stylesheet;
    }
 
    $editor_styles = array_merge( $editor_styles, $stylesheet );
}
?>