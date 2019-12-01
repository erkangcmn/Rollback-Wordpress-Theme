
        <!-- =========== SLİDERRRRRRR ================== -->
        
        
        <!-- =========== Logo ================== -->
<div class="row">
        <div class="header"> 
            <a href="<?php bloginfo('url'); ?>"><img src="http://localhost/wordpress/wp-content/uploads/2019/10/logo.jpg" alt="Erkan Göçmen Blog Sayfası" width="400px"></a>
            <hr>
        </div>
        </div> 


        <!-- =========== Navbar ================== -->


   <?php if (function_exists(header_menus())) header_menus(); ?>


    <!-- ========================Slider================================== -->
    <div class="slider mt-2">
        <div class="row">
         <div class="col-12" style="width: 900px !important;">
            <?php
                echo do_shortcode('[smartslider3 slider=6]');
            ?> 
            </div> 
        </div> 
    </div>