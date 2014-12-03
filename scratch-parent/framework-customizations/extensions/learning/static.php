<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var Fw_Extension_Learning $learning
 */
$learning = fw()->extensions->get( 'learning' );

if ( is_admin() || ! $learning->is_course() ) {
	return;
}

wp_enqueue_style(
	$learning->get_name() . '-course-style',
	$learning->locate_css_URI( 'course-style' )
);

wp_enqueue_script(
	$learning->get_name() . '-course-scripts',
	$learning->locate_js_URI( 'scripts' ),
	array( 'jquery', 'jquery-ui-tabs' ),
	fw()->manifest->get_version(), false
);