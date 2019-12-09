<?php get_header(); 

?>

<div class="site">
<?php if(is_category()){
$categories = get_the_category();
if ( ! empty( $categories ) ) {
    
     echo '<div class="jumbotron jumbotron-fluid">
     <div class="container">
       <span style="font-size:50px" class="display-4">'.esc_html( $categories[0]->name ).' Kategori Sayfası</span>
    
     </div>
   </div>';
     
}

}
elseif(is_author()){
    echo"Yazar Sayfası";
}
elseif(is_tag()){
    echo"Etiket Sayfası";
}?>
<div class="row">
    <div class="col-1"></div>
    <div class="col-6" style="float:left"><?php require_once("govde.php"); ?></div>

    <div class="col-1"></div>
    <div class="col-4" style="float:right"><?php require_once("sidebar.php"); ?></div>
</div>
</div>
<div class="row">
<?php get_footer(); ?>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Kategori Sayfası</h1>
  </div>
</div>



