<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/blog_sayfam/style.css">
    <title>
    <?php
    if(is_home()){
      echo"Anasayfa";
    }
    wp_title('');
    
    ?>
    </title>
    
</head>
<body>
    <div class="ust">
      <div class="row">
              <!-- ============= Contac ================== -->
              <div class="contac"> 
                WhatsApp
                Gmail
                Instagram
              </div>
            </div> 

      
      
  