<?php

/**

 * The template part for displaying single posts

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */

?>

<?php 

	$highlight_text			= get_field('highlight_text');

	$view_source_lable		= get_field('view_source_lable');

	$view_source_text		= get_field('view_source_text');

	$view_source_url		= get_field('view_source_url');

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="single-page-post-info">

		<div class="author-details">

			<span class="author-img"><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?></span>

			<span class="by-author"><?php esc_html_e('By','webnews'); ?></span>

			<span class="athr-lnk"><?php the_author_posts_link(); ?></span>

		</div><!-- /.author-details -->

		<div class="single-page-pdt">

			<div class="posted-date">

				<span><?php the_time('F jS, Y')?> <?php echo esc_attr_x( 'AT', 'webnews_theme' ) ?> <?php the_time('g:i A')?></span>

			</div><!-- /.single-posted-date -->

			<div class="post-categ">

				<?php 

	                  $id = get_the_ID();

	                  $cats = get_the_category($id);

	                  echo ( count($cats) == 1  ? '' : '');

	                  $c = 0; $n = 0;

	                  $c = count($cats);

	                  foreach ( $cats as $cat ):

	                      $n++; ?>

	                      <li><a href="<?php echo get_category_link($cat->cat_ID); ?>">

	                          <?php echo $cat->name; echo ( $n > 0 && $n < $c ? '' : ''); ?>

	                      </a></li>

	                <?php endforeach; ?>

			</div><!-- /.post-categ -->

			<div class="post-cmts">

				<?php comments_popup_link ( __( '0 Comment', 'telecomtalk' ), __( '1 Comment', 'telecomtalk' ), __( '% Comments', 'telecomtalk' )); ?>

			</div><!-- /.post-comments -->

		</div><!-- /.single-page-right -->

	</div><!-- /.single-page-post-info -->

    <div class="post-sub-title">

		<?php echo do_shortcode( '[alt_headline]' ); ?>

	</div><!-- /.post-sub-title -->

	<div class="artl">

		<div class="content-pt">

			<?php if(!empty($highlight_text	)): ?>

			<div class="singlepage-articles">

				<h5><?php echo $highlight_text; ?></h5>

				<?php if(have_rows('highlights_lists')) :  ?>

				<div class="singlepage-post-article">

					<ul>

					<?php while(have_rows('highlights_lists')): the_row();

						$highlights_list_items	= get_sub_field('highlights_list_items');

					?>

					<?php if(!empty($highlights_list_items)): ?>

						<li><?php echo $highlights_list_items ?></li>

					<?php endif;

					endwhile; ?>

					</ul>

				</div><!-- /.releatedarticle-block -->

				<?php endif; ?> 

			</div><!-- /.related-articles --> 

			<?php endif; ?>

			<?php

				the_content();



				wp_link_pages( array(

					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'telecom-talk' ) . '</span>',

					'after'       => '</div>',

					'link_before' => '<span>',

					'link_after'  => '</span>',

					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'telecom-talk' ) . ' </span>%',

					'separator'   => '<span class="screen-reader-text">, </span>',

				) );



				if ( '' !== get_the_author_meta( 'description' ) ) {

					get_template_part( 'template-parts/biography' );

				}

			?>

		</div>

		<div class="singlepost-social-icons">

			<ul>

				<li><a target="_blank" class="facebook" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>">FACEBOOK</a>
				</li>

				<li><a target="_blank" class="twitter" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>">TWITTER</a>

				</li>

				<!-- <li><a target="_blank" class="gplus" href="https://plus.google.com/share?url=<?php //the_permalink(); ?>"></a>

                </li> -->

				<li><a target="_blank" class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=<?php the_permalink(); ?>">LINKEDIN</a>

				</li>

				<li><a target="_blank" class="whatsapp" href="whatsapp://send?text=<?php the_permalink(); ?>">WHATSAPP</a>

                </li>

				<li class="list-post-comments">

					<div class="post-comment">

						<?php comments_number( '0 COMMENT', '1 COMMENT', '% COMMENTS' ); ?>

					</div><!-- /.post-date -->

				</li>

			</ul>

		</div><!-- /.singlepost-social-icons -->

		<?php if(!empty($view_source_lable) || !empty($view_source_text) || !empty($view_source_url)):?>

		<div class="via-source">

			<span><?php echo $view_source_lable; ?></span>

			<a rel="nofollow" target="_blank" href="<?php echo $view_source_url; ?>"><?php echo $view_source_text; ?></a>

		</div><!-- /.via-source -->

		<?php endif; ?>

		<div class="p-au-inf">

			<div class="post-aurhor-image">

				<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>

			</div><!-- /.post-author-image -->

			<div class="post-author-desc">

				<span class="rp">Reported By:</span>

				<span><?php the_author_posts_link(); ?></span>
				<span class="desig"><?php echo $designation; ?></span>

				<p><?php the_author_meta('description'); ?></p>

					<div class="share-icons">

						<ul>

							<li><a target="_blank" class="fa-twitt" href="https://twitter.com/intent/user?screen_name=<?php echo $twitterprofilelink;?>"><span class="icon-twitter"></span></a></li>

							<!-- <li><a target="_blank" class="fa-gplus" href="https://plus.google.com/<?php //echo $googleid;?>"><span class="icon-google-plus"></span></a></li> -->

							<li><a target="_blank" class="fa-linkd" href="https://www.linkedin.com/in/<?php echo $linkedusername;?>"><span class="icon-linkedin2"></span></a></li>

						</ul>

					</div><!-- /.share-icons -->

			</div><!-- /.post-author-desc -->

		</div>

		<div class="related-posts">

			<h3><?php echo esc_attr(get_theme_mod( 'releated-article-text', 'Related Posts' ));?></h3> 

	    	<?php $categories = get_the_category($post->ID);

            if ($categories) { $category_ids = array();

            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

            $args=array(

            'category__in' => $category_ids,

            'post__not_in' => array($post->ID), 

            'showposts'=> esc_attr( get_theme_mod( 'number-of-posts' , '3') ) ,

            'ignore_sticky_posts'=>1,

             );

            $my_query = new WP_Query($args); if( $my_query->have_posts() ) { ?>

			<div class="rp-list">

            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

				

					<div class="rp-pst">

						<a href="<?php the_permalink(); ?>">

							<?php if ( has_post_thumbnail()) { ?>

							<?php the_post_thumbnail('module-4'); ?>

							<?php } ?>

							<h4><?php the_title(); ?></h4>

						</a>

					</div>

				

		   <?php  endwhile; ?>

		   </div><!-- /.latest-posts -->

			<?php } wp_reset_postdata(); } ?>

		</div><!-- /.related-posts -->

		<div class="cmts">

			<span class="view-cmts retrive-current-comment" data-url="<?php echo admin_url( 'admin-ajax.php' ); ?>" data-post_id="<?php echo get_the_ID(); ?>"><?php esc_attr_e( 'View Comments', 'telecom-talk' ); ?></span>

			<div class="show-all-comments"></div>

		</div>

	</div><!-- .artl -->

</article><!-- #post-## -->

