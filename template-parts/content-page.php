<?php

/**

 * The template part for displaying single posts

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */

?>




	<div class="df">
		<?php if(function_exists('seopress_display_breadcrumbs')) { ?>
			<div class="breadcrumbs">
				<?php seopress_display_breadcrumbs(); ?>
			</div>
		<?php } ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<div class="meta-info-wrap">

			<div class="author-details">

				<div class="posted-date">

					<span class="by-author"><?php esc_html_e('By','webnews'); ?></span>

					<span class="athr-lnk"><?php the_author_posts_link(); ?></span>

					<span class="pub-dt"><?php the_time('F jS, Y')?> <?php echo esc_attr_x( 'AT', 'webnews_theme' ) ?> <?php the_time('g:i A')?></span>

				</div><!-- /.single-posted-date -->
			</div><!-- /.author-details -->

			<div class="single-page-pdt">

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

		                          <?php echo $cat->name; echo ( $n > 0 && $n < $c ? '' : ' '); ?>

		                      </a></li>

		                <?php endforeach; ?>

				</div><!-- /.post-categ -->

				<div class="post-cmts">

					<?php comments_popup_link ( __( '0 Comment', 'telecomtalk' ), __( '1 Comment', 'telecomtalk' ), __( '% Comments', 'telecomtalk' )); ?>

				</div><!-- /.post-comments -->
			</div><!-- /.single-page-right -->

		</div><!-- /.single-page-post-info -->
		<div class="artl">
			<?php the_content();
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
		<?php
		$post_author_id = get_post_field( 'post_author', get_the_ID() );
		$designation = get_user_meta($post_author_id, 'designation', true);
		$twitterprofilelink = get_user_meta($post_author_id, 'twitterprofilelink', true);
		//$googleid = get_user_meta($post_author_id, 'googleid', true);
		$linkedusername = get_user_meta($post_author_id, 'linkedusername', true); ?>
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
		<div class="cmts">
			<?php if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>
		</div>
	</div>



