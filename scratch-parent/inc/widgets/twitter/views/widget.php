<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * @var $number
 * @var $before_widget
 * @var $after_widget
 * @var $title
 * @var $tweets
 */

echo $before_widget;
echo $title;
?>
	<div class="wrap-twitter">
		<ul>
			<?php
			foreach ( $tweets as $tweet ) {
				echo '<li>' . $tweet->text . '</li>';
			}
			?>
		</ul>
	</div>
<?php echo $after_widget ?>
