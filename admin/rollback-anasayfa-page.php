<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'wayne-social-media.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('Something went wrong. ERR4004'); ?>  
<?php endif; ?>

<?php 
$blog_home_page_widgets = get_option('blog_home_page_widgets');
?>
<h1>Home Page Settings</h1>

<table>
<tr>
  <td><h3>More Post</h3></td>
  <td>
  <select name="blog_home_page_widgets" class="blog_home_page_widgets">
  <option value="next_prev">Next - Previous</option>
  <option value="load_more">Load More</option>
  </select>
  </td>
  <td><input type="submit" class="button-primary blog_home_page_widgets_button updated_true" value='Update'></td>
</tr>
</table>


<script>
/* More Post */
<?php  
if(strlen($blog_home_page_widgets) > 0){?>
    $("select.blog_home_page_widgets").val('<?=$blog_home_page_widgets?>').change();
<?php } ?>

/* More Post */
$('.blog_home_page_widgets_button').on('click', function(){
var blog_home_page_widgets = $("select.blog_home_page_widgets").children("option:selected").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_blog_home_page_widgets',
        'data': blog_home_page_widgets
    }
);
});

</script>