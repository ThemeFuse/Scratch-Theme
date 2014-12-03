<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

/**
 * Theme Includes
 */
require_once get_template_directory() .'/inc/init.php';

/**
 * TGM Plugin Activation
 */
{
	require_once dirname( __FILE__ ) . '/TGM-Plugin-Activation/class-tgm-plugin-activation.php';

	/** @internal */
	function _action_theme_register_required_plugins() {
		tgmpa( array(
			array(
				'name'      => 'Unyson',
				'slug'      => 'unyson',
				'required'  => true,
			),
		) );

	}
	add_action( 'tgmpa_register', '_action_theme_register_required_plugins' );
}
