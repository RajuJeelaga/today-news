<?php
/**
 * The template for displaying all single posts
*/

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main container">
		<div class="single-left">
			<?php  while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-single', get_post_type() );
			endwhile; // End of the loop.
			?>
		</div>
	</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer();
