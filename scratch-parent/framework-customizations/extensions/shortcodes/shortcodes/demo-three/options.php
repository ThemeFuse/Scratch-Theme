<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'view' => array(
		'label'   => __('View', 'unyson'),
		'desc'    => __('Choose what view file should the shortcode pick', 'unyson'),
		'type'    => 'select',
		'choices' => array(
			'a'    => __('View A', 'unyson'),
			'b'    => __('View B', 'unyson'),
			'c'    => __('View C', 'unyson'),
			'rand' => __('Random View', 'unyson')
		)
	)
);