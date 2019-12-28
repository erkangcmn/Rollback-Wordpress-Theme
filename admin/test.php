<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'wayne-social-media.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('Something went wrong. ERR4004'); ?>  
<?php endif; ?>

<?php 

$footer_social_media_facebook = get_option('wayne_footer_social_media_facebook');

?>

<h1>Footer Social Media</h1>

<style>
.wayne-setting-name{
    width: 400px;
}
.wayne-setting-choose{
    width: 200px;
}
</style>

<table>
    <tr>
        <td class="wayne-setting-name"><h3>Facebook</h3></td>
        <td class="wayne-setting-choose"><input type="text" placeholder="URL" value ="<?=$footer_social_media_facebook?>" name="wayne_footer_social_media_facebook" class="wayne_footer_social_media_facebook"/></td>
        <td><input type="submit" class="button-primary wayne_footer_social_media_facebook_button updated_true" value='Update'></td>
    </tr>

   
</table>

<script>

$('.wayne_footer_social_media_facebook_button').on('click', function(){

var wayne_footer_social_media_facebook = $(".wayne_footer_social_media_facebook").val();


jQuery.post(
    ajaxurl,
    {
        'action': 'wayne_ajax_footer_social_media_facebook',
        'data': wayne_footer_social_media_facebook
    }
);

});

$('.updated_true').on('click', function(){

$(".admin-updated").css("visibility", "visible");
    setTimeout(
    function() 
    {
        $(".admin-updated").css("visibility", "hidden");
    }, 2000);

});


</script>