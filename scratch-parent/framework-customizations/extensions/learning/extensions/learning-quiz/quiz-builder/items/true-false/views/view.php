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
	<div class="field-radio input-styled">
		<label><?php echo $item['number'] . ') ' . fw_htmlspecialchars( $item['options']['question'] ) ?></label>

		<div class="custom-radio">
			<div class="options">
				<input type="radio" value="true" id="<?php echo esc_attr( $attr['id'] ) ?>-true"
				       name="<?php echo esc_attr( $attr['name'] ) ?>"/>
				<label for="<?php echo esc_attr( $attr['id'] ) ?>-true"><?php _e( 'True', 'unyson' ) ?></label>
			</div>
			<div class="options">
				<input type="radio" value="false" id="<?php echo esc_attr( $attr['id'] ) ?>-false"
				       name="<?php echo esc_attr( $attr['name'] ) ?>"/>
				<label for="<?php echo esc_attr( $attr['id'] ) ?>-false"><?php _e( 'False', 'unyson' ) ?></label>
			</div>
		</div>
	</div>
</div>