<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Register menus
 */

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'primary'   => __( 'Top primary menu', 'unyson' ),
	'secondary' => __( 'Secondary menu in left sidebar', 'unyson' ),
) );