<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'demo_text' => array(
		'label'   => __('Demo Text', 'unyson'),
		'desc'    => __('This is just a demonstration. To actually make use of the options you must edit the view file.', 'unyson'),
		'type'    => 'text'
	),
	'demo_select' => array(
		'label'   => __('Demo Select', 'unyson'),
		'desc'    => __('This is just a demonstration. To actually make use of the options you must edit the view file.', 'unyson'),
		'type'    => 'select',
		'choices' => array(
			'one'   => __('Choice One', 'unyson'),
			'two'   => __('Choice Two', 'unyson'),
			'three' => __('Choice Three', 'unyson'),
		)
	),
);