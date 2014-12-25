<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'General', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'General Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					'logo'    => array(
						'label' => __( 'Logo', 'unyson' ),
						'desc'  => __( 'Write your website logo name', 'unyson' ),
						'type'  => 'text',
						'value' => get_bloginfo( 'name' )
					),
					'favicon' => array(
						'label' => __( 'Favicon', 'unyson' ),
						'desc'  => __( 'Upload a favicon image', 'unyson' ),
						'type'  => 'upload'
					),
					'test_slider10' => array(
						'label' => __( 'Slider 1', 'unyson' ),
						'desc'  => __( 'fgi teg tg tg trt', 'unyson' ),
						'type'  => 'slider',
						'value' => array(
							'from'  => 100,
							'to'    => 500
						),
						'properties'   => array(
							'min'   => 0,
							'max'   => 10000,
							'step'  => 500,
							//'grid'  => true,
							//'grid_snap' => true,
						),
					),
					'test_slider11' => array(
						'label' => __( 'Slider 2', 'unyson' ),
						'desc'  => __( 'fgi teg tg tg trt', 'unyson' ),
						'type'  => 'slider',
						'value' => 4000,
						'properties'   => array(
							'min'   => 0,
							'max'   => 10000,
							'step'  => 1000,
							'grid'  => true,
							'grid_snap' => true
						),
					),
				)
			),
		)
	)
);