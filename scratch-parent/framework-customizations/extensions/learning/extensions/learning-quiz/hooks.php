<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( ! function_exists( '_filter_ext_learning_quiz_builder_widths' ) ):
	function _filter_ext_learning_quiz_builder_widths( $default_widths ) {
		return array(
			'1_5' => array(
				'title'          => '1/5',
				'backend_class'  => 'fw-builder-col-1-5',
				'frontend_class' => 'shortcode-column column-1-5',
			),
			'1_4' => array(
				'title'          => '1/4',
				'backend_class'  => 'fw-col-sm-3',
				'frontend_class' => 'shortcode-column column-1-4',
			),
			'1_3' => array(
				'title'          => '1/3',
				'backend_class'  => 'fw-col-sm-4',
				'frontend_class' => 'shortcode-column column-1-3',
			),
			'1_2' => array(
				'title'          => '1/2',
				'backend_class'  => 'fw-col-sm-6',
				'frontend_class' => 'shortcode-column column-1-2',
			),
			'2_3' => array(
				'title'          => '2/3',
				'backend_class'  => 'fw-col-sm-8',
				'frontend_class' => 'shortcode-column column-2-3',
			),
			'3_4' => array(
				'title'          => '3/4',
				'backend_class'  => 'fw-col-sm-9',
				'frontend_class' => 'shortcode-column column-3-4',
			),
			'1_1' => array(
				'title'          => '1/1',
				'backend_class'  => 'fw-col-sm-12',
				'frontend_class' => 'shortcode-column column-1-1',
			),
		);
	}
endif;
add_filter( 'fw_builder_item_widths:quiz-builder', '_filter_ext_learning_quiz_builder_widths' );
