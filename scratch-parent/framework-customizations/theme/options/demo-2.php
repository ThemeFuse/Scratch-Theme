<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array();

foreach (fw()->theme->get_options('demo') as $option_id => $option) {
	if (!is_string($option_id)) continue;

	$options[ $option_id .'_2' ] = $option;
}
