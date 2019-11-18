
<!-- ========================GÖVDE================================== -->
<div class="govde">
<div class="container">
<?php 
$i=0;
while(have_posts()) : the_post();
if($i==0 || $i == 2 || $i == 4 || $i==5){
?>
<div class="row mt-3">
<?php 
}
$i++;
?>


<?php 
if($i > 0 && $i < 5 ){

?>

  <div class="col-6">
    <div class="card" style="margin:auto">
    <a href="<?php the_permalink(); ?>"><img src="<?php if ( has_post_thumbnail() ) {
	echo the_post_thumbnail_url();
}
else{
  echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg';
}
?>" style="width: 340px !important;height:180px !important;padding:1px !important;"/></a>
      <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_content(); ?></p>
        <a href="#" class="btn btn-primary">Devamını oku</a>
      </div>
    </div>
  </div>
  

<?php 
}
?>
<?php 
if($i >=4 && $i <= 6){
?>

  <div class="col-12 mt-3">
      <div class="card" style="margin:auto">
      <a href="<?php the_permalink(); ?>"><img src="<?php if ( has_post_thumbnail() ) {
	echo the_post_thumbnail_url();
}
else{
  echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg';
}
?>" style="width: 716px !important;height:360px !important;padding:1px !important;"/></a>
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text">İlk içerik.</p>
            <a href="#" class="btn btn-primary">Devamını oku</a>
          </div>
        </div>
        </div>


<?php
}
if($i == 2 || $i == 4 || $i == 5 || $i == 6  ){
?>
</div>
<?php
  
}
?>


<?php 

endwhile; ?>
  
    </div>
 </div>