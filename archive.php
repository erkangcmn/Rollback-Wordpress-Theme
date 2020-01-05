<?php get_header(); 

?>

<div class="site">
<?php if(is_category()){
$categories = get_the_category();




if ( ! empty( $categories ) ) {
  echo the_archive_title( '<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <span style="font-size:50px" class="display-4">', '</span>
      
    </div>
  </div>' );
     
}

}
elseif(is_author()){
    echo"Yazar Sayfası";
}
elseif(is_tag()){
    echo"Etiket Sayfası";
}?>
<div class="site">
<div class="row">
    <div class="d-none d-sm-block col-md-1"></div>
    <div class="col-12 col-md-6 col-lg-6" style="float:left"><?php require_once("govde.php"); ?></div>

    <div class="d-none d-sm-block col-md-1"></div>
    <div class="col-12 col-md-4 col-lg-4" style="float:right"><?php require_once("sidebar.php"); ?></div>
</div>
</div>
<div class="footer">
<div class="row mt-5">
<?php get_footer(); ?>
</div>
</div>



