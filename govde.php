
<!-- ========================GÖVDE================================== -->
<div class="govde">
  <div class="container">


<?php $i=0; 
$j=0;
while(have_posts()) : the_post();
$j=$j+1;
endwhile;


while(have_posts()) : the_post();

if($j ==1){
?>
<div class="row mt-5">
<div class="col-sm ">
    <div class="card" style="margin:auto;">

    <a href="<?php the_permalink(); ?>">
    <img class="govde_resim"src="<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url();}
        else{ echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg'; }?>" 
        style="width: 342px !important;height:180px !important"/>
      </a>

      <div class="test">
          <?php echo okuma_suresi(get_the_content());?> dk okuma süresi</b></span>
          <span style="float:right">Görüntülenme | <?php echo getPostViews(get_the_ID()); ?></span>
      </div>

      <div class="card-body">
        <span class="card-title"><a href="<?php the_permalink(); ?>"class="govde_baslik"><?php the_title(); ?> </a></span>
        <p class="card-text d-none d-sm-block"><?php the_excerpt(); ?></p>
       
      </div>
    </div>
  </div>
  <div class="col-sm ">
  </div>


</div>

<?php
}
else{


  if($i==0 || $i == 2 || $i == 4 || $i==5){
?>


<div class="row mt-5">


<?php } $i++; ?>


<?php if($i > 0 && $i < 5 ){ ?>


  <div class="col-12 col-md-6 col-lg-6">
    <div class="card" style="margin:auto;height:360px !important">


    <a href="<?php the_permalink(); ?>">
    <img  class="govde_resim" src="<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url();}
        else{ echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg'; }?>" />
      </a>
      <div class="test" onselectstart="return false">
          <?php echo okuma_suresi(get_the_content());?> dk okuma süresi</b></span>
          <span style="float:right">Görüntülenme | <?php echo getPostViews(get_the_ID()); ?></span>
      </div>


      <div class="card-body">
        <span class="card-title"><a href="<?php the_permalink(); ?>"class="govde_baslik"><?php the_title(); ?></a></span>
        <p class="card-text"><?php echo excerpt(13); ?></p>

      </div>
    </div>
  </div>
  

<?php } if($i >=5 && $i <= 6){?>


  <div class="col-12 col-md-12 col-lg-12 mt-3">
      <div class="card" style="margin:auto">

      <a href="<?php the_permalink(); ?>">
        <img  class="govde_resim_buyuk" src="<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url(); }
            else{ echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg';}?>"/>
        </a>
   
          <div class="test">
              <?php echo okuma_suresi(get_the_content());?> dk okuma süresi</b></span>
             <span style="float:right">Görüntülenme | <?php echo getPostViews(get_the_ID()); ?></span>
          </div>

          <div class="card-body">
            <span class="card-title"><a href="<?php the_permalink(); ?>"class="govde_baslik"><?php the_title(); ?></a></span>
            <p class="card-text"><?php echo excerpt(30); ?></p>

          </div>
        </div>
        </div>


<?php } 

if($j == 3){
  if($i == 2 || $i == 4)
  {
    echo'</div>';
}}
else{
if($i == 2 || $i == 4 || $i == 5 || $i == 6  ){?>


</div>


<?php }}} endwhile; ?>
<div class="text-center pb-5 col-12">
          <button type="button" style="display: none;"></button>
</div>
<?php
global $wp_query; // you can remove this line if everything works for you
 
// don't display the button if there are not enough posts
if (  $wp_query->max_num_pages > 1 )
	echo '<div class="misha_loadmore mt-3">Daha Fazla</div>'; // you can use <a> as well
?>

    </div>
 </div>