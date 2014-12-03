<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>
	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php single_term_title(); ?>
					</h1>
					<?php
					if ( function_exists( 'fw_ext_breadcrumbs' ) ) {
						fw_ext_breadcrumbs();
					}
					?>
				</header><!-- .page-header -->

				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					if ( fw()->extensions->get( 'learning' )->locate_view_path( 'loop-course' ) !== false ) {
						include( fw()->extensions->get( 'learning' )->locate_view_path( 'loop-course' ) );
					} else {
						get_template_part( 'content', get_post_format() );
					}

				endwhile; ?>
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts',
							'unyson' ) ); ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>',
							'unyson' ) ); ?></div>
			<?php
			else : // If no content, include the "No posts found" template.
			{
				get_template_part( 'content', 'none' );
			}

			endif;
			?>
		</div>
		<!-- #content -->
	</section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
