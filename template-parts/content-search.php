<?php

/**

 * Template part for displaying results in search pages

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package telecom-talk

 */



?>



<div id="post-<?php the_ID(); ?>" <?php post_class('s-pg'); ?>>

	<div class="arc-img">

		<a href="<?php the_permalink();?>">
      <?php if ( has_post_thumbnail()) { 
          $thumb_url = custom_post_thumbnail_resize(get_the_ID(), 340, 200);
          if(!empty($thumb_url)){
            echo '<img src="'.$thumb_url.'" alt="module-4-img">';
          }else{
            echo "";
          }
        } ?>
    </a>
    <span class="arc-mn"><?php the_time('M j, Y')?></span>
	</div>

	<div class="arc-content">

		<div class="category-lists">

			<ul class="loop-category">

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

          </ul>

      	</div><!-- /.category-lists -->

		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

		<?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>

	</div>

</div><!-- #post-## -->

