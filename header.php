<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'todaynews' ); ?></a>

		<header id="masthead" class="<?php echo is_singular() && todaynews_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

			<div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .layout-wrap -->

			<?php if ( is_singular() && todaynews_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php todaynews_post_thumbnail(); ?>
					<?php the_post(); ?>
					<?php $discussion = ! is_page() && todaynews_can_show_post_thumbnail() ? todaynews_get_discussion_data() : null; ?>
					<div class="<?php echo ( ! empty( $discussion ) && count( $discussion->responses ) > 0 ) ? 'entry-header has-discussion' : 'entry-header'; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
