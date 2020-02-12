<?php 
get_header(); ?>
<?php include_once("slider.php"); ?>
<div class="site">
<div class="row">
    <div class="d-none d-sm-block col-md-1"></div>
    <div class="col-12 col-sm-8 col-md-6" style="float:left"><?php require_once("govde.php"); ?></div>

    <div class="d-none d-sm-block col-sm-1"></div>
    <div class="col-12 col-sm-3 col-md-4" style="float:right"><?php include_once("sidebar.php"); ?></div>
</div>
</div>
<div class="footer">
<div class="row mt-5">
<?php get_footer(); ?>
</div>
</div>


