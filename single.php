
    <?php get_header(); ?>

<div class="site" style="margin:auto">
<div class="row">
    <div class="d-none d-sm-block col-md-1"></div>
    <div class="col-12 mt-5 col-md-6 col-lg-6">
    <?php  while(have_posts()) : the_post();?>

<img class="single_img" src="<?php if ( has_post_thumbnail() ) {
	echo the_post_thumbnail_url();
}
else{
  echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg';
}
?>"/>






<div style="font-size:14px; margin-top:15px;">
      <span><img class="img-fluid" src="<?php $user_id = get_the_author_meta('ID');
            echo get_avatar_url($user_id, 80); ?>" alt="Profile Photo" 
            style="
            border-radius: 50% !important;
            width: 30px;
            height: 30px;" /></span>
          

      <span><?php the_author_posts_link(); ?> | </span>
      
      <span class="reading_time">
      <?php echo okuma_suresi(get_the_content());?> dk okuma süresi</span>
      <span><?php the_date("d M y"); ?></span>
     <?php setPostViews(get_the_ID()); ?>
      
      <span style="float:right"><?php the_category(", "); ?></span>
      </div>
      <div class="bottom-border mt-5"> <h1 class="blog-post-title"><?php the_title(); ?></h1></div>
      <p>
        <?php the_content(); ?>
        
      </p>
    







    <?php endwhile; ?>
  <div class="yorumlar mt-5">
    <?php comments_template(); ?>

  </div>

    </div>


    <div class="d-none d-sm-block col-md-1"></div>
    <div class="col-12 col-md-4 col-lg-4"><?php require_once("sidebar.php"); ?></div>
</div>
</div>


<div class="footer">
<div class="row" style="margin-top:30%">
<?php get_footer(); ?>
</div>
</div>
   