<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'wayne-social-media.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('Something went wrong. ERR4004'); ?>  
<?php endif; ?>

<?php 
$blog_name_footer_widgets = get_option('blog_name_footer_widgets');

$rollback_footer_copyright = get_option('rollback_footer_copyright');
?>



<table>
<tr>
<td><h1>Roolback Footer Settings</h1> </td>

 <td> <h4 class="admin_upload" style=" display: none;color:green;font-size:18px"> Güncellendi</span></h4>
 </tr>
</table>

<table>
<tr>
  <td><h3>Footer Blog Name</h3></td>
  <td>
  <select name="blog_name_footer_widgets" class="blog_name_footer_widgets">
  <option value="enable">Enable</option>
  <option value="disable">Disable</option>
  </select>
  </td>
  <td><input type="submit" class="button-primary blog_name_footer_widgets_button updated_true" value='Update'></td>
</tr>

</table>

<table>
<tr>
    <td><h3>Copyright:</h3></td>
    <td><input type="text" placeholder="©" value ="<?=$rollback_footer_copyright?>" name="rollback_footer_copyright" class="rollback_footer_copyright"/></td>
    <td><input type="submit" class="button-primary rollback_footer_copyright_button updated_true" value='Update'></td>
</tr>
</table>


<script>

/* Footer Blog Name */
<?php  
if(strlen($blog_name_footer_widgets) > 0){?>
    $("select.blog_name_footer_widgets").val('<?=$blog_name_footer_widgets?>').change();
<?php } ?>

/* Footer Blog Name */
$('.blog_name_footer_widgets_button').on('click', function(){
var blog_name_footer_widgets = $("select.blog_name_footer_widgets").children("option:selected").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_blog_name_footer_widgets',
        'data': blog_name_footer_widgets
    }
);
});


/* Footer Copyright */
$('.rollback_footer_copyright_button').on('click', function(){
var rollback_footer_copyright = $(".rollback_footer_copyright").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_footer_copyright',
        'data': rollback_footer_copyright
    }
);
});

$(document).ready(function(){
    $(".updated_true").focus(function(){
      $(".admin_upload").css("display", "inline").fadeOut(2000);
    });
  });
</script>
