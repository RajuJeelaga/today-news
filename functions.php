<?php
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'tn_theme_setup' ) ) :

function tn_theme_setup() {
 	

    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'tn_theme', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );

    // Custom logo.
    add_theme_support(
		'custom-logo',
		array(
			'height'      => 90,
			'width'       => 120,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary-menu'   	=> __( 'Primary Menu', 'tn_theme' ),
        'mobile-menu' 		=> __( 'Mobile Menu', 'tn_theme' ),
        'footer-menu' 		=> __( 'Footer Menu', 'tn_theme' ),
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);
}
endif; // tn_theme_setup
add_action( 'after_setup_theme', 'tn_theme_setup' );

/**
 * Register and Enqueue Styles.
 */
function tn_register_styles() {
	// Theme stylesheet.
	//wp_enqueue_style( 'tn-style', get_stylesheet_uri(), array(), '20200507' );
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'tn-style', get_stylesheet_uri(), array(), $theme_version );
}

add_action( 'wp_enqueue_scripts', 'tn_register_styles' );