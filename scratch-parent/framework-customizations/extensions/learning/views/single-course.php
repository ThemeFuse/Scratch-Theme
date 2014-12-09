<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<?php
/**
 * The Template for displaying all single courses
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
						<div class="tabs-course-panel">
							<div class="tabs-course" id="tabs-course">
								<ul>
									<li><a href="#tab-course-details"><?php _e( 'Course Details', 'unyson' ); ?></a>
									</li>
									<?php if ( ! empty( $lessons ) ) : ?>
										<li><a href="#tab-course-lessons"><?php _e( 'Lessons', 'unyson' ); ?></a></li>
									<?php endif ?>
								</ul>
								<div id="tab-course-details"><?php the_content() ?></div>
								<?php if ( ! empty( $lessons ) ) : ?>
									<div id="tab-course-lessons">
										<div class="section-course">
											<span class="title-section-course"><?php the_title() ?> <?php _e( 'Lessons',
													'unyson' ); ?></span>
											<ul class="course-lesson">
												<?php foreach ( $lessons as $lesson ) : fw_ext_learning_get_lesson_type( $lesson->ID ) ?>
													<li>
														<i class="fa <?php echo fw_ext_learning_get_lesson_type( $lesson->ID ) ?>"></i>
														<a href="<?php echo get_permalink( $lesson->ID ) ?>"
														   class="name-lesson"><?php echo $lesson->post_title ?></a>
													</li>
												<?php endforeach ?>
											</ul>
										</div>
									</div>
								<?php endif ?>
							</div>
						</div>
						<?php
						if ( function_exists( 'fw_ext_learning_student_get_take_course_method' ) ) {
							echo fw_ext_learning_student_get_take_course_method();
						}
						?>
					</div>
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
