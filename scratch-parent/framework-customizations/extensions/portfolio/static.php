<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

fw_include_file_isolated( fw_ext( 'portfolio' )->get_path( '/static.php' ) );

if ( ! is_admin() ) {

	$ext_instance = fw()->extensions->get( 'portfolio' );
	$settings     = $ext_instance->get_settings();

	if ( is_tax( $settings['taxonomy_name'] ) || is_post_type_archive( $settings['post_type'] ) ) {
		wp_enqueue_script(
			'fw-extension-' . $ext_instance->get_name() . '-mixitup',
			$ext_instance->locate_js_URI( 'jquery.mixitup.min' ),
			array( 'jquery' ),
			$ext_instance->manifest->get_version(),
			true
		);
		wp_enqueue_script(
			'fw-extension-' . $ext_instance->get_name() . '-script',
			$ext_instance->locate_js_URI( 'portfolio-script' ),
			array( 'fw-extension-' . $ext_instance->get_name() . '-mixitup' ),
			$ext_instance->manifest->get_version(),
			true
		);

	}
}



