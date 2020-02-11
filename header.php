<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rollback-wordpress-theme/css/wordpress.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rollback-wordpress-theme/css/blog.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rollback-wordpress-theme/css/search.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rollback-wordpress-theme/css/button.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rollback-wordpress-theme/css/social.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rollback-wordpress-theme/css/single.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <?php wp_head(); ?>

</head>
<body style="background:#f5f5f5" <?php body_class(); ?>>
<?php wp_footer();?>
<div class="ust">
  <div class="contac"> 
    <div class="row">
      <!-- ============= Contac ================== -->
      <div class="col-sm  d-none d-sm-block"></div>
      <div class="col-1  d-none d-sm-block"><span>|</span></div>

      <div class="col-6 col-md-5 col-sm-12 d-none d-md-block d-lg-nonek col-md-1" style="width:100%">
        <?php if(get_option('rollback_social_media_instagram') == '#' || trim(get_option('rollback_social_media_instagram')) == ''){}
        else{
        ?>
        <a href="<?php echo get_option('rollback_social_media_instagram'); ?>"target="_blank" class="rollback_header_social"><i class="fa fa-instagram"> </i></a>
        <?php }if(get_option('rollback_social_media_twitter') == '#' || trim(get_option('rollback_social_media_twitter')) == ''){}
        else{
        ?>
        <a href="<?php echo get_option('rollback_social_media_twitter'); ?> "target="_blank" class="rollback_header_social"><i class="fa fa-twitter"></i></a>
        <?php }if(get_option('rollback_social_media_gmail') == '#' || trim(get_option('rollback_social_media_gmail')) == ''){}
        else{
        ?>
        <a href="<?php echo get_option('rollback_social_media_gmail'); ?> "target="_blank" class="rollback_header_social"><i class="fa fa-google"></i></a>
        <?php }if(get_option('rollback_social_media_github') == '#' || trim(get_option('rollback_social_media_github')) == ''){}
        else{
        ?>
        <a href="<?php echo get_option('rollback_social_media_github'); ?> "target="_blank" class="rollback_header_social"><i class="fa fa-github"></i></a>
        <?php }if(get_option('rollback_social_media_facebook') == '#' || trim(get_option('rollback_social_media_facebook')) == ''){}
        else{
        ?>
        <a href="<?php echo get_option('rollback_social_media_facebook'); ?> "target="_blank" class="rollback_header_social"><i class="fa fa-facebook"></i></a>
        <?php}if(get_option('rollback_social_media_linkedin') == '#' || trim(get_option('rollback_social_media_linkedin')) == ''){}
        else{
        ?>
        <a href="<?php echo get_option('rollback_social_media_linkedin'); ?> "target="_blank" class="rollback_header_social"><i class="fa fa-linkedin"></i></a>
        <?php }if(get_option('rollback_social_media_pinterest') == '#' || trim(get_option('rollback_social_media_pinterest')) == ''){}
        else{
        ?>
        <a href="<?php echo get_option('rollback_social_media_pinterest'); ?> "target="_blank" class="rollback_header_social"><i class="fa fa-pinterest"></i></a>
        <?php }if(get_option('rollback_social_media_youtube') == '#' || trim(get_option('rollback_social_media_youtube')) == ''){}
        else{
        ?>
        <a href="<?php echo get_option('rollback_social_media_youtube'); ?> "target="_blank" class="rollback_header_social"><i class="fa fa-youtube"></i></a>
        <?php }?>
      </div>

<div class="col-1  d-none d-sm-block"><span>|</span></div>


<div class="col-sm  d-none d-sm-block">    
  <form class="form-inline" action="<?php echo home_url( '/' ); ?>" method="get">
      <div class="search__wrapper"> 
        <input type="search" for="s" name="s" placeholder="Arama..." class="search__field" /> 
        <button class="fa fa-search search__icon"></button>
      </div>
    </form>
</div>


  </div>
</div> 
<!-- Mobil Header -->
<?php
if ( wp_is_mobile() ) {?>
<div class="pos-f-t" style="float:left">

<nav class="navbar navbar-dark ">
    <button class="navbar-toggler"type="button" data-toggle="collapse" style="background-color:#0e4796;" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
</nav>

</div>


<div class="contac" > 

     <?php if(get_option('blog_name_widgets') == 'enable'){?>
       <div class="row">
         <div class="header"> 
           <a href="<?php esc_url('url'); ?>"><?php echo bloginfo( 'name' ); ?></a>      
           <hr>
         </div>
       </div> 
     <?php } ?>

</div> 
<div class="collapse" id="navbarToggleExternalContent">

<div class="mobil_navbar">
  <div class="col-12 col-md-12 col-lg-12">    
  <form role="search" action="<?php echo home_url( '/' ); ?>" method="get" style="margin:0px">
    <div id="custom-search-input">
      <div class="input-group">
        <input type="text" class="search-query form-control"for="s" name="s" placeholder="Search..." />
        <span class="input-group-btn"><button type="submit"><span class="fa fa-search"></span></button></span>
      </div>
    </div>
  </form>
  </div>

  <?php if (function_exists(mobil_menus())) mobil_menus(); ?>
  
  </div>
</div>

<?php } else{ ?>
<!-- =========== Logo ================== -->
<?php if(get_option('blog_name_widgets') == 'enable'){?>
  
<div class="row mt-2">
  <div class="header"> 
      <a href="<?php esc_url('url'); ?>"><?php echo bloginfo( 'name' ); ?></a>      
      <hr>
  </div>
</div> 
<?php }else{} ?>

<?php } ?>

<!-- Mobil Header -->



<?php if(get_option('blog_slogan_widgets') == 'enable'){?>
  <div class="slogan">
    <?php echo get_bloginfo( 'description' ); ?>
  </div>
<?php }else{} ?>

<!-- =========== Menus ================== -->
<?php if (function_exists(header_menus())) header_menus(); ?>



      
      
  