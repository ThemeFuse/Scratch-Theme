<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $item
 * @var string $type
 * @var array $attr
 * @var int $max_width
 */

$options        = $item['options'];
$choice_options = $item['options']['wrong-answers'];
$choice_options = array_merge( $choice_options, $item['options']['correct-answers'] );
shuffle( $choice_options );
?>
<div class="<?php echo esc_attr( fw_ext_builder_get_item_width( 'quiz-builder',
		$item['width'] . '/frontend_class' ) ) ?>">
	<div class="field-checkbox input-styled">
		<label><?php echo $item['number'] . ') ' . fw_htmlspecialchars( $item['options']['question'] ) ?></label>

		<div class="custom-checkbox">
			<?php $counter = 1;
			foreach ( $choice_options as $option ) : ?>
				<div class="options">
					<input type="checkbox" value="<?php echo esc_attr( $option ) ?>"
					       id="<?php echo esc_attr( $attr['id'] ) . $counter ?>"
					       name="<?php echo esc_attr( $attr['name'] ) ?>"/>
					<label
						for="<?php echo esc_attr( $attr['id'] ) . $counter ++ ?>"><?php echo esc_attr( $option ) ?></label>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>