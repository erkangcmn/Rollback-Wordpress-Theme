
    <?php get_header(); ?>


<div class="site" style="margin:auto">
<div class="row">
    <div class="col-1"></div>
    <div class="col-6 mt-5">
    <?php  while(have_posts()) : the_post();?>
<img src="<?php if ( has_post_thumbnail() ) {
	echo the_post_thumbnail_url();
}
else{
  echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg';
}
?>" style="width: 744px !important;height:350px !important;padding:1px !important;"/>






      <h2 class="blog-post-title"><?php the_title(); ?></h2>
      <hr>
      <span><?php the_date("d M y"); ?></span>
      <span><?php the_author_posts_link(); ?></span>
      <span style="float:right"><?php the_category(", "); ?></span>
      <p>
        <?php the_content(); ?>
      </p>






    <div class="yorumlar">
    <?php comments_template();?>
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
   