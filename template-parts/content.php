<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package telecom-talk
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('fsp'); ?>>
	<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<span class="sticky-post"><?php _e( 'Featured', 'telecom-talk' ); ?></span>
	<?php endif; ?>
	<div class="arc-img">
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail('telecom-talk-img-1'); ?></a>
	</div>
	<div class="fsp-cnt">
		<div class="category-lists">
           <?php the_category( ' ' ); ?>
        </div><!-- /.category-lists -->
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		<?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>
		<span class="posted-dt"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
	</div>
</article><!-- #post-## -->