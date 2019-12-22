<?php 
get_header(); ?>
<div class="site">
<div class="row">
    <div class="d-none d-sm-block col-md-1"></div>
    <div class="col-12 col-md-6 col-lg-6" style="float:left">
    <?php  while(have_posts()) : the_post();?>





      <div class="jumbotron jumbotron-fluid mt-2">
      <div class="container">
      <h2 class="display-4"><?php the_title(); ?></h2>
      <hr>
        <p class="lead"> <?php the_content(); ?></p>
      </div>
    </div>





 
    <?php endwhile; ?>

    </div>


    <div class="d-none d-sm-block col-md-1"></div>
    <div class="col-12 col-md-4 col-lg-4" style="float:right"><?php require_once("sidebar.php"); ?></div>
</div>
</div>
<div class="footer">
<div class="row mt-5">
<?php get_footer(); ?>
</div>
</div>