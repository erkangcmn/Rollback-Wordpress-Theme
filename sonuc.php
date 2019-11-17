<?php
    $aramasorgusu = @mysql_real_escape_string($_GET['aramasorgusu']);
    $sonucsorgu = @mysql_query("SELECT * FROM wordpress WHERE post_title LIKE '%".$aramasorgusu."%'" );
    if(@mysql_num_rows($sonucsorgu)>0){
    while($sorguoku=@mysql_fetch_array($sonucsorgu)){
    echo $sorguoku['post_title'].'<br>';
    }
    }
    else{
    echo 'Aradığınız İçerik Bulunamadı';
    }
?>