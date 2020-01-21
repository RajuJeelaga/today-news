<?php

/**
 * The template part for displaying single posts
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="artl">
			<?php the_title( '<h3>', '</h3>' ); ?>
			<?php the_post_thumbnail();?>
			<?php the_content();?>
	
		<div id="nav-below" class="post-pagi">
			<div class="nav-previous">
				<?php previous_post_link( '%link', '%title' ); ?>
			</div>
			<div class="nav-next">
				<?php next_post_link( '%link', '%title' ); ?>
			</div>
		</div>


		<div class="rcs">
	       <?php if ( comments_open() || get_comments_number() ) :
				comments_template();
				endif; ?>
		</div>

		<?php if(has_tag()) { ?>
			<div class="tags-list">
				<span><?php esc_html_e('Read more on: ','webnews'); ?></span><?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
			</div><!-- /.tags-list -->
		<?php } else {
		    //Article untagged
		}?>
	</div><!-- .artl -->

</article><!-- #post-## -->

