<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * @var $number
 * @var $before_widget
 * @var $after_widget
 * @var $title
 * @var $posts
 */
echo $before_widget;
echo $title;
?>
	<div class="wrap-flickr">
		<ul>
			<?php
			foreach ( $posts as $post ) {
				if ( isset( $post->message ) ) {
					echo '<li>' . $post->message . '</li>';
				}
			}
			?>
		</ul>
	</div>
<?php echo $after_widget ?>