
<?php get_header(); ?>


<div class="site">
<div class="row">
    <div class="col-1"></div>
    <div class="col-6" style="float:left">
    <h1>"<?php the_search_query(); ?>" için Arama Sonuçları</h1>
<hr>
    
    <?php require_once("govde.php"); ?></div>

    <div class="col-1"></div>
    <div class="col-4" style="float:right"><?php require_once("sidebar.php"); ?></div>
</div>
</div>
<div class="row">
<?php get_footer(); ?>
</div>
