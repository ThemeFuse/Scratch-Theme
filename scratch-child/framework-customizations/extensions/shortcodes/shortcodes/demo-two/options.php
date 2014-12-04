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
	),
	'text_style' => array(
		'label'   => __('Style', 'unyson'),
		'desc'    => __('Choose the text font style', 'unyson'),
		'type'    => 'radio',
		'choices' => array(
			'normal' => __('Normal', 'unyson'),
			'italic' => __('Italic', 'unyson'),
		),
		'value'   => 'normal'
	),
	'text_bold' => array(
		'label'   => __('Bold', 'unyson'),
		'desc'    => __('Choose whether the text is bold or not', 'unyson'),
		'type'    => 'switch',
	)
);