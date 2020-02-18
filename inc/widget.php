<?php

/* ---------------------------------------------------------- Trend yazıları widget --------------------------------------------------*/
function rollback_register_widget() {
	register_widget( 'rollback_trends' );
	}
	
	add_action( 'widgets_init', 'rollback_register_widget' );
	
	class rollback_trends extends WP_Widget {
	
	function __construct() {
	parent::__construct(
	// widget ID
	'rollback_trends',
	// widget name
	__('Rollback - Trends', 'rollback-wordpress-theme'),
	// widget description
	array( 'description' => __( 'Rollback trends views', 'rollback-wordpress-theme' ), )
	);
	}


	/* Burada widget’ımızın çıktısını metnini ve kullanıcının belirlediği başlığı gösterecek şekilde ayarladık. */
	public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );
	echo $args['before_widget'];
	$trends_number = $instance['trends_number'];
	//if title is present
	if ( ! empty( $title ) )
	echo $args['before_title'] . $title . $args['after_title'];
	//output
	query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page='.$trends_number);


	if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row mt-3" style="font-family: sans-serif; font-style:normal;font-weight:300" >

		<div class="col-7 col-sm-4 col-md-5"><a href="<?php the_permalink(); ?>">
			<img src="<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url();}
			else{ echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg'; }?>" 
			style="width: 130px !important;height:75px !important;border-radius:4px;"/></a>
		</div>

		<div class="col-5 col-sm-8 col-md-7"> 
		<a href="<?php the_permalink(); ?>" style="font-size:16px;font-weight:600"><?php the_title(); ?></a><br>
			<span><?php the_time("j F Y"); ?></span>
		</div>
		
	</div>
	<?php
	endwhile; endif;
	wp_reset_query();

	echo $args['after_widget'];
	}


	/*Şimdi form() metodunu kullanarak widget’ın arka kısmını programlamalıyız. */
	public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) )
	$title = $instance[ 'title' ];
	else
	$title = __( 'Trends', 'rollback-wordpress-theme' );
	if ( isset( $instance[ 'trends_number' ] ) )
	$trends_number= $instance[ 'trends_number' ];
	else
	$trends_number = __( '4', 'rollback-wordpress-theme' );
	?>
	<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php __( 'Title:', 'rollback-wordpress-theme' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	<label for="<?php echo $this->get_field_id( 'trends_number' ); ?>"><?php __( 'Trends Number:', 'rollback-wordpress-theme' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'trends_number' ); ?>" name="<?php echo $this->get_field_name( 'trends_number' ); ?>" type="text" value="<?php echo esc_attr( $trends_number ); ?>" />
	
	</p>
	<?php
	}


	/*Burada, özel widget’ın nasıl kurulduğunu görebilirsiniz. Kullanıcı bir başlık tanımlamışsa 
	o başlık bizim oluşturduğumuz HTML formuna eklenir. Aksi takdirde, başlığın adını Varsayılan
	 Başlık olarak ayarlarız. Widget’ın WordPress yönetici alanında nasıl görüneceği budur.
	Son olarak, ayarları değiştirdiğinde widget’i yenilemek için güncelleme işlevini uygulamamız gerekir. */
	public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	$instance['trends_number'] = ( ! empty( $new_instance['trends_number'] ) ) ? strip_tags( $new_instance['trends_number'] ) : '';
	return $instance;
	}
	
	}


	/*--------------------------------------------- Sosyal Medya Widget ----------------------------------------- */


	function social_media() {
		register_widget( 'social_media_widget' );
		}
		
		add_action( 'widgets_init', 'social_media' );
		
		class social_media_widget extends WP_Widget {
		
		function __construct() {
		parent::__construct(
		// widget ID
		'social_media_widget',
		// widget name
		__('Rollback - Social Media Ikons', 'rollback-wordpress-theme'),
		// widget description
		array( 'description' => __( 'Rollback social media views', 'rollback-wordpress-theme' ), )
		);
		}
	
	
		/* Burada widget’ımızın çıktısını metnini ve kullanıcının belirlediği başlığı gösterecek şekilde ayarladık. */
		public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $args['before_widget'];

		$instagram = $instance['instagram'];
		$twitter = $instance['twitter'];
		$gmail = $instance['gmail'];
		$github = $instance['github'];
		$facebook = $instance['facebook'];
		$linkedin = $instance['linkedin'];
		$pinterest = $instance['pinterest'];
		$youtube = $instance['youtube'];
		//if title is present
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];
		//output
		?>
		<div class="row mt-3">
        <ul class="soc">
			<?php $s=0; if($instagram == '#' || trim($instagram) == ''){}
			else{ $s++;?>
			<li><a href="<?php echo $instagram;?>" class="icon-15 instagram" target="_blank" title="Instagram"><svg viewBox="0 0 512 512"><g><path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"/><path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"/><circle cx="351.5" cy="160.5" r="21.5"/></g></svg><!--[if lt IE 9]><em>Instagram</em><![endif]--></a></li>       
			<?php } if($twitter == '#' || trim($twitter) == ''){}
			else{  $s++;?>
            <li><a href="<?php echo $twitter; ?>" class="icon-26 twitter" target="_blank" title="Twitter"><svg viewBox="0 0 512 512"><path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"/></svg><!--[if lt IE 9]><em>Twitter</em><![endif]--></a></li>
			<?php } if($gmail== '#' || trim($gmail) == ''){}
			else{  $s++;?>	
            <li><a href="<?php echo 'mailto:'.$gmail; ?>" class="icon-8 email" title="Email"><svg viewBox="0 0 512 512"><path d="M101.3 141.6v228.9h0.3 308.4 0.8V141.6H101.3zM375.7 167.8l-119.7 91.5 -119.6-91.5H375.7zM127.6 194.1l64.1 49.1 -64.1 64.1V194.1zM127.8 344.2l84.9-84.9 43.2 33.1 43-32.9 84.7 84.7L127.8 344.2 127.8 344.2zM384.4 307.8l-64.4-64.4 64.4-49.3V307.8z"/></svg><!--[if lt IE 9]><em>Email</em><![endif]--></a></li>
			<?php }  if($github == '#' || trim($github) == ''){}
			else{  $s++;?>
            <li><a href="<?php echo $github; ?>" class="icon-13 github" target="_blank" title="GitHub"><svg viewBox="0 0 512 512"><path d="M256 70.7c-102.6 0-185.9 83.2-185.9 185.9 0 82.1 53.3 151.8 127.1 176.4 9.3 1.7 12.3-4 12.3-8.9V389.4c-51.7 11.3-62.5-21.9-62.5-21.9 -8.4-21.5-20.6-27.2-20.6-27.2 -16.9-11.5 1.3-11.3 1.3-11.3 18.7 1.3 28.5 19.2 28.5 19.2 16.6 28.4 43.5 20.2 54.1 15.4 1.7-12 6.5-20.2 11.8-24.9 -41.3-4.7-84.7-20.6-84.7-91.9 0-20.3 7.3-36.9 19.2-49.9 -1.9-4.7-8.3-23.6 1.8-49.2 0 0 15.6-5 51.1 19.1 14.8-4.1 30.7-6.2 46.5-6.3 15.8 0.1 31.7 2.1 46.6 6.3 35.5-24 51.1-19.1 51.1-19.1 10.1 25.6 3.8 44.5 1.8 49.2 11.9 13 19.1 29.6 19.1 49.9 0 71.4-43.5 87.1-84.9 91.7 6.7 5.8 12.8 17.1 12.8 34.4 0 24.9 0 44.9 0 51 0 4.9 3 10.7 12.4 8.9 73.8-24.6 127-94.3 127-176.4C441.9 153.9 358.6 70.7 256 70.7z"/></svg><!--[if lt IE 9]><em>GitHub</em><![endif]--></a></li>
			<?php if($s==4){echo'<br>';}}  if($facebook == '#' || trim($facebook) == ''){}
			else{  $s++;?>
			<li><a href="<?php echo $facebook; ?>" class="icon-10 facebook" target="_blank" title="Facebook"><svg viewBox="0 0 512 512"><path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"/></svg><!--[if lt IE 9]><em>Facebook</em><![endif]--></a></li>
			<?php if($s==4){echo'<br>';}}  if($linkedin == '#' || trim($linkedin) == ''){}
			else{  $s++; ?>
			<li><a href="<?php echo $linkedin; ?>" class="icon-17 linkedin" target="_blank" title="LinkedIn"><svg viewBox="0 0 512 512"><path d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z"/></svg><!--[if lt IE 9]><em>LinkedIn</em><![endif]--></a></li>
			<?php if($s==4){echo'<br>';}}  if($pinterest == '#' || trim($pinterest) == ''){}
			else{  $s++; ?>
			<li><a href="<?php echo $pinterest; ?>" class="icon-20 pinterest" target="_blank" title="Pinterest"><svg viewBox="0 0 512 512"><path d="M266.6 76.5c-100.2 0-150.7 71.8-150.7 131.7 0 36.3 13.7 68.5 43.2 80.6 4.8 2 9.2 0.1 10.6-5.3 1-3.7 3.3-13 4.3-16.9 1.4-5.3 0.9-7.1-3-11.8 -8.5-10-13.9-23-13.9-41.3 0-53.3 39.9-101 103.8-101 56.6 0 87.7 34.6 87.7 80.8 0 60.8-26.9 112.1-66.8 112.1 -22.1 0-38.6-18.2-33.3-40.6 6.3-26.7 18.6-55.5 18.6-74.8 0-17.3-9.3-31.7-28.4-31.7 -22.5 0-40.7 23.3-40.7 54.6 0 19.9 6.7 33.4 6.7 33.4s-23.1 97.8-27.1 114.9c-8.1 34.1-1.2 75.9-0.6 80.1 0.3 2.5 3.6 3.1 5 1.2 2.1-2.7 28.9-35.9 38.1-69 2.6-9.4 14.8-58 14.8-58 7.3 14 28.7 26.3 51.5 26.3 67.8 0 113.8-61.8 113.8-144.5C400.1 134.7 347.1 76.5 266.6 76.5z"/></svg><!--[if lt IE 9]><em>Pinterest</em><![endif]--></a></li>
			<?php if($s==4){echo'<br>';}}  if($youtube == '#' || trim($youtube) == ''){}
			else{  $s++; echo $s;?>
			<li><a href="<?php echo $youtube; ?>" class="icon-28 youtube" target="_blank" title="YouTube"><svg viewBox="0 0 512 512"><path d="M422.6 193.6c-5.3-45.3-23.3-51.6-59-54 -50.8-3.5-164.3-3.5-215.1 0 -35.7 2.4-53.7 8.7-59 54 -4 33.6-4 91.1 0 124.8 5.3 45.3 23.3 51.6 59 54 50.9 3.5 164.3 3.5 215.1 0 35.7-2.4 53.7-8.7 59-54C426.6 284.8 426.6 227.3 422.6 193.6zM222.2 303.4v-94.6l90.7 47.3L222.2 303.4z"/></svg><!--[if lt IE 9]><em>YouTube</em><![endif]--></a></li>
			<?php if($s==4){echo'<br>';} }  ?>

            
        </ul>
        </div>
		
		<?php
	
		echo $args['after_widget'];
		}
	
	
		/*Şimdi form() metodunu kullanarak widget’ın arka kısmını programlamalıyız. */
		public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) )
		$title = $instance[ 'title' ];
		else
		$title = __( 'Social Media', 'rollback-wordpress-theme' );

		if ( isset( $instance[ 'instagram' ] ) )
		$instagram = $instance[ 'instagram' ];
		else
		$instagram = __( '#', 'rollback-wordpress-theme' );

		if ( isset( $instance[ 'twitter' ] ) )
		$twitter = $instance[ 'twitter' ];
		else
		$twitter = __( '#', 'rollback-wordpress-theme' );

		if ( isset( $instance[ 'gmail' ] ) )
		$gmail = $instance[ 'gmail' ];
		else
		$gmail= __( '#', 'rollback-wordpress-theme' );

		if ( isset( $instance[ 'github' ] ) )
		$github = $instance[ 'github' ];
		else
		$github = __( '#', 'rollback-wordpress-theme' );

		if ( isset( $instance[ 'facebook' ] ) )
		$facebook = $instance[ 'facebook' ];
		else
		$facebook = __( '#', 'rollback-wordpress-theme' );

		if ( isset( $instance[ 'linkedin' ] ) )
		$linkedin = $instance[ 'linkedin' ];
		else
		$linkedin = __( '#', 'rollback-wordpress-theme' );

		if ( isset( $instance[ 'pinterest' ] ) )
		$pinterest = $instance[ 'pinterest' ];
		else
		$pinterest = __( '#', 'rollback-wordpress-theme' );

		if ( isset( $instance[ 'youtube' ] ) )
		$youtube = $instance[ 'youtube' ];
		else
		$youtube = __( '#', 'rollback-wordpress-theme' );

		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php __('Title', 'rollback-wordpress-theme'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		
		<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php echo ( 'Instagram:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>" />
		
		<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php echo ( 'Twitter:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
		
		<label for="<?php echo $this->get_field_id( 'gmail' ); ?>"><?php echo ( 'Gmail:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'gmail' ); ?>" name="<?php echo $this->get_field_name( 'gmail' ); ?>" type="text" value="<?php echo esc_attr( $gmail ); ?>" />
		
		<label for="<?php echo $this->get_field_id( 'github' ); ?>"><?php echo ( 'Github:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'github' ); ?>" name="<?php echo $this->get_field_name( 'github' ); ?>" type="text" value="<?php echo esc_attr( $github ); ?>" />
		
		<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php echo ( 'Facebook:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
		
		<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php echo ( 'LinkedIn:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>" />
		
		<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php echo ( 'Pinterest:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" type="text" value="<?php echo esc_attr( $pinterest ); ?>" />
		
		<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php echo ( 'YouTube:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" type="text" value="<?php echo esc_attr( $youtube ); ?>" />
		
		</p>
		<?php
		}
	
	
		/*Burada, özel widget’ın nasıl kurulduğunu görebilirsiniz. Kullanıcı bir başlık tanımlamışsa 
		o başlık bizim oluşturduğumuz HTML formuna eklenir. Aksi takdirde, başlığın adını Varsayılan
		 Başlık olarak ayarlarız. Widget’ın WordPress yönetici alanında nasıl görüneceği budur.
		Son olarak, ayarları değiştirdiğinde widget’i yenilemek için güncelleme işlevini uygulamamız gerekir. */
		public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
		$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
		$instance['gmail'] = ( ! empty( $new_instance['gmail'] ) ) ? strip_tags( $new_instance['gmail'] ) : '';
		$instance['github'] = ( ! empty( $new_instance['github'] ) ) ? strip_tags( $new_instance['github'] ) : '';
		$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
		$instance['linkedin'] = ( ! empty( $new_instance['linkedin'] ) ) ? strip_tags( $new_instance['linkedin'] ) : '';
		$instance['pinterest'] = ( ! empty( $new_instance['github'] ) ) ? strip_tags( $new_instance['pinterest'] ) : '';
		$instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';
		return $instance;
		}
		
		}
	/* ---------------------------------------------------------- Arama Kutusu widget --------------------------------------------------*/
function rollback_search_widget() {
	register_widget( 'rollback_search' );
	}
	
	add_action( 'widgets_init', 'rollback_search_widget' );
	
	class rollback_search extends WP_Widget {
	
	function __construct() {
	parent::__construct(
	// widget ID
	'rollback_search',
	// widget name
	__('Rollback - Search Box', 'rollback-wordpress-theme'),
	// widget description
	array( 'description' => __( 'Rollback search box', 'rollback-wordpress-theme' ), )
	);
	}


	/* Burada widget’ımızın çıktısını metnini ve kullanıcının belirlediği başlığı gösterecek şekilde ayarladık. */
	public function widget( $args, $instance ) {

	echo $args['before_widget'];
	$rollback_search = $instance['rollback_search_box'];
	//if title is present

	//output
	?>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6">    

		<form role="search" action="<?php echo home_url( '/' ); ?>" method="get">
		<div id="custom-search-input">
				<div class="input-group">
					
					<input type="text" class="search-query form-control"for="s" name="s" id="s" placeholder="<?php echo $rollback_search; ?>" />
					<span class="input-group-btn">
						<button type="submit">
							<span class="fa fa-search"></span>
						</button>
					</span>
				</div>
			</div>
		</form>


		</div>
		</div>
	<?php
	wp_reset_query();

	echo $args['after_widget'];
	}


	/*Şimdi form() metodunu kullanarak widget’ın arka kısmını programlamalıyız. */
	public function form( $instance ) {
	if ( isset( $instance[ 'rollback_search_box' ] ) )
	$rollback_search = $instance[ 'rollback_search_box' ];
	else
	$rollback_search = __( 'Search...', 'rollback-wordpress-theme' );
	?>
	<p>

	<label for="<?php echo $this->get_field_id( 'rollback_search_box' ); ?>"><?php __('Search Value:', 'rollback-wordpress-theme'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'rollback_search_box' ); ?>" name="<?php echo $this->get_field_name( 'rollback_search_box' ); ?>" type="text" value="<?php echo esc_attr( $rollback_search ); ?>" />
	
	</p>
	<?php
	}


	/*Burada, özel widget’ın nasıl kurulduğunu görebilirsiniz. Kullanıcı bir başlık tanımlamışsa 
	o başlık bizim oluşturduğumuz HTML formuna eklenir. Aksi takdirde, başlığın adını Varsayılan
	 Başlık olarak ayarlarız. Widget’ın WordPress yönetici alanında nasıl görüneceği budur.
	Son olarak, ayarları değiştirdiğinde widget’i yenilemek için güncelleme işlevini uygulamamız gerekir. */
	public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['rollback_search_box'] = ( ! empty( $new_instance['rollback_search_box'] ) ) ? strip_tags( $new_instance['rollback_search_box'] ) : '';
	return $instance;
	}
	
	}
?>
