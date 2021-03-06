<?php
/**
 * Template part for displaying slides.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<figure class="entry-image">
			<?php the_post_thumbnail(); ?>
		</figure><!-- .entry-image -->
	<?php endif; ?>

	<?php if ( get_post_meta(get_the_ID(), 'video', true) ) : ?>
		<figure class="entry-video">
			<?php echo do_shortcode(get_post_meta(get_the_ID(), 'video', true)); ?>
		</figure><!-- .entry-video -->
	<?php endif; ?>

	<div>
		<div>
			<div>
				<header class="entry-header">
					<?php the_title( '<span class="entry-title">', '</span>' ); ?>

					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php _s_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-summary">
					<?php the_content(); ?>
				</div><!-- .entry-summary -->

				<footer class="entry-footer">
					<?php _s_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
		</div>
	</div>
</article><!-- #post-## -->
