   
<?php get_header(); ?>


<div class="site" style="margin:auto">
<div class="row">
    <div class="col-1"></div>
    <div class="col-6 mt-5">
    <?php  while(have_posts()) : the_post();?>







      <h2 class="blog-post-title"><?php the_title(); ?></h2>
      <hr>


      <p>
        <?php the_content(); ?>
      </p>






 
    <?php endwhile; ?>

    </div>


    <div class="col-1"></div>
    <div class="col-3"><?php require_once("sidebar.php"); ?></div>
</div>
</div>
<div class="row">
<?php get_footer(); ?>
</div>
   