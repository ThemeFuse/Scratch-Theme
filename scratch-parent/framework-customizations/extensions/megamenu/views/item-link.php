<?php if (!defined('FW')) die('Forbidden');

/**
 * @var WP_Post $item
 * @var string $title
 * @var array $attributes
 * @var object $args
 * @var int $depth
 * @var FW_Extension_Megamenu $megamenu
 */

$megamenu = fw()->extensions->get('megamenu');

if ($megamenu->show_icon()) {
	if ($icon = fw_mega_menu_get_meta($item, 'icon')) {
		$icon = preg_replace('/(^|\s)fa($|\s)/', '\1\2', $icon); // remove "fa" part
		$attributes['class'] = trim(@$attributes['class'] . " $icon");
	}
}

// Make a menu WordPress way
echo $args->before;
echo fw_html_tag('a', $attributes, $args->link_before . $title . $args->link_after);
echo $args->after;
