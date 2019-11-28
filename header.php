<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
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
                <div class="search__wrapper"> 
      <input type="text" name="" placeholder="Arama..." class="search__field" />
      <button type="submit" class="fa fa-search search__icon" style="height:32px !important;width:40px !important;color:white;background-color:rgb(36, 33, 33);"></button>

    </form></div>
    </div>


              </div>
              </div> 
              

      
      
  