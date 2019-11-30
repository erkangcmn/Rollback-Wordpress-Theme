
<?php
/**
 * The template for displaying search results pages.
 *
 * @package stackstar.
 */
 
get_header(); ?>


<div class="site">
<div class="row">
    <div class="col-1"></div>
    <div class="col-6" style="float:left">
    <div class="search-container">
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

 
        <?php if ( have_posts() ) : ?>
            <div class="alert alert-success mt-5">
            <strong>"<?php the_search_query(); ?>"</strong> İçin Arama Sonuçları
            </div><hr>

            <?php
                       
            while ( have_posts() ) : the_post();
                require_once("govde.php");
             endwhile; ?>

 
        <?php else : ?>
 
            <div class="alert alert-danger mt-5">
            <strong>Üzgünüm</strong> Aradığınız Kelimeye Uygun İçerik Bulunamadı..
            </div><hr>

 
        <?php endif; ?>
 
        </main><!-- #main -->
    </section><!-- #primary -->
</div></div>

    <div class="col-1"></div>
    <div class="col-4" style="float:right"><?php require_once("sidebar.php"); ?></div>
</div>
</div>
<div class="row">
<?php get_footer(); ?>
</div>


