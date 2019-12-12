<!-- ========================Sağ================================== -->

<div class="sag"style="float:left">
<div class="container" >

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


