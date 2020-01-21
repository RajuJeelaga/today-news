<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */

get_header();
?>

<section id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<?php if (have_posts()) : ?>
			   <?php while (have_posts()) : the_post(); ?>
			     	<div class="post">
				     	<h2 id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				     	<small><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </small>
			      </div>
			    <?php endwhile; ?>
				<div class="navigation">
					<?php posts_nav_link('','Previous page &raquo;','') ?>
			 	</div>
			<?php else : ?>
			  	<h2 class="center">Not Found</h2>
			 	<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
			<?php endif; ?>
		</div><!-- /.container -->
	</main><!-- .site-main -->
</section><!-- .content-area -->

<?php
get_footer();
