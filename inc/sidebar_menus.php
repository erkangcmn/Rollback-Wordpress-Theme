<?php 
register_sidebar(
    array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '',
        'after_widget' => '<hr>'


        
    )
);


register_sidebar(
    array(
        'name' => 'Footer',
        'id' => 'footer',
        'before_widget' => ' <div class="col-sm">',
        'after_widget' => '</div>'


        
    )
);

?>