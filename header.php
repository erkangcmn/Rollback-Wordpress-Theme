<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">

    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rollback/css/blog.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rollback/css/search.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rollback/css/button.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rollback/css/social.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rollback/css/single.css">



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
<?php wp_footer();?>
    <div class="ust">
    <div class="contac"> 
      <div class="row">
              <!-- ============= Contac ================== -->
              <div class="col-3  d-none d-sm-block"></div>
                <div class="col-1  d-none d-sm-block"><span>|</span></div>

                <div class="col-12 col-md-4" style="width:100%">
                <?php if(get_option('wayne_footer_social_media_facebook') == '#' || trim(get_option('wayne_footer_social_media_facebook')) == ''){}
                else{
                ?>
                <a href="<?php get_option('wayne_footer_social_media_facebook'); ?>" class="rollback_header_social">Facebook</a>
                <?php }?>
                  <span>Instagram</span>
                  <span>Twitter</span>
                  <span>Gmail</span>
                  <span>Github</span>
                </div>

                <div class="col-1  d-none d-sm-block"><span>|</span></div>

                <div class="col-3  d-none d-sm-block">    
                  <form class="form-inline" action="<?php echo home_url( '/' ); ?>" method="get">
                      <div class="search__wrapper"> 
                        <input type="search" for="s" name="s" placeholder="Arama..." class="search__field" /> 
                        <button type="submit" class="fa fa-search search__icon"></button>
                      </div>
                   </form>
                </div>


              </div>
              </div> 
                      <!-- =========== Logo ================== -->
    <div class="row mt-2">
      <div class="header"> 
          <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo( 'name' ); ?></a>      
          <hr>
      </div>
    </div> 

        
        <!-- =========== Menus ================== -->


              <?php if (function_exists(header_menus())) header_menus(); ?>

            

      
      
  