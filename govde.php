
<!-- ========================GÖVDE================================== -->
<div class="govde">
<div class="container" style="width:90% ">
<?php 
$i=0;
while(have_posts()) : the_post();
if($i==0 || $i == 2 || $i == 4){
?>
<div class="row mt-3">
<?php 
}
$i++;
?>

<?php 
if($i > 0 && $i <= 4 ){

?>

  <div class="col-6">
    <div class="card" style="width: 21rem;margin:auto">
      <img class="card-img-top" src="http://localhost/wordpress/wp-content/uploads/2019/10/hack.png" alt="Card image cap">
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
      <div class="card" style="width: 45rem;margin:auto">
          <img class="card-img-top" src="http://localhost/wordpress/wp-content/uploads/2019/10/hack.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text">İlk içerik.</p>
            <a href="#" class="btn btn-primary">Devamını oku</a>
          </div>
        </div>
        </div>


<?php
}
if($i == 2 || $i == 4 || $i == 5){
?>
</div>
<?php
  
}
?>


<?php 

endwhile; ?>
  
    </div>
 </div>