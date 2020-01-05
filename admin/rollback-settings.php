<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'wayne-social-media.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('Something went wrong. ERR4004'); ?>  
<?php endif; ?>

<?php 
$blog_name_widgets = get_option('blog_name_widgets');
$blog_slogan_widgets = get_option('blog_slogan_widgets');

$social_media = get_option('social_media');
$header_social_media_instagram = get_option('rollback_social_media_instagram');
$header_social_media_twitter = get_option('rollback_social_media_twitter');
$header_social_media_gmail = get_option('rollback_social_media_gmail');
$header_social_media_github = get_option('rollback_social_media_github');
$header_social_media_facebook = get_option('rollback_social_media_facebook');
$header_social_media_linkedin= get_option('rollback_social_media_linkedin');
$header_social_media_pinterest = get_option('rollback_social_media_pinterest');
$header_social_media_youtube = get_option('rollback_social_media_youtube');
?>

<h1> Rollback Header Settings </h1>
<table>
<tr>
  <td><h3>Blog Name</h3></td>
  <td>
  <select name="blog_name_widgets" class="blog_name_widgets">
  <option value="enable">Enable</option>
  <option value="disable">Disable</option>
  </select>
  </td>
  <td><input type="submit" class="button-primary blog_name_widgets_button updated_true" value='Update'></td>
</tr>

<tr>
  <td><h3>Blog Slogan</h3></td>
  <td>
  <select name="blog_slogan_widgets" class="blog_slogan_widgets">
  <option value="enable">Enable</option>
  <option value="disable">Disable</option>
  </select>
  </td>
  <td><input type="submit" class="button-primary blog_slogan_widgets_button updated_true" value='Update'></td>
</tr>
</table>


<h1>Header Social Media</h1>
<table>


  <tr>
    <td><h3>Instagram:</h3> </td>
    <td><input type="text" placeholder="#" value ="<?=$header_social_media_instagram?>" name="rollback_social_media_instagram" class="rollback_social_media_instagram"/></td>
    <td><input type="submit" class="button-primary rollback_social_media_instagram_button updated_true" value='Update'></td>
  </tr>

  <tr>
    <td><h3>Twitter:</h3> </td>
    <td><input type="text" placeholder="#" value ="<?=$header_social_media_twitter?>" name="rollback_social_media_twitter" class="rollback_social_media_twitter"/></td>
    <td><input type="submit" class="button-primary rollback_social_media_twitter_button updated_true" value='Update'></td>
  </tr>

  <tr>
    <td><h3>Gmail:</h3> </td>
    <td><input type="text" placeholder="#" value ="<?=$header_social_media_gmail?>" name="rollback_social_media_gmail" class="rollback_social_media_gmail"/></td>
    <td><input type="submit" class="button-primary rollback_social_media_gmail_button updated_true" value='Update'></td>
  </tr>

  <tr>
    <td><h3>GitHub: </h3></td>
    <td><input type="text" placeholder="#" value ="<?=$header_social_media_github?>" name="rollback_social_media_github" class="rollback_social_media_github"/></td>
    <td><input type="submit" class="button-primary rollback_social_media_github_button updated_true" value='Update'></td>
  </tr>

  <tr>
    <td><h3>Facebook:</h3> </td>
    <td><input type="text" placeholder="#" value ="<?=$header_social_media_facebook?>" name="rollback_social_media_facebook" class="rollback_social_media_facebook"/></td>
    <td><input type="submit" class="button-primary rollback_social_media_facebook_button updated_true" value='Update'></td>
  </tr>

  <tr>
    <td><h3>LinkedIn:</h3> </td>
    <td><input type="text" placeholder="#" value ="<?=$header_social_media_linkedin?>" name="rollback_social_media_linkedin" class="rollback_social_media_linkedin"/></td>
    <td><input type="submit" class="button-primary rollback_social_media_linkedin_button updated_true" value='Update'></td>
  </tr>

  <tr>
    <td><h3>Pinterest:</h3> </td>
    <td><input type="text" placeholder="#" value ="<?=$header_social_media_pinterest?>" name="rollback_social_media_pinterest" class="rollback_social_media_pinterest"/></td>
    <td><input type="submit" class="button-primary rollback_social_media_pinterest_button updated_true" value='Update'></td>
  </tr>

  <tr>
    <td><h3>YouTube: </h3></td>
    <td><input type="text" placeholder="#" value ="<?=$header_social_media_youtube?>" name="rollback_social_media_youtube" class="rollback_social_media_youtube"/></td>
    <td><input type="submit" class="button-primary rollback_social_media_youtube_button updated_true" value='Update'></td>
  </tr>

</table>


<script>
<?php  
if(strlen($blog_name_widgets) > 0){?>
    $("select.blog_name_widgets").val('<?=$blog_name_widgets?>').change();
<?php
} if(strlen($blog_slogan_widgets) > 0){?>
  $("select.blog_slogan_widgets").val('<?=$blog_slogan_widgets?>').change();
<?php
} ?>


$('.blog_name_widgets_button').on('click', function(){
var blog_name_widgets = $("select.blog_name_widgets").children("option:selected").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_blog_name_widgets',
        'data': blog_name_widgets
    }
);

});


$('.blog_slogan_widgets_button').on('click', function(){

var blog_slogan_widgets = $("select.blog_slogan_widgets").children("option:selected").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_blog_slogan_widgets',
        'data': blog_slogan_widgets
    }
);

});

/* ============== Instagram ========== */
$('.rollback_social_media_instagram_button').on('click', function(){
var rollback_social_media_instagram = $(".rollback_social_media_instagram").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_social_media_instagram',
        'data': rollback_social_media_instagram
    }
);
});
/* ============== Instagram ========== */

/* ============== Twitter ========== */
$('.rollback_social_media_twitter_button').on('click', function(){
var rollback_social_media_twitter = $(".rollback_social_media_twitter").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_social_media_twitter',
        'data': rollback_social_media_twitter
    }
);
});
/* ============== Twitter ========== */

/* ============== Gmail ========== */
$('.rollback_social_media_gmail_button').on('click', function(){
var rollback_social_media_gmail = $(".rollback_social_media_gmail").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_social_media_gmail',
        'data': rollback_social_media_gmail
    }
);
});
/* ============== Gmail ========== */

/* ============== Github ========== */
$('.rollback_social_media_github_button').on('click', function(){
var rollback_social_media_github = $(".rollback_social_media_github").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_social_media_github',
        'data': rollback_social_media_github
    }
);
});
/* ============== Github ========== */


/* ============== Facebook ========== */
$('.rollback_social_media_facebook_button').on('click', function(){
var rollback_social_media_facebook = $(".rollback_social_media_facebook").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_social_media_facebook',
        'data': rollback_social_media_facebook
    }
);
});
/* ============== Facebook ========== */

/* ============== LinkedIn ========== */
$('.rollback_social_media_linkedin_button').on('click', function(){
var rollback_social_media_linkedin = $(".rollback_social_media_linkedin").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_social_media_linkedin',
        'data': rollback_social_media_linkedin
    }
);
});
/* ============== LinkedIn ========== */

/* ============== Pinterest ========== */
$('.rollback_social_media_pinterest_button').on('click', function(){
var rollback_social_media_pinterest = $(".rollback_social_media_pinterest").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_social_media_pinterest',
        'data': rollback_social_media_pinterest
    }
);
});
/* ============== pinterest ========== */

/* ============== YouTube ========== */
$('.rollback_social_media_youtube_button').on('click', function(){
var rollback_social_media_youtube = $(".rollback_social_media_youtube").val();

jQuery.post(
    ajaxurl,
    {
        'action': 'rollback_ajax_social_media_youtube',
        'data': rollback_social_media_youtube
    }
);
});
/* ============== YouTube ========== */

$('.updated_true').on('click', function(){
  alert("Alert Message","Alert Title")

});
</script>


