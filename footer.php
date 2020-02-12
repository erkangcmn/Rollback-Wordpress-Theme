<!-- ========================alt================================== -->
<div class="container">
<div class="row">

<?php if(get_option('blog_name_footer_widgets') == 'disable'){

}else{?>
<div class="footer_blog_name">
	<div class="footer_name">

	<a href="<?php esc_url('url'); ?>"><?php echo bloginfo( 'name' ); ?></a>  
	
	</div>    

<?php } ?>
<?php dynamic_sidebar("footer"); ?>
</div>
</div>
<div class="row">
<div class="col-12 mt-5">
<?php
if(get_option('rollback_footer_copyright') == 'Copyright' || trim(get_option('rollback_footer_copyright')) == ''){}
else{
?>
<p style="text-align:center;"><?php echo get_option('rollback_footer_copyright'); ?> </p>
<?php } ?>
</div>
</div>
</div>

</body>   
<script src="<?php echo get_site_url(); ?>/wp-content/themes/rollback-wordpress-theme/js/jquery-3.4.1.slim.min.js"></script> 
<script src="<?php echo get_site_url(); ?>/wp-content/themes/rollback-wordpress-theme/js/popper.min.js"></script> 
<script src="<?php echo get_site_url(); ?>/wp-content/themes/rollback-wordpress-theme/js/bootstrap.min.js"></script> 

<script src="<?php echo get_site_url(); ?>/wp-content/themes/rollback-wordpress-theme/js/govde.js"></script> 

</html>