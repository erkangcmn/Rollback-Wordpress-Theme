<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/blog_sayfam/style.css">
    <?php wp_head(); ?>
    <title>
    <?php
    if(is_home()){
      echo"Anasayfa";
    }
    wp_title('');
    
    ?>
    </title>
    
</head>
<body style="background:#f5f5f5">
    <div class="ust">
    <div class="contac"> 
      <div class="row">
              <!-- ============= Contac ================== -->
              <div class="col-3"></div>
                <div class="col-1"><span>|</span></div>

                <div class="col-4">
                  <span>Instagram</span>
                  <span>Twitter</span>
                  <span>Gmail</span>
                  <span>Github</span>
                </div>
                <div class="col-1"><span>|</span></div>
                <div class="col-3">    
                <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Ara..." aria-label="Search" style="height:30px;width:160px;">
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="height:30px;">Arama</button>
    </form></div>


              </div>
              </div> 
              

      
      
  