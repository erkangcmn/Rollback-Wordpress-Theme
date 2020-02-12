
<?php
/**
 * The template for displaying search results pages.
 *
 * @package stackstar.
 */
 
get_header(); ?>


<div class="site">
<div class="row">
    <div class="d-none d-sm-block col-md-1"></div>
    <div class="col-12 col-sm-8 col-md-6" style="float:left">
    <div class="search-container">
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

 
        <?php if ( have_posts() ) : ?>
            <div class="alert alert-success mt-5">
            
                Search results for <strong>"<?php the_search_query(); ?>"</strong>
            </div><hr>

            <?php
                       
            while ( have_posts() ) : the_post();
                require_once("govde.php");
             endwhile; ?>

 
        <?php else : ?>
 
            <div class="alert alert-danger mt-5">
            <strong>Sorry</strong> The Content You Searched Is Not Found...
            </div><hr>

 
        <?php endif; ?>
 
        </main><!-- #main -->
    </section><!-- #primary -->
</div></div>

<div class="d-none d-sm-block col-sm-1"></div>
    <div class="col-12 col-sm-3 col-md-4" style="float:right"><?php include_once("sidebar.php"); ?></div>
</div>
</div>
<div class="footer">
<div class="row mt-5">
<?php get_footer(); ?>
</div>
</div>



