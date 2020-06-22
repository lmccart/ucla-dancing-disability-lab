<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dancing-disability
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		elseif ( is_sticky(get_the_ID()) ):
			the_title( '<h2 class="entry-title">', '</h2>' );
		else:
		?>
			<h2 class="entry-title"><?php dancing_disability_posted_on(); ?> <?php the_title(); ?></h2>
		
		<?php
		endif;

		if ( 'post' === get_post_type() && !is_sticky(get_the_ID())) :
			?>
			<div class="entry-meta">
<!-- 				<?php
				dancing_disability_posted_by();
				dancing_disability_posted_on();
				?> -->
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php dancing_disability_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dancing-disability' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);


		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php dancing_disability_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article>
