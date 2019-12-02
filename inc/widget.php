<?php

/* Trend yazıları wiget */
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
	query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=5');
	if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row mt-3" >
		<div class="col-4"><a href="<?php the_permalink(); ?>">

<img src="<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url();}
else{ echo get_site_url().'/wp-content/themes/wayne/photos/post-image.jpg'; }?>" 
style="width: 150px !important;height:90px !important"/></a></div>
   <div class="col-8"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
   <?php the_date("d M y"); ?><br>
   Yazar: <?php the_author_posts_link(); ?> | Görüntülenme: <?php echo getPostViews(get_the_ID()); ?>

   
   </div></div>
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


?>