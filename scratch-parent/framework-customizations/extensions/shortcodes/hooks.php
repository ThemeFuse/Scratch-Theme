<?php if (!defined('FW')) die('Forbidden');

/** @internal */
function _filter_disable_shortcodes($to_disable)
{
	$to_disable[] = 'demo_disabled';
//	$to_disable[] = 'some_other_shortcode';
	return $to_disable;
}
add_filter('fw_ext_shortcodes_disable_shortcodes', '_filter_disable_shortcodes');