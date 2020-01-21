<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webnews
 */

 ?>
<h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<div class="post-list">
		<?php if ( has_post_thumbnail()) { ?>
		<div class="post-image-part">
			<a href="<?php the_permalink(); ?>">
				<?php
				$thumb_url = custom_post_thumbnail_resize(get_the_ID(), 230, 135);
				if(!empty($thumb_url)){
					echo '<img src="'.$thumb_url.'" alt="module-4-img">';
				}else{
					echo "";
				}
				?>
			</a>
		</div><!-- /.post-image-part -->
		<?php }
			?>
		<div class="post-content-part">
			<p><?php echo webnews_excerpt_length(40); ?></p>
			<div class="author-info">
				<span>REPORTED BY</span>
				<span class="author-link"><?php the_author_posts_link(); ?></span>
				<span class="posted-date"><?php the_time('F jS, Y') ?> <?php the_time('g:i A'); ?></span>
				
			</div><!-- /.author-info -->
		</div><!-- /.post-content-part -->
	</div><!-- /.post-list -->
