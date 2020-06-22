<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dancing-disability
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h3 class="comments-title">Responses</h3>

		<?php the_comments_navigation(); ?>

		<ul class="comment-list" role="list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => false,
// 					'callback'   => 'format_comment'
				)
			);
			?>
		</ul><!-- .comment-list -->

		<?php
		the_comments_navigation();


	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->


