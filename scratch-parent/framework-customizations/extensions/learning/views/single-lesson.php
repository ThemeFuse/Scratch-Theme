<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<?php
/**
 * The Template for displaying all single lesson
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				global $post;
				$lessons = fw_ext_learning_get_course_lessons( $post->ID )
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_post_thumbnail( 'full' ); ?>

					<header class="entry-header">
						<h1 class="entry-title"><?php the_title() ?></h1>

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
						<?php the_content() ?>
						<?php
						if ( function_exists( 'fw_ext_learning_apply_course_get_lesson_pass_method' ) ) {
							echo fw_ext_learning_apply_course_get_lesson_pass_method();
						}
						?>
					</div>
					<?php if ( $post->post_parent > 0 ) : ?>
						<div class="entry-meta">
							<p><?php _e( 'Back to', 'fw' ); ?>:
								<a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo get_the_title( $post->post_parent ) ?></a>
							</p>
						</div>
					<?php endif ?>
					<nav class="navigation post-navigation" role="navigation">
						<div class="nav-links">
							<?php if ( $previous = fw_ext_learning_get_previous_lesson( $post->ID ) ) : ?>
								<a href="<?php echo get_permalink( $previous->ID ) ?>" rel="prev"><span
										class="meta-nav"><?php _e( 'Previous Lesson',
											'unyson' ); ?></span><?php echo $previous->post_title ?>
								</a>
							<?php endif ?>
							<?php if ( $next = fw_ext_learning_get_next_lesson( $post->ID ) ) : ?>
								<a href="<?php echo get_permalink( $next->ID ) ?>" rel="next"><span
										class="meta-nav"><?php _e( 'Next Lesson',
											'unyson' ); ?></span><?php echo $next->post_title ?>
								</a>
							<?php endif ?>
						</div>
						<!-- .nav-links -->
					</nav>
					<!-- .entry-content -->
				</article><!-- #post-## -->
			<?php endwhile; ?>
		</div>
		<!-- #content -->
	</div><!-- #primary -->
<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
