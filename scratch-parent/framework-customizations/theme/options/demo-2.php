<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'demo_text_2'                      => array(
		'label' => __( 'Text', 'unyson' ),
		'type'  => 'text',
		'value' => 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_short_text_2'                => array(
		'label' => __( 'Short Text', 'unyson' ),
		'type'  => 'short-text',
		'value' => '7',
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_password_2'                  => array(
		'label' => __( 'Password', 'unyson' ),
		'type'  => 'password',
		'value' => 'Dotted text',
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_hidden_2'                    => array(
		'label' => false,
		'type'  => 'hidden',
		'value' => '{some: "json"}',
		'desc'  => false,
	),
	'demo_textarea_2'                  => array(
		'label' => __( 'Textarea', 'unyson' ),
		'type'  => 'textarea',
		'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => array(
			'icon' => 'video',
			'html' => '<iframe width="420" height="236" src="https://player.vimeo.com/video/101070863" frameborder="0" allowfullscreen></iframe>'
		),
	),
	'demo_wp_editor_2'                 => array(
		'label' => __( 'Rich Text Editor', 'unyson' ),
		'type'  => 'wp-editor',
		'value' => 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
		'reinit' => true,
	),
	'demo_html_2'                      => array(
		'label' => __( 'HTML', 'unyson' ),
		'type'  => 'html',
		'value' => '{some: "json"}',
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'html'  => '<em>Lorem</em> <b>ipsum</b> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAANbY1E9YMgAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAADWSURBVDjLlZNNCsIwEEZzKW/jyoVbD+Aip/AGgmvRldCKNxDBv4LSfSG7kBZix37BQGiapA48ZpjMvIZAGRExwDmnESw7MMvsHnMFTdOQUsqjrmtXsggKEEVReCDseZc/HbOgoCxLDytwUEFBVVUe/fjNDguEEFGSAiml4Xq+DdZJAV78sM1oOpnT/fI0oEYPZ0lBtjuaBWSttcHtRQWvx9sMrlcb7+HQwxlmojfI9ycziGyj34sK3AV8zd7KFSYFCCwO1aMFsQgK8DO1bRsFM0HBP9i9L2ONMKHNZV7xAAAAAElFTkSuQmCC">',
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_checkbox_2'                  => array(
		'label' => __( 'Checkbox', 'unyson' ),
		'type'  => 'checkbox',
		'value' => true,
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'text'  => __( 'Custom text', 'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_checkboxes_2'                => array(
		'label'   => __( 'Checkboxes', 'unyson' ),
		'type'    => 'checkboxes',
		'value'   => array(
			'c1' => false,
			'c2' => true,
		),
		'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'choices' => array(
			'c1' => __( 'Checkbox 1 Custom Text', 'unyson' ),
			'c2' => __( 'Checkbox 2 Custom Text', 'unyson' ),
			'c3' => __( 'Checkbox 3 Custom Text', 'unyson' ),
		),
		'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_switch_2'                    => array(
		'label'        => __( 'Switch', 'unyson' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'unyson' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'unyson' )
		),
		'value'        => 'yes',
		'desc'         => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'         => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_select_2'                    => array(
		'label'   => __( 'Select', 'unyson' ),
		'type'    => 'select',
		'value'   => 'c',
		'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'choices' => array(
			''  => '---',
			'a' => __( 'Lorem ipsum', 'unyson' ),
			'b' => array(
				'text' => __( 'Consectetur', 'unyson' ),
				'attr' => array(
					'label'         => 'Label overrides text',
					'data-whatever' => 'some data',
				),
			),
			array(
				'attr'    => array(
					'label'         => __( 'Optgroup Label', 'unyson' ),
					'data-whatever' => 'some data',
				),
				'choices' => array(
					'c' => __( 'Sed ut perspiciatis', 'unyson' ),
					'd' => __( 'Excepteur sint occaecat', 'unyson' ),
				),
			),
			1   => __( 'One', 'unyson' ),
			2   => __( 'Two', 'unyson' ),
			3   => __( 'Three', 'unyson' ),
		),
		'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_short_select_2'              => array(
		'label'   => __( 'Short Select', 'unyson' ),
		'type'    => 'short-select',
		'value'   => '7',
		'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'choices' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',
			'7' => '7',
		),
		'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_select_multiple_2'           => array(
		'label'   => __( 'Select Multiple', 'unyson' ),
		'type'    => 'select-multiple',
		'value'   => array( 'c', '2' ),
		'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'choices' => array(
			''  => '---',
			'a' => __( 'Lorem ipsum', 'unyson' ),
			'b' => array(
				'text' => __( 'Consectetur', 'unyson' ),
				'attr' => array(
					'label'         => 'Label overrides text',
					'data-whatever' => 'some data',
				),
			),
			array(
				'attr'    => array(
					'label'         => __( 'Optgroup Label', 'unyson' ),
					'data-whatever' => 'some data',
				),
				'choices' => array(
					'c' => __( 'Sed ut perspiciatis', 'unyson' ),
					'd' => __( 'Excepteur sint occaecat', 'unyson' ),
				),
			),
			1   => __( 'One', 'unyson' ),
			2   => __( 'Two', 'unyson' ),
			3   => __( 'Three', 'unyson' ),
		),
		'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_group_multi_select_2'        => array(
		'type'    => 'group',
		'options' => array(
			'demo_multi_select_posts_2'      => array(
				'type'       => 'multi-select',
				'label'      => __( 'Multi-Select: Posts', 'unyson' ),
				'population' => 'posts',
				'source'     => 'page',
				'desc'       => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'       => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
			'demo_multi_select_taxonomies_2' => array(
				'type'       => 'multi-select',
				'label'      => __( 'Multi-Select: Taxonomies', 'unyson' ),
				'population' => 'taxonomy',
				'source'     => 'category',
				'desc'       => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'       => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
			'demo_multi_select_users_2'      => array(
				'type'       => 'multi-select',
				'label'      => __( 'Multi-Select: Users', 'unyson' ),
				'population' => 'users',
				'source'     => 'administrator',
				'desc'       => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'       => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
			'demo_multi_select_array_2'      => array(
				'type'       => 'multi-select',
				'label'      => __( 'Multi-Select: Custom Array', 'unyson' ),
				'population' => 'array',
				'choices'    => array(
					'hello' => __( 'Hello', 'unyson' ),
					'world' => __( 'World', 'unyson' ),
				),
				'desc'       => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'       => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
		),
	),
	'demo_radio_2'                     => array(
		'label'   => __( 'Radio', 'unyson' ),
		'type'    => 'radio',
		'value'   => 'c2',
		'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'choices' => array(
			'c1' => __( 'Radio 1 Custom Text', 'unyson' ),
			'c2' => __( 'Radio 2 Custom Text', 'unyson' ),
			'c3' => __( 'Radio 3 Custom Text', 'unyson' ),
		),
		'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_radio_text_2'                => array(
		'label'   => __( 'Radio Text', 'unyson' ),
		'type'    => 'radio-text',
		'value'   => '75',
		'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'choices' => array(
			'25'  => __( '25%', 'unyson' ),
			'50'  => __( '50%', 'unyson' ),
			'100' => __( '100%', 'unyson' ),
		),
		'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_image_picker_2'              => array(
		'label'   => __( 'Image Picker', 'unyson' ),
		'type'    => 'image-picker',
		'value'   => '',
		'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'choices' => array(
			'choice-1' => array(
				'small' => array(
					'height' => 70,
					'src'    => get_template_directory_uri() . '/images/image-picker-demo/thumb1.jpg'
				),
				'large' => array(
					'height' => 214,
					'src'    => get_template_directory_uri() . '/images/image-picker-demo/tooltip1.jpg'
				),
			),
			'choice-2' => array(
				'small' => array(
					'height' => 70,
					'src'    => get_template_directory_uri() . '/images/image-picker-demo/thumb2.jpg'
				),
				'large' => array(
					'height' => 214,
					'src'    => get_template_directory_uri() . '/images/image-picker-demo/tooltip2.jpg'
				),
			),
		),
		'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_icon_2'                      => array(
		'label' => __( 'Icon', 'unyson' ),
		'type'  => 'icon',
		'value' => 'fa fa-linux',
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_upload_2'                    => array(
		'label'       => __( 'Single Upload', 'unyson' ),
		'desc'        => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'type'        => 'upload',
		'images_only' => false,
		'help'        => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_upload_images_2'             => array(
		'label' => __( 'Single Upload (Images Only)', 'unyson' ),
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'type'  => 'upload',
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_multi_upload_2'              => array(
		'label'       => __( 'Multi Upload', 'unyson' ),
		'desc'        => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'type'        => 'multi-upload',
		'images_only' => false,
		'help'        => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_multi_upload_images_2'       => array(
		'label' => __( 'Multi Upload (Images Only)', 'unyson' ),
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'type'  => 'multi-upload',
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_color_picker_2'              => array(
		'label' => __( 'Color Picker', 'unyson' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_rgba_color_picker_2' => array(
		'label' => __( 'RGBA Color Picker', 'unyson' ),
		'type'  => 'rgba-color-picker',
		'value' => 'rgba(255, 0, 0, .5)',
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_gradient_2'                  => array(
		'label' => __( 'Gradient', 'unyson' ),
		'type'  => 'gradient',
		'value' => array(
			'primary'   => '#ffffff',
			'secondary' => '#ffffff'
		),
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_rgba_color_picker_2' => array(
		'label' => __( 'RGBA Color Picker', 'unyson' ),
		'type'  => 'rgba-color-picker',
		'value' => '',
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_background_image_2'          => array(
		'label'   => __( 'Background Image', 'unyson' ),
		'type'    => 'background-image',
		'value'   => 'none',
		'choices' => array(
			'none' => array(
				'icon' => get_template_directory_uri() . '/images/patterns/no_pattern.jpg',
				'css'  => array(
					'background-image' => 'none'
				)
			),
			'bg-1' => array(
				'icon' => get_template_directory_uri() . '/images/patterns/diagonal_bottom_to_top_pattern_preview.jpg',
				'css'  => array(
					'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/diagonal_bottom_to_top_pattern.png' . '")',
					'background-repeat' => 'repeat',
				)
			),
			'bg-2' => array(
				'icon' => get_template_directory_uri() . '/images/patterns/diagonal_top_to_bottom_pattern_preview.jpg',
				'css'  => array(
					'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/diagonal_top_to_bottom_pattern.png' . '")',
					'background-repeat' => 'repeat',
				)
			),
			'bg-3' => array(
				'icon' => get_template_directory_uri() . '/images/patterns/dots_pattern_preview.jpg',
				'css'  => array(
					'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/dots_pattern.png' . '")',
					'background-repeat' => 'repeat',
				)
			),
			'bg-4' => array(
				'icon' => get_template_directory_uri() . '/images/patterns/romb_pattern_preview.jpg',
				'css'  => array(
					'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/romb_pattern.png' . '")',
					'background-repeat' => 'repeat',
				)
			),
			'bg-5' => array(
				'icon' => get_template_directory_uri() . '/images/patterns/square_pattern_preview.jpg',
				'css'  => array(
					'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/square_pattern.png' . '")',
					'background-repeat' => 'repeat',
				)
			),
			'bg-6' => array(
				'icon' => get_template_directory_uri() . '/images/patterns/noise_pattern_preview.jpg',
				'css'  => array(
					'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/noise_pattern.png' . '")',
					'background-repeat' => 'repeat',
				)
			),
			'bg-7' => array(
				'icon' => get_template_directory_uri() . '/images/patterns/vertical_lines_pattern_preview.jpg',
				'css'  => array(
					'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/vertical_lines_pattern.png' . '")',
					'background-repeat' => 'repeat',
				)
			),
			'bg-8' => array(
				'icon' => get_template_directory_uri() . '/images/patterns/waves_pattern_preview.jpg',
				'css'  => array(
					'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/waves_pattern.png' . '")',
					'background-repeat' => 'repeat',
				)
			),
		),
		'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_typography_2'                => array(
		'label' => __( 'Typography', 'unyson' ),
		'type'  => 'typography',
		'value' => array(
			'size'   => 17,
			'family' => 'Verdana',
			'style'  => '300italic',
			'color'  => '#0000ff'
		),
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_typography-v2_2'                => array(
		'label' => __( 'Typography V2', 'unyson' ),
		'type'  => 'typography-v2',
		'value'      => array(
			'family'    => 'Amarante',
//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
//			'style' => 'italic',
//			'weight' => 700,
			'subset'    => 'latin-ext',
			'variation' => 'regular',
			'size'      => 14,
			'line-height' => 13,
			'letter-spacing' => -2,
			'color'     => '#0000ff'
		),
		'components' => array(
			'family'         => true,
			//'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
			'size'           => true,
			'line-height'    => true,
			'letter-spacing' => true,
			'color'          => true
		),
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'demo_datetime_range_2'            => array(
		'type'             => 'datetime-range',
		'attr'             => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label'            => __( 'Demo date range', 'unyson' ),
		'desc'             => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'             => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
		'datetime-pickers' => array(
			'from' => array(
				'timepicker' => false,
				'datepicker' => true,
			),
			'to'   => array(
				'timepicker' => false,
				'datepicker' => true,
			)
		),
		'value'            => array(
			'from' => '',
			'to'   => ''
		)
	),
	'demo_datetime_picker_2'           => array(
		'type'            => 'datetime-picker',
		'value'           => '',
		'attr'            => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label'           => __( 'Date & Time picker', 'unyson' ),
		'desc'            => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'            => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
		'datetime-picker' => array(
			'format'        => 'd-m-Y H:i',
			'extra-formats' => array(),
			'moment-format' => 'DD-MM-YYYY HH:mm',
			'scrollInput'   => false,
			'maxDate'       => false,
			'minDate'       => false,
			'timepicker'    => true,
			'datepicker'    => true,
			'defaultTime'   => '12:00'
		)
	),
	'demo_slider_2' => array(
		'label' => __( 'Slider', 'unyson' ),
		'type'  => 'slider',
		'value' => 10,
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'unyson' )
		),
	),
	'demo_range_slider_2' => array(
		'label' => __( 'Range Slider', 'unyson' ),
		'type'  => 'range-slider',
		'value' => array(
			'from' => 30,
			'to' => 50
		),
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'unyson' ),
		'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'unyson' )
		),
	),
	'demo_addable_popup_2'             => array(
		'label'         => __( 'Addable Popup', 'unyson' ),
		'type'          => 'addable-popup',
		'desc'          => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'template'      => '{{- demo_text }}',
		'popup-options' => array(
			'demo_text'                => array(
				'label' => __( 'Text', 'unyson' ),
				'type'  => 'text',
				'value' => 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
			'demo_image_picker'        => array(
				'label'   => __( 'Image Picker', 'unyson' ),
				'type'    => 'image-picker',
				'value'   => '',
				'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'attr'    => array(
					'data-height' => 70
				),
				'choices' => array(
					'choice-1' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/image-picker-demo/thumb1.jpg'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/image-picker-demo/tooltip1.jpg'
						),
					),
					'choice-2' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/image-picker-demo/thumb2.jpg'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/image-picker-demo/tooltip2.jpg'
						),
					),
				),
				'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
			'demo_upload_images'       => array(
				'label' => __( 'Single Upload (Images Only)', 'unyson' ),
				'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'type'  => 'upload',
				'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
			'demo_addable_popup_inner' => array(
				'label'         => __( 'Addable Popup', 'unyson' ),
				'type'          => 'addable-popup',
				'desc'          => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'template'      => 'Title color-picker value : {{- demo_color_picker }}',
				'popup-options' => array(
					'demo_multi_upload_images' => array(
						'label' => __( 'Multi Upload (images only)', 'unyson' ),
						'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
							'unyson' ),
						'type'  => 'multi-upload',
						'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
							__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
								'unyson' ),
							__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
								'unyson' )
						),
					),
					'demo_color_picker'        => array(
						'label' => __( 'Color Picker', 'unyson' ),
						'type'  => 'color-picker',
						'value' => '',
						'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
							'unyson' ),
						'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
							__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
								'unyson' ),
							__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
								'unyson' )
						),
					)
				)
			),
		),
	),
	'demo_addable_option_2'            => array(
		'label'  => __( 'Addable Option', 'unyson' ),
		'type'   => 'addable-option',
		'option' => array(
			'type' => 'text',
		),
		'value'  => array( 'Option 1', 'Option 2', 'Option 3' ),
		'desc'   => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'   => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		)
	),
	'demo_addable_box_2'               => array(
		'label'        => __( 'Addable Box', 'unyson' ),
		'type'         => 'addable-box',
		'value'        => array(),
		'desc'         => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'unyson' ),
		'help'         => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
		'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
		),
		'box-options'  => array(
			'demo_text'     => array(
				'label' => __( 'Text', 'unyson' ),
				'type'  => 'text',
				'value' => 'Lorem ipsum dolor sit amet',
				'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
			'demo_textarea' => array(
				'label' => __( 'Textarea', 'unyson' ),
				'type'  => 'textarea',
				'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'  => array(
					'icon' => 'video',
					'html' => '<iframe width="420" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>'
				),
			),
		),
		'template'     => '{{- demo_text }}',
	),
	'demo_group_2'                     => array(
		'type'    => 'group',
		'options' => array(
			'demo_text_in_group_2'     => array(
				'label' => __( 'Text in Group', 'unyson' ),
				'type'  => 'text',
				'value' => 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
			'demo_password_in_group_2' => array(
				'label' => __( 'Password in Group', 'unyson' ),
				'type'  => 'password',
				'value' => 'Dotted text',
				'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
		),
	),
	'demo_multi_2'                     => array(
		'label'         => false,
		'type'          => 'multi',
		'value'         => array(),
		'desc'          => false,
		'inner-options' => array(
			'demo_text'     => array(
				'label' => __( 'Text in Multi', 'unyson' ),
				'type'  => 'text',
				'value' => 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
			'demo_textarea' => array(
				'label' => __( 'Textarea in Multi', 'unyson' ),
				'type'  => 'textarea',
				'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			),
		),
	),
	'demo_multi_picker_select_2'       => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'gadget' => array(
				'label'   => __( 'Multi Picker: Select', 'unyson' ),
				'type'    => 'select',
				'choices' => array(
					'phone'  => __( 'Phone', 'unyson' ),
					'laptop' => __( 'Laptop', 'unyson' )
				),
				'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				)
			)
		),
		'choices'      => array(
			'phone'  => array(
				'price'  => array(
					'type'  => 'text',
					'label' => __( 'Price', 'unyson' ),
				),
				'memory' => array(
					'type'    => 'select',
					'label'   => __( 'Memory', 'unyson' ),
					'choices' => array(
						'16' => __( '16Gb', 'unyson' ),
						'32' => __( '32Gb', 'unyson' ),
						'64' => __( '64Gb', 'unyson' ),
					)
				)
			),
			'laptop' => array(
				'price'  => array(
					'type'  => 'text',
					'label' => __( 'Price', 'unyson' ),
				),
				'webcam' => array(
					'type'  => 'switch',
					'label' => __( 'Webcam', 'unyson' ),
				)
			),
		),
		'show_borders' => false,
	),
	'demo_multi_picker_radio_2'        => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'value'        => array(
			'gadget' => 'laptop',
		),
		'picker'       => array(
			'gadget' => array(
				'label'   => __( 'Multi Picker: Radio', 'unyson' ),
				'type'    => 'radio',
				'choices' => array(
					'phone'  => __( 'Phone', 'unyson' ),
					'laptop' => __( 'Laptop', 'unyson' )
				),
				'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				)
			)
		),
		'choices'      => array(
			'phone'  => array(
				'price'  => array(
					'type'  => 'text',
					'label' => __( 'Price', 'unyson' ),
				),
				'memory' => array(
					'type'    => 'select',
					'label'   => __( 'Memory', 'unyson' ),
					'choices' => array(
						'16' => __( '16Gb', 'unyson' ),
						'32' => __( '32Gb', 'unyson' ),
						'64' => __( '64Gb', 'unyson' ),
					)
				)
			),
			'laptop' => array(
				'price'  => array(
					'type'  => 'text',
					'label' => __( 'Price', 'unyson' ),
				),
				'webcam' => array(
					'type'  => 'switch',
					'label' => __( 'Webcam', 'unyson' ),
				)
			),
		),
		'show_borders' => false,
	),
	'demo_multi_picker_image_picker_2' => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'gadget' => array(
				'label'   => __( 'Multi Picker: Image Picker', 'unyson' ),
				'type'    => 'image-picker',
				'choices' => array(
					'phone'  => array(
						'label' => __( 'Phone', 'unyson' ),
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/image-picker-demo/thumb1.jpg'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/image-picker-demo/tooltip1.jpg'
						),
					),
					'laptop' => array(
						'label' => __( 'Laptop', 'unyson' ),
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/image-picker-demo/thumb2.jpg'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/image-picker-demo/tooltip2.jpg'
						),
					)
				),
				'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				)
			)
		),
		'choices'      => array(
			'phone'  => array(
				'price'  => array(
					'type'  => 'text',
					'label' => __( 'Price', 'unyson' ),
				),
				'memory' => array(
					'type'    => 'select',
					'label'   => __( 'Memory', 'unyson' ),
					'choices' => array(
						'16' => __( '16Gb', 'unyson' ),
						'32' => __( '32Gb', 'unyson' ),
						'64' => __( '64Gb', 'unyson' ),
					)
				)
			),
			'laptop' => array(
				'price'  => array(
					'type'  => 'text',
					'label' => __( 'Price', 'unyson' ),
				),
				'webcam' => array(
					'type'  => 'switch',
					'label' => __( 'Webcam', 'unyson' ),
				)
			),
		),
		'show_borders' => false,
	),
	'demo_multi_picker_switch_2'       => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'gadget' => array(
				'label'        => __( 'Switch', 'unyson' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'laptop',
					'label' => __( 'Laptop', 'unyson' )
				),
				'left-choice'  => array(
					'value' => 'phone',
					'label' => __( 'Phone', 'unyson' )
				),
				'value'        => 'yes',
				'desc'         => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'help'         => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
					__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'unyson' ),
					__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
						'unyson' )
				),
			)
		),
		'choices'      => array(
			'phone'  => array(
				'price'  => array(
					'type'  => 'text',
					'label' => __( 'Price', 'unyson' ),
				),
				'memory' => array(
					'type'    => 'select',
					'label'   => __( 'Memory', 'unyson' ),
					'choices' => array(
						'16' => __( '16Gb', 'unyson' ),
						'32' => __( '32Gb', 'unyson' ),
						'64' => __( '64Gb', 'unyson' ),
					)
				)
			),
			'laptop' => array(
				'price'  => array(
					'type'  => 'text',
					'label' => __( 'Price', 'unyson' ),
				),
				'webcam' => array(
					'type'  => 'switch',
					'label' => __( 'Webcam', 'unyson' ),
				)
			),
		),
		'show_borders' => false,
	),
);
