<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Output a review in the HTML5 format.
 *
 * @var object $comment Comment to display.
 * @var int $depth Depth of comment.
 * @var array $args An array of arguments.
 * @var bool $has_children
 * @var int $stars_number
 * @var int $rate
 */
$GLOBALS['comment'] = $comment;
switch ( $comment->comment_type ) :
case 'pingback' :
case 'trackback' :
// Display trackbacks differently than normal comments.
?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
	<p><?php _e( 'Pingback:', 'unyson' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'unyson' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
	break;
	default :
	// Proceed with normal comments.
	global $post;
	?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
	<article id="comment-<?php comment_ID(); ?>" class="comment">
		<header class="comment-meta comment-author vcard">
			<?php
			echo get_avatar( $comment, 44 );
			printf( '<cite><b class="fn">%1$s</b> %2$s</cite>',
				get_comment_author_link(),
				// If current post author is also comment author, make it known visually.
				( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'unyson' ) . '</span>' : ''
			); ?>
			<!--Rating-->
			<?php if(!empty($rate)) : ?>
				<div class="wrap-rating listing">
					<div class="rating">
						<?php
						for ( $i = 1; $i <= $stars_number; $i ++ ) {
							$voted = ( $i <= round( $rate ) ) ? ' voted' : '';
							echo '<span class="fa fa-star' . $voted . '" data-vote="' . $i . '"></span>';
						}
						?>
					</div>
				</div>
			<?php endif; ?>
			<!--/Rating-->
			<?php printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
				esc_url( get_comment_link( $comment->comment_ID ) ),
				get_comment_time( 'c' ),
				/* translators: 1: date, 2: time */
				sprintf( __( '%1$s at %2$s', 'unyson' ), get_comment_date(), get_comment_time() )
			);
			?>
		</header><!-- .comment-meta -->

		<?php if ( '0' == $comment->comment_approved ) : ?>
			<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'unyson' ); ?></p>
		<?php endif; ?>

		<section class="comment-content comment">
			<?php comment_text(); ?>
			<?php edit_comment_link( __( 'Edit', 'unyson' ), '<p class="edit-link">', '</p>' ); ?>
		</section><!-- .comment-content -->

	</article><!-- #comment-## -->
	<?php
	break;
	endswitch; // end comment_type check