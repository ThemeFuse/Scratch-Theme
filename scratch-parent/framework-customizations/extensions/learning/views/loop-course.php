<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail( 'full' ); ?>

	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>

		<?php if ( function_exists( 'fw_ext_breadcrumbs' ) && is_single() ) {
			fw_ext_breadcrumbs();
		}
		?>

		<div class="entry-meta">
			<span class="author-name"><?php the_author() ?></span>
			<?php
			if ( function_exists( 'fw_ext_feedback_stars_load_view' ) ) {
				fw_ext_feedback_stars_load_view();
			}
			?>
		</div>
		<!-- .entry-meta -->
	</header>
	<!-- .entry-header -->
	<div class="entry-content">
		<?php the_excerpt(); ?>
		<div class="wrap-course-meta">
			<div class="author">
				<div class="author-avatar">
					<?php echo get_avatar( get_the_author_meta( 'email' ), 64, '', get_the_author() ); ?>
				</div>
				<span class="author-name"><?php the_author() ?></span>
				<span class="occupation"><?php the_author_meta( 'description' ); ?></span>
			</div>
		</div>
	</div>
	<!-- .entry-content -->
</article><!-- #post-## -->
