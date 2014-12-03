<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<?php
/**
 * The Template for displaying all single quiz
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				global $post;
				/**
				 * @var WP_Query $wp_query
				 */
				global $wp_query;
				$lesson    = get_post( $post->post_parent );
				$pass_mark = (int) fw_get_db_post_option( $lesson->ID, 'learning-quiz-passmark' );
				$text = '';

				if ( $pass_mark > 0 ) {
					$text = sprintf( __( 'You require %d%% in oder to pass the test', 'unyson' ), $pass_mark );
				}

				$response = fw_ext_learning_quiz_get_response();
				if ( ! empty( $response ) ) {
					if ( (int) $response['minimum-pass-mark'] > 0 ) {
						if ( (int) $response['accumulated'] < (int) $response['minimum-pass-mark'] ) {
							$text = __( 'Sorry, you did not pass the test', 'unyson' );
						} else {
							$text = __( 'Congratulation, you passed the test', 'unyson' );
						}
					} else {
						$correct = 0;
						foreach ( $response['questions'] as $question ) {
							/**
							 * @var FW_Quiz_Question_Process_Response $question
							 */
							if ( $question->get_max_percentage() == $question->get_current_percentage() ) {
								$correct++;
							}
						}

						$text = sprintf(
							__( 'You answered correctly %s questions from %s', 'fw' ),
							$correct,
							count($response['questions'])
						);
					}
				}

				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( '', $lesson->ID ); ?>>
					<div class="post-thumbnail">
						<?php
						if ( ( function_exists( 'fw_ext_sidebars_get_current_position' ) &&
						       in_array( fw_ext_sidebars_get_current_position(), array(
							       'full',
							       'left'
						       ) ) || is_page_template( 'page-templates/full-width.php' ) )
						) {
							echo get_the_post_thumbnail( $lesson->ID, 'fw-theme-full-width' );
						} else {
							echo get_the_post_thumbnail( $lesson->ID );
						}
						?>
					</div>

					<header class="entry-header">
						<h1 class="entry-title">
							<a href="<?php the_permalink() ?>"><?php echo $lesson->post_title ?>
								: <?php _e( 'Quiz', 'unyson' ); ?></a>
						</h1>

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
						<?php if ( ! empty( $text ) ) : ?>
							<div class="notification shortcode-container info">
								<i class="fa-info-circle"></i><span><?php echo $text ?></span>
							</div>
						<?php endif ?>
						<?php
						the_content();
						?>
						<?php if ( empty( $response ) ) : ?>
							<?php
							/**
							 * @var FW_Extension_Learning_Quiz $learning_quiz
							 */
							$learning_quiz = fw()->extensions->get( 'learning-quiz' );
							echo $learning_quiz->render_quiz( $post->ID );
							?>
						<?php endif ?>
					</div>
					<?php if ( $post->post_parent > 0 ) : ?>
						<div class="entry-meta">
							<p><?php _e( 'Back to', 'fw' ); ?>:
								<a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo get_the_title( $post->post_parent ) ?></a>
							</p>
						</div>
					<?php endif ?>
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
