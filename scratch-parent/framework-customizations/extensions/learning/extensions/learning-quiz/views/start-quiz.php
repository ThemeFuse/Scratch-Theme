<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var int $lesson_id
 */

if ( fw_ext_learning_quiz_has_quiz( $lesson_id ) ) : ?>
	<h4 class="start-quiz">
		<i class="fa fa-check-circle-o"></i>
		<a href="<?php echo fw_ext_learning_quiz_get_quiz_permalink( $lesson_id ) ?>"><?php _e( 'Start Quiz',
				'unyson' ) ?></a>
	</h4>
<?php endif ?>