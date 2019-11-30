
        <!-- =========== SLİDERRRRRRR ================== -->
        
        
        <!-- =========== Logo ================== -->
<div class="row">
        <div class="header"> 
            <a href="<?php bloginfo('url'); ?>"><img src="http://localhost/wordpress/wp-content/uploads/2019/10/logo.jpg" alt="Erkan Göçmen Blog Sayfası" width="400px"></a>
            <hr>
        </div>
        </div> 


        <!-- =========== Navbar ================== -->
    <div class="row">
    <nav class="navbar navbar-expand-md ">

        <ul class="navbar-nav">
            <div class="col">
            <div class="baslik ">
   <?php if (function_exists(header_menus())) header_menus(); ?>
        </div>

            </div>

           
        </ul>
        </nav>
    </div> 
</div>
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