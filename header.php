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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tn_theme' ); ?></a>
	<header class="h-d">
		<div class="container">
			<div class="d-h">
				<div class="d-lg">
		            <a href="<?php echo esc_url( home_url() ); ?>">
		                <?php 
		                $custom_logo_id = esc_attr( get_theme_mod( 'custom_logo' ) );
		                if( $custom_logo_id ) {
		                	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		                }
		                if ( has_custom_logo() ) {       	
		                    echo '<img src="'. esc_url( $logo[0] ) .'" alt="logo">';
		                } else {
		                    echo '<h1>'. esc_attr( get_bloginfo( 'name' ) ) .'</h1><span>'. esc_attr( get_bloginfo( 'description', 'display' ) ) .'</span>';
		                } ?>
		             </a>
			    </div>
			    <nav class="d-m">
					<?php if ( has_nav_menu( 'primary-menu' ) ) {
	                      wp_nav_menu(array(
	                      'theme_location' => 'primary-menu',
	                      'menu_class'     => 'd-menu',
	                    )); 
	                 } ?>
			    </nav>
			</div><!-- /.d-h -->
		</div><!--/.container -->
	</header>
	
<div id="content" class="site-content">
