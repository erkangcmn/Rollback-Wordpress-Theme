<!-- ========================Sağ================================== -->

<div class="sag">
<div class="container">
        <div class="row mt-5" >
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://localhost/wordpress/wp-content/uploads/2019/10/hack.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Erkan Göçmen</h5>
                        <p class="card-text">Sevdiğim yazı veya en popüler yazı burada olacak oleyyy.test uzun yazıda nasıl duruyor burası</p>
                    </div>
                    </div>
                </div>
        </div>
<!-- arama butonu -->
<div class="row mt-5">
            <div class="col-12">    
            <form action="<?php echo home_url(); ?>" id="search-form" method="get">
    <input type="text" name="s" id="s" onblur="if(this.value=='')this.value='type your search'" onfocus="if(this.value=='type your search')this.value=''" />
    <input type="hidden" value="submit" />
</form>
                </div>
        </div>
<!-- popüler yazılar-->
<div class="row mt-5">
  <div class="col-3"><img src="http://localhost/wordpress/wp-content/uploads/2019/10/hack.png" alt="Card image cap" style="width:5rem"></div>
  <div class="col-9">Burada popüler yazılar veya benim seçtiğim yazılar olacak</div>
</div>
<div class="row mt-2">
  <div class="col-3"><img src="http://localhost/wordpress/wp-content/uploads/2019/10/hack.png" alt="Card image cap" style="width:5rem"></div>
  <div class="col-9">Burada popüler yazılar veya benim seçtiğim yazılar olacak</div>
</div>
<div class="row mt-2">
  <div class="col-3"><img src="http://localhost/wordpress/wp-content/uploads/2019/10/hack.png" alt="Card image cap" style="width:5rem"></div>
  <div class="col-9">Burada popüler yazılar veya benim seçtiğim yazılar olacak</div>
</div>
<div class="row mt-2">
  <div class="col-3"><img src="http://localhost/wordpress/wp-content/uploads/2019/10/hack.png" alt="Card image cap" style="width:5rem"></div>
  <div class="col-9">Burada popüler yazılar veya benim seçtiğim yazılar olacak</div>
</div>
<!-- Kategoriler -->
<div class="row mt-3" >
  <div class="col-12">
      <ul>
        <?php dynamic_sidebar("menu"); ?>
      </ul>
  </div>
</div>
<!-- Sosyal Medya -->
        <div class="row mt-3">
            <div class="col">sosyal medya ikonu</div>
        </div>

    </div>
</div>


