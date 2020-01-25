

<!-- ========================GÖVDE================================== -->
<div class="govde">
  <div class="container">


<?php
$i = 0;
$j = 0;
while(have_posts()) : the_post();
$j = $j + 1;
endwhile;


while(have_posts()) : the_post();

if($j == 1){?>
<div class="row mt-5">
  <div class="col-sm ">
    <div class="card" style="margin:auto;">

      <a href="<?php the_permalink(); ?>">
        <img  class="govde_resim" src="<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url();}
        else{ echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg'; }?>" />
      </a>
      <div class="test">
        <span class="fa fa-comment"> 5</span>
        <span> | </span>
        <span class="fa fa-eye"aria-hidden="true"> </span> <?php echo getPostViews(get_the_ID()); ?>
      </div>
      <div class="card-body">
        <span class="card-title"><a href="<?php the_permalink(); ?>"class="govde_baslik"><?php the_title(); ?> </a></span>
        <p class="card-text" ><?php
            if ( wp_is_mobile() ) {echo excerpt(10);}
            else{echo excerpt(13);}?></p>
      </div>

    </div>
  </div>

  <div class="col-sm ">
  </div>


</div>

<?php
}
else{
  if ( wp_is_mobile() ) {
    echo'<div class="row mt-5">';
  }
  else{
  if($i==0 || $i == 2 || $i == 4 || $i==5){
?>


<div class="row mt-5">


<?php } }$i++; ?>


<?php if($i > 0 && $i < 5 ){ ?>


  <div class="col-12 col-sm-12 col-lg-6">
    <div class="card" style="margin:auto;height:100%;">


    <a href="<?php the_permalink(); ?>">
    <img  class="govde_resim" src="<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url();}
        else{ echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg'; }?>" />
      </a>
      <div class="test">
      <span class="fa fa-comment"> <?php echo get_comments_number(); ?></span>
        <span> | </span>
        <span class="fa fa-eye" aria-hidden="true"> </span> <?php echo getPostViews(get_the_ID()); ?>
      </div>


      <div class="card-body">
        <div class="card-title"><div class="govde_baslik_yazi"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></div>
        <p class="card-text" ><?php
            if ( wp_is_mobile() ) {echo excerpt(10);}
            else{echo excerpt(13);}?></p>

      </div>
    </div>
  </div>
  

<?php } if($i >=5 && $i <= 6){?>


  <div class="col-sm-6 col-md-12 mt-3">
      <div class="card" style="margin:auto">

      <a href="<?php the_permalink(); ?>">
        <img  class="govde_resim_buyuk" src="<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url(); }
            else{ echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg';}?>"/>
        </a>
   
        <div class="test">
        <span class="fa fa-comment"> 5</span>
        <span> | </span>
        <span class="fa fa-eye"aria-hidden="true"> </span> <?php echo getPostViews(get_the_ID()); ?>
      </div>


          <div class="card-body">
            <span class="card-title"><a href="<?php the_permalink(); ?>"class="govde_baslik"><?php the_title(); ?></a></span>
            <p class="card-text"><?php 
            if ( wp_is_mobile() ) {echo excerpt(10);}
            else{echo excerpt(30);}?></p>

          </div>
        </div>
        </div>


<?php } 
if ( wp_is_mobile() ) {
  echo'</div>';
}
else{
if($j == 3){
  if($i == 2 || $i == 4)
  {
    echo'</div>';
}}
else{
if($i == 2 || $i == 4 || $i == 5 || $i == 6  ){?>


</div>


<?php }}}} endwhile; ?>
<?php if(get_option('blog_home_page_widgets') == 'next_prev'){?>
<div class="next_prev col-12">
  <div class="sol_button">
    <?php previous_posts_link(); ?>
  </div>
  <div class="sag_button">
    <?php next_posts_link(); ?>
  </div>
</div>
<?php } else{ ?>

<div class="text-center pb-5 col-12">
<button type="button" style="display: none;"></button>
</div>
<?php
global $wp_query; // you can remove this line if everything works for you
 
// don't display the button if there are not enough posts
if (  $wp_query->max_num_pages > 1 )
	echo '<div class="misha_loadmore mt-3">Daha Fazla</div>'; // you can use <a> as well
?>
 <?php }?>
    </div>
 </div>