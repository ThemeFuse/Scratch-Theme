<?php if (!defined('FW')) die('Forbidden');

/**
 * @var $atts The shortcode attributes
 */

$text = $atts['text'];
$text_color = $atts['text_color'];
?>
<p style="color:<?php echo $text_color; ?>"><?php echo $text; ?></p>
