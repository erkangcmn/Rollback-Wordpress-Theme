<?php 
/* ================widget image ============*/
if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
        'name' => 'Left Sidebar',
        'id' => 'left-sidebar',
        'description' => 'Widget Area',
        'before_widget' => '<div id="one" class="two">',
        'after_widget' => '</div>',
        )
    );
}

// Register widget
add_action('widgets_init', 'ctUp_ads_widget');
function ctUp_ads_widget() {
    register_widget( 'ctUp_ads' );
}

// Enqueue additional admin scripts
add_action('admin_enqueue_scripts', 'ctup_wdscript');
function ctup_wdscript() {
    wp_enqueue_media();

}

// Widget
class ctUp_ads extends WP_Widget {

    function ctUp_ads() {
        $widget_ops = array('classname' => 'ctUp-ads');
        $this->WP_Widget('ctUp-ads-widget', 'Rollback - About Me', $widget_ops);
    }

    function widget($args, $instance) {
    echo $before_widget;
    $about_title = $instance['about_title'];
    $detail = $instance['detail'];
    $image = esc_url($instance['image_uri']);
    ?>
	<div class="row mt-5 mb-2">
    <div class="col-12 col-sm-12 col-md-6">
			<div class="card about_me" style="margin:auto;height:100%;">
            <img src="<?php echo $image; ?>" style="margin:0;padding:0;width:100%;display:block"/>
                <div class="card-body">
					<h5 class="card-title"><?php echo $about_title; ?></h5>
					<p class="card-text"><?php echo $detail; ?></p>
				</div>
				</div>
			</div>
	</div>
<hr>

    <?php
    echo $after_widget;

    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['about_title'] = strip_tags( $new_instance['about_title'] );
        $instance['detail'] = strip_tags( $new_instance['detail'] );
        $instance['image_uri'] = strip_tags( $new_instance['image_uri'] );
        return $instance;
    }

    function form($instance) {
        if ( isset( $instance[ 'about_title' ] ) )
        $about_title = $instance[ 'about_title' ];
        else
        $about_title = __( 'About Me Title', 'rollback-blog' );
    
        if ( isset( $instance[ 'detail' ] ) )
        $detail = $instance[ 'detail' ];
        else
        $detail = __( 'About Me Detail', 'rollback-blog' );

        if ( isset( $instance[ 'image_uri' ] ) )
        $image_url = $instance[ 'image_uri' ];
        else
        $image_url = __( '', 'rollback-blog' );
?>
	<p>
    <!-- ======About Me Title =====-->
	<label for="<?php echo $this->get_field_id( 'about_title' ); ?>"><?php __( 'About Title:', 'rollback-blog' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'about_title' ); ?>" name="<?php echo $this->get_field_name( 'about_title' ); ?>" type="text" value="<?php echo esc_attr( $about_title ); ?>" />
	<!-- ======About Me Detail=====-->
	<label for="<?php echo $this->get_field_id( 'detail' ); ?>"><?php __( 'About Detail:', 'rollback-blog' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'detail' ); ?>" name="<?php echo $this->get_field_name( 'detail' ); ?>" type="text" value="<?php echo esc_attr( $detail); ?>" />
	
	</p>
    <p>
    <label for="<?php echo $this->get_field_id( 'image_uri' ); ?>"><?php __( 'Image:', 'rollback-blog' ); ?></label>
    <img class="<?php echo $this->id ?>_img" type="file" src="<?php echo (!empty($image_url)) ? $image_url : ''; ?>" style="margin:0;padding:0;max-width:100%;display:block"/>
    <input type="text" class="widefat <?php echo $this->id ?>_url" name="<?php echo $this->get_field_name( 'image_uri' ); ?>" value="<?php echo esc_attr( $image_url); ?>" style="margin-top:5px;" />
    <input type="button" id="<?php echo $this->id ?>" class="button button-primary js_custom_upload_media" value="Upload Image" style="margin-top:5px;" />
    </p>

<?php
echo"<script>jQuery(document).ready(function ($) {
    function media_upload(button_selector) {
      var _custom_media = true,
          _orig_send_attachment = wp.media.editor.send.attachment;
      $('body').on('click', button_selector, function () {
        var button_id = $(this).attr('id');
        wp.media.editor.send.attachment = function (props, attachment) {
          if (_custom_media) {
            $('.' + button_id + '_img').attr('src', attachment.url);
            $('.' + button_id + '_url').val(attachment.url).trigger('change');
          } else {
            return _orig_send_attachment.apply($('#' + button_id), [props, attachment]);
          }
        }
        wp.media.editor.open($('#' + button_id));
        return false;
      });
    }
    media_upload('.js_custom_upload_media');
  });</script>";
    }
}?>