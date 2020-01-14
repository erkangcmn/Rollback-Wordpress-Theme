<!-- ========================alt================================== -->
<div class="container">
<div class="row">

<?php if(get_option('blog_name_footer_widgets') == 'enable'){?>
<div class="col-sm col-md-sm col-lg-sm">
	<div class="footer_name">

	<a href="<?php bloginfo('url'); ?>"><?php echo bloginfo( 'name' ); ?></a>  
	
	</div>    
</div>
<?php } ?>
<?php dynamic_sidebar("footer"); ?>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/rollback/js/govde.js"></script>

</body>    
</html>