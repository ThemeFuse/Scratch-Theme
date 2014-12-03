<?php
/**
 * The Content Sidebar
 */
?>
<?php if ( function_exists('fw_ext_sidebars_get_current_position') ) : ?>
	<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
		<?php $current_position = fw_ext_sidebars_get_current_position();?>
		<?php if ($current_position !== 'full') : ?>

			<?php if ($current_position === 'right') :?>
				<?php echo fw_ext_sidebars_show('blue'); ?>
			<?php endif;?>

			<?php if ($current_position === 'left_right') :?>
				<?php echo fw_ext_sidebars_show('yellow'); ?>
			<?php endif ?>

		<?php endif;?>
	</div><!-- #content-sidebar -->
<?php endif; ?>