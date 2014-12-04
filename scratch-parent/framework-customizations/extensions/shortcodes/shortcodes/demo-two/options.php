<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'text' => array(
		'label'   => __('Text', 'unyson'),
		'desc'    => __('Write some text', 'unyson'),
		'type'    => 'textarea',
	),
	'text_color' => array(
		'label'   => __('Color', 'unyson'),
		'desc'    => __('Choose the text color', 'unyson'),
		'type'    => 'select',
		'choices' => array(
			'red'   => __('Red', 'unyson'),
			'green' => __('Green', 'unyson'),
			'blue'  => __('Blue', 'unyson')
		)
	)
);