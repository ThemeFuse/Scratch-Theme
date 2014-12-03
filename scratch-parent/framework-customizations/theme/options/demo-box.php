<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'demo' => array(
		'title'   => __( 'Demo Options', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'sub_tab_1' => array(
				'title'   => __( 'Without Box', 'unyson' ),
				'type'    => 'tab',
				'options' => array(
					fw()->theme->get_options( 'demo-2' ),
				),
			),
			'sub_tab_2' => array(
				'title'   => __( 'With Box', 'unyson' ),
				'type'    => 'tab',
				'options' => array(
					'demo_box' => array(
						'title'   => __( 'Box', 'unyson' ),
						'type'    => 'box',
						'options' => array(
							fw()->theme->get_options( 'demo' ),
						),
					),
				),
			),
		),
	),
);