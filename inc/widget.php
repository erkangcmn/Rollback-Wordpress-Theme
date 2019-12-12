<?php

/* ---------------------------------------------------------- Trend yazıları widget --------------------------------------------------*/
function hstngr_register_widget() {
	register_widget( 'hstngr_widget' );
	}
	
	add_action( 'widgets_init', 'hstngr_register_widget' );
	
	class hstngr_widget extends WP_Widget {
	
	function __construct() {
	parent::__construct(
	// widget ID
	'hstngr_widget',
	// widget name
	__('Trend Yazılar', ' hstngr_widget_domain'),
	// widget description
	array( 'description' => __( 'Hostinger Widget Tutorial', 'hstngr_widget_domain' ), )
	);
	}


	/* Burada widget’ımızın çıktısını metnini ve kullanıcının belirlediği başlığı gösterecek şekilde ayarladık. */
	public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );
	echo $args['before_widget'];
	//if title is present
	if ( ! empty( $title ) )
	echo $args['before_title'] . $title . $args['after_title'];
	//output
	query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=4');


	if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row mt-3" style="font-family: sans-serif; font-style:normal;font-weight:300" >

		<div class="col-5"><a href="<?php the_permalink(); ?>">
			<img src="<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url();}
			else{ echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg'; }?>" 
			style="width: 130px !important;height:75px !important;border-radius:4px;"/></a>
		</div>

		<div class="col-7"> 
			<span  style="font-size:16px;font-weight:600"><?php the_title(); ?></span></a><br>
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
	$title = __( 'Default Title', 'hstngr_widget_domain' );
	?>
	<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
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
		__('Social Media Ikons', ' social_media_domain'),
		// widget description
		array( 'description' => __( 'Hostinger Widget Tutorial', 'social_media_domain' ), )
		);
		}
	
	
		/* Burada widget’ımızın çıktısını metnini ve kullanıcının belirlediği başlığı gösterecek şekilde ayarladık. */
		public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $args['before_widget'];
		//if title is present
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];
		//output
		?>
		<div class="row mt-3">
        <ul class="soc">

            <li><a href="#" class="icon-15 instagram" title="Instagram"><svg viewBox="0 0 512 512"><g><path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"/><path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"/><circle cx="351.5" cy="160.5" r="21.5"/></g></svg><!--[if lt IE 9]><em>Instagram</em><![endif]--></a></li>
            
            <li><a href="#" class="icon-26 twitter" title="Twitter"><svg viewBox="0 0 512 512"><path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"/></svg><!--[if lt IE 9]><em>Twitter</em><![endif]--></a></li>

            <li><a href="#" class="icon-8 email" title="Email"><svg viewBox="0 0 512 512"><path d="M101.3 141.6v228.9h0.3 308.4 0.8V141.6H101.3zM375.7 167.8l-119.7 91.5 -119.6-91.5H375.7zM127.6 194.1l64.1 49.1 -64.1 64.1V194.1zM127.8 344.2l84.9-84.9 43.2 33.1 43-32.9 84.7 84.7L127.8 344.2 127.8 344.2zM384.4 307.8l-64.4-64.4 64.4-49.3V307.8z"/></svg><!--[if lt IE 9]><em>Email</em><![endif]--></a></li>

            <li><a href="#" class="icon-13 github" title="GitHub"><svg viewBox="0 0 512 512"><path d="M256 70.7c-102.6 0-185.9 83.2-185.9 185.9 0 82.1 53.3 151.8 127.1 176.4 9.3 1.7 12.3-4 12.3-8.9V389.4c-51.7 11.3-62.5-21.9-62.5-21.9 -8.4-21.5-20.6-27.2-20.6-27.2 -16.9-11.5 1.3-11.3 1.3-11.3 18.7 1.3 28.5 19.2 28.5 19.2 16.6 28.4 43.5 20.2 54.1 15.4 1.7-12 6.5-20.2 11.8-24.9 -41.3-4.7-84.7-20.6-84.7-91.9 0-20.3 7.3-36.9 19.2-49.9 -1.9-4.7-8.3-23.6 1.8-49.2 0 0 15.6-5 51.1 19.1 14.8-4.1 30.7-6.2 46.5-6.3 15.8 0.1 31.7 2.1 46.6 6.3 35.5-24 51.1-19.1 51.1-19.1 10.1 25.6 3.8 44.5 1.8 49.2 11.9 13 19.1 29.6 19.1 49.9 0 71.4-43.5 87.1-84.9 91.7 6.7 5.8 12.8 17.1 12.8 34.4 0 24.9 0 44.9 0 51 0 4.9 3 10.7 12.4 8.9 73.8-24.6 127-94.3 127-176.4C441.9 153.9 358.6 70.7 256 70.7z"/></svg><!--[if lt IE 9]><em>GitHub</em><![endif]--></a></li>

            
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
		$title = __( 'Default Title', 'social_media_domain' );
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
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
		return $instance;
		}
		
		}
/* ----------------------------------------Hakkımda Kısmı-----------------------------------------------*/
function about_me() {
	register_widget( 'about_me_widget' );
	}
	
	add_action( 'widgets_init', 'about_me' );
	
	class about_me_widget extends WP_Widget {
	
	function __construct() {
	parent::__construct(
	// widget ID
	'about_me_widget',
	// widget name
	__('About Me', ' about_me_domain'),
	// widget description
	array( 'description' => __( 'Hostinger Widget Tutorial', 'about_me_domain' ), )
	);
	}


	/* Burada widget’ımızın çıktısını metnini ve kullanıcının belirlediği başlığı gösterecek şekilde ayarladık. */
	public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );
	echo $args['before_widget'];
	//if title is present
	if ( ! empty( $title ) )
	echo $args['before_title'] . $title . $args['after_title'];
	//output
	?>
	<div class="row mt-3">
	<div class="col-12">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="http://localhost/wordpress/wp-content/uploads/2019/10/hack.png" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Erkan Göçmen</h5>
					<p class="card-text">Widget tarafından buraya yazı ekleme yapmayı düşünüyorum ne dersin berkay yapılabilir mi? hakkımda kısmı olmasını istiyorum</p>
				</div>
				</div>
			</div>
	</div>
	
	<?php

	echo $args['after_widget'];
	}


	/*Şimdi form() metodunu kullanarak widget’ın arka kısmını programlamalıyız. */
	public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) )
	$title = $instance[ 'title' ];
	else
	$title = __( 'Default Title', 'about_me_domain' );
	?>
	<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
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
	return $instance;
	}
	
	}


?>
