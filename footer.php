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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/rollback/js/govde.js"></script> 

</html>