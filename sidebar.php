<!-- ========================Sağ================================== -->

<div class="sag"style="float:left">
<div class="container" >
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

  <form role="search"id="searchform" action="<?php echo home_url( '/' ); ?>" method="get">
  <div id="custom-search-input">
                <div class="input-group">
                    <input type="text" class="search-query form-control"for="s" name="s" id="s" placeholder="Arama..." />
                    <span class="input-group-btn">
                        <button type="submit"id="searchform">
                            <span class="fa fa-search"></span>
                        </button>
                    </span>
                </div>
            </div>
  </form>
  

    </div>
</div>

<!-- Trendler -->




<!-- Kategoriler -->
<div class="row mt-3" >
  <div class="col-12">

        <?php dynamic_sidebar("sidebar"); ?>

  </div>
</div>


    </div>
</div>


