<!-- ========================alt================================== -->
<div class="container">
<div class="row">

<?php if(get_option('blog_name_footer_widgets') == 'enable'){?>
<div style="
width:90%;
margin:auto;
display:flex;
align-items:center;
justify-content:space-around;
flex-wrap:wrap">
	<div class="footer_name">

	<a href="<?php bloginfo('url'); ?>"><?php echo bloginfo( 'name' ); ?></a>  
	
	</div>    

<?php } ?>
<?php dynamic_sidebar("footer"); ?>
</div>
</div>
<div class="row">
<div class="col-12 mt-5">
<?php
if(get_option('rollback_footer_copyright') == '©' || trim(get_option('rollback_footer_copyright')) == ''){}
else{
?>
<p style="text-align:center;"><?php echo get_option('rollback_footer_copyright'); ?> </p>
<?php } ?>
</div>
</div>
</div>

</body>   
<script src="<?php echo get_site_url(); ?>/wp-content/themes/rollback/js/jquery-3.4.1.slim.min.js"></script> 
<script src="<?php echo get_site_url(); ?>/wp-content/themes/rollback/js/popper.min.js"></script> 
<script src="<?php echo get_site_url(); ?>/wp-content/themes/rollback/js/bootstrap.min.js"></script> 

<script src="<?php echo get_site_url(); ?>/wp-content/themes/rollback/js/govde.js"></script> 

</html>