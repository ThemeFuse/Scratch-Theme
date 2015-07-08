<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_Flickr extends WP_Widget {

	/**
	 * @internal
	 */
	function __construct() {
		$widget_ops = array( 'description' => '' );
		parent::__construct( false, __( 'Flickr', 'unyson' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		$flickr_id = esc_attr( $instance['flickr_id'] );
		$title     = esc_attr( $instance['title'] );
		$number    = ( (int) ( esc_attr( $instance['number'] ) ) > 0 ) ? esc_attr( $instance['number'] ) : 9;
		$before_widget = str_replace( 'class="', 'class="widget_flickr_image_gallery ', $before_widget );
		$title         = str_replace( 'class="', 'class="widget_flickr_image_gallery ',
				$before_title ) . $title . $after_title;

		wp_enqueue_script(
			'fw-theme-flickr-widget',
			get_template_directory_uri() . '/inc/widgets/flickr/static/js/scripts.js',
			array( 'jquery' ),
			'1.0'
		);

		$filepath = dirname( __FILE__ ) . '/views/widget.php';

		if ( file_exists( $filepath ) ) {
			include( $filepath );
		}
	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'flickr_id' => '', 'number' => '', 'title' => '' ) );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'unyson' ); ?> </label>
			<input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>"
			       value="<?php echo esc_attr( $instance['title'] ); ?>" class="widefat"
			       id="<?php $this->get_field_id( 'title' ); ?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'flickr_id' ); ?>"><?php _e( 'Flickr ID', 'unyson' ); ?> (<a
					href="http://www.idgettr.com" target="_blank">idGettr</a>):</label>
			<input type="text" name="<?php echo $this->get_field_name( 'flickr_id' ); ?>"
			       value="<?php echo esc_attr( $instance['flickr_id'] ); ?>" class="widefat"
			       id="<?php $this->get_field_id( 'flickr_id' ); ?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of photos', 'unyson' ); ?>
				:</label>
			<input type="text" name="<?php echo $this->get_field_name( 'number' ); ?>"
			       value="<?php echo esc_attr( $instance['number'] ); ?>" class="widefat"
			       id="<?php echo $this->get_field_id( 'number' ); ?>"/>
		</p>
	<?php
	}
}
