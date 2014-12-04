<?php if (!defined('FW')) die('Forbidden');

/**
 * @var $atts The shortcode attributes
 */

$text       = $atts['text'];
$text_color = $atts['text_color'];

$text_style_css = isset($atts['text_style']) ? "font-style:{$atts['text_style']};" : '';
$bold_css       = $atts['text_bold'] === '1' ? 'font-weight: bold;' : '';
?>
<p style="color:<?php echo $text_color; ?>;<?php echo $text_style_css; ?><?php echo $bold_css; ?>">
	<?php echo $text; ?>
</p>
