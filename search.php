
<?php get_header(); ?>

<?php require_once("slider.php"); ?>
<div class="site" style="margin:auto">
<div class="row">
    <div class="col-1"></div>
    <div class="col-6"><?php
    $aramasorgusu = @mysql_real_escape_string($_POST['aramasorgusu']);
    $sonucsorgu = @mysql_query("SELECT * FROM wp_posts WHERE post_title LIKE '%".$aramasorgusu."%'" );
    if(@mysql_num_rows($sonucsorgu)>0){
    while($sorguoku=@mysql_fetch_array($sonucsorgu)){
    echo $sorguoku['post_title'].'<br>';
    }
    }
    else{
    echo 'Aradığınız İçerik Bulunamadı';
    }   
?></div>

    <div class="col-1"></div>
    <div class="col-3"><?php require_once("sidebar.php"); ?></div>
</div>
</div>
<div class="row">
<?php get_footer(); ?>
</div>