<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $item
 * @var string $type
 * @var array $attr
 * @var int $max_width
 */

$options = $item['options'];
?>
<div class="<?php echo esc_attr( fw_ext_builder_get_item_width( 'quiz-builder',
		$item['width'] . '/frontend_class' ) ) ?>">
	<div class="field-gap">
		<label
			for="<?php echo esc_attr( $attr['id'] ) ?>"><?php echo $item['number'] . ') ' . fw_htmlspecialchars( $item['options']['question'] ) ?></label>

		<p><?php echo $options['text-before'] ?> <input type="text" value="" id="<?php echo esc_attr( $attr['id'] ) ?>"
		                                                class="fill-gap"
		                                                autocomplete="off"
		                                                size="<?php echo strlen( $options['correct-answer'] ) + 2 ?>"
		                                                name="<?php echo esc_attr( $attr['name'] ) ?>"/> <?php echo $options['text-after'] ?>
		</p>
	</div>
</div>