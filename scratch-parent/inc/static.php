<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Include static files: javascript and css
 */

if ( is_admin() ) {
	return;
}

/**
 * Enqueue scripts and styles for the front end.
 */

// Add Lato font, used in the main stylesheet.
wp_enqueue_style(
	'fw-theme-lato',
	fw_theme_font_url(),
	array(),
	'1.0'
);

// Add Genericons font, used in the main stylesheet.
wp_enqueue_style(
	'genericons',
	get_template_directory_uri() . '/genericons/genericons.css',
	array(),
	'1.0'
);

// Load our main stylesheet.
wp_enqueue_style(
	'fw-theme-style',
	get_stylesheet_uri(),
	array( 'genericons' ),
	'1.0'
);

// Load the Internet Explorer specific stylesheet.
wp_enqueue_style(
	'fw-theme-ie',
	get_template_directory_uri() . '/css/ie.css',
	array( 'fw-theme-style', 'genericons' ),
	'1.0'
);
wp_style_add_data( 'fw-theme-ie', 'conditional', 'lt IE 9' );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

if ( is_singular() && wp_attachment_is_image() ) {
	wp_enqueue_script(
		'fw-theme-keyboard-image-navigation',
		get_template_directory_uri() . '/js/keyboard-image-navigation.js',
		array( 'jquery' ),
		'1.0'
	);
}

if ( is_active_sidebar( 'sidebar-1' ) ) {
	wp_enqueue_script( 'jquery-masonry' );
}

if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
	wp_enqueue_script(
		'fw-theme-slider',
		get_template_directory_uri() . '/js/slider.js',
		array( 'jquery' ),
		'1.0',
		true
	);
	wp_localize_script( 'fw-theme-slider', 'featuredSliderDefaults', array(
		'prevText' => __( 'Previous', 'unyson' ),
		'nextText' => __( 'Next', 'unyson' )
	) );
}

wp_enqueue_script(
	'jquery-ui-tabs',
	get_template_directory_uri() . '/js/jquery-ui-1.10.4.custom.js',
	array( 'jquery' ),
	'1.0',
	true
);

wp_enqueue_script(
	'fw-theme-script',
	get_template_directory_uri() . '/js/functions.js',
	array( 'jquery' ),
	'1.0',
	true
);

// Font Awesome stylesheet
wp_enqueue_style(
	'font-awesome',
	get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css',
	array(),
	'1.0'
);


wp_enqueue_script(
	'jquery-custom-input',
	get_template_directory_uri() . '/js/jquery.customInput.js',
	array( 'jquery' ),
	'1.0',
	true
);

// Selectize
{
	wp_enqueue_style(
		'selectize-css',
		get_template_directory_uri() . '/css/selectize.css',
		array(),
		'1.0'
	);
	wp_enqueue_script(
		'selectize-js',
		get_template_directory_uri() . '/js/selectize.js',
		array( 'jquery' ),
		'1.0',
		true
	);
}

