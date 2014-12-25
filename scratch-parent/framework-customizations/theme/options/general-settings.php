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
					)
				)
			),
		)
	)
);