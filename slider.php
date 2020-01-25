
    <!-- ========================Slider================================== -->
    <div class="slider mt-2">
        <div class="row">
         <div class="col-12" style="width: 900px !important;">
         <?php
            if(get_option('header_code') == '#' || trim(get_option('header_code')) == ''){}
            else{ $i=get_option('header_code');} 
            echo do_shortcode($i);
                
            ?>


            </div> 
        </div> 
    </div>
    