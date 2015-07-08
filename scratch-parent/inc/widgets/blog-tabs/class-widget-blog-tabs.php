<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_Blog_Tabs extends WP_Widget {

	/**
	 * @internal
	 */
	public function __construct() {
		$widget_ops = array( 'description' => '' );
		parent::__construct( false, __( 'Blog Tabs', 'unyson' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$number = ( (int) ( $instance['number'] ) > 0 ) ? esc_attr( $instance['number'] ) : 5;

		$recent_posts = $this->fw_get_posts_with_info( array(
			'sort'  => 'post_date',
			'items' => $number,
		) );

		$popular_posts = $this->fw_get_posts_with_info( array(
			'sort'  => 'comment_count',
			'items' => $number,
		) );

		$before_widget = str_replace( 'class="', 'class="wrap-tabs ', $before_widget );

		$this->_theme_action_add_static();

		$filepath = dirname( __FILE__ ) . '/views/widget.php';

		if ( file_exists( $filepath ) ) {
			include( $filepath );
		}
	}

	/**
	 * @param array $args
	 *
	 * @return array
	 */
	public function fw_get_posts_with_info( $args = array() ) {
		$defaults = array(
			'sort'        => 'recent',
			'items'       => 5,
			'image_post'  => true,
			'date_post'   => true,
			'date_format' => 'F jS, Y',
			'post_type'   => 'post',
		);

		extract( wp_parse_args( $args, $defaults ) );

		$query        = new WP_Query( array(
			'post_type'      => $post_type,
			'orderby'        => $sort,
			'order '         => 'DESC',
			'posts_per_page' => $items
		) );
		$result_posts = $query->posts;

		$posts_with_info = array();

		foreach ( $result_posts as $post ) {
			$posts_with_info[ $post->ID ]['post_title'] = $post->post_title;
			$posts_with_info[ $post->ID ]['post_link']  = $post->guid;
		}

		wp_reset_query();

		return $posts_with_info;
	}

	/**
	 * @internal
	 */
	public function _theme_action_add_static() {
		wp_enqueue_script(
			'fw-theme-blog-tabs-widget',
			get_template_directory_uri() . '/inc/widgets/blog-tabs/static/js/scripts.js',
			array( 'jquery' ),
			'1.0'
		);
	}

	/**
	 * @param array $new_instance
	 * @param array $old_instance
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	/**
	 * @param array $instance
	 *
	 * @return string|void
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'number' => '', 'title' => '' ) );
		$number   = esc_attr( $instance['number'] );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of Blog posts', 'unyson' ); ?>
				:</label>
			<input type="text" name="<?php echo $this->get_field_name( 'number' ); ?>" value="<?php echo $number; ?>"
			       class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>"/>
		</p>
	<?php
	}
}
