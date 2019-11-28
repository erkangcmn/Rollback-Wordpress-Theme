   
<?php get_header(); ?>


<div class="site" style="margin:auto">
<div class="row">
    <div class="col-1"></div>
    <div class="col-6 mt-5">
    <?php  while(have_posts()) : the_post();?>





      <div class="jumbotron jumbotron-fluid">
      <div class="container">
      <h2 class="display-4"><?php the_title(); ?></h2>
      <hr>
        <p class="lead"> <?php the_content(); ?></p>
      </div>
    </div>





 
    <?php endwhile; ?>

    </div>


    <div class="col-1"></div>
    <div class="col-3"><?php require_once("sidebar.php"); ?></div>
</div>
</div>
<div class="row">
<?php get_footer(); ?>
</div>
   