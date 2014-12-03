<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

function _filter_fw_ext_learning_excerpt_length( $length ) {
	/**
	 * @var FW_Extension_Learning $learning
	 */
	$learning = fw()->extensions->get( 'learning' );
	global $post;

	if ( $learning->is_course( $post->ID ) ) {
		return 80;
	}

	return $length;
}

add_filter( 'excerpt_length', '_filter_fw_ext_learning_excerpt_length', 9999 );

function _filter_fw_ext_learning_excerpt_more( $more ) {

	/**
	 * @var FW_Extension_Learning $learning
	 */
	$learning = fw()->extensions->get( 'learning' );
	global $post;

	if ( $learning->is_course( $post->ID ) ) {
		return '';
	}

	return $more;
}

add_filter( 'excerpt_more', '_filter_fw_ext_learning_excerpt_more' );