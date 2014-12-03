<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'test1z' => array(
		'label' => __('Type of Transition', 'unyson'),
		'desc'  => __('Type of transition between slides', 'unyson'),
		'type'  => 'select',
		'choices' => array(
			'horizontal' => __('Horizontal', 'unyson'),
			'vertical' => __('Vertical', 'unyson'),
			'fade' => __('Fade', 'unyson')
		),
		'value' => 'horizontal',
	)
);
