<?php
function did_2016_setup() {

	//load_theme_textdomain( 'twentysixteen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
// 	add_theme_support( 'custom-logo', array(
// 		'height'      => 240,
// 		'width'       => 240,
// 		'flex-height' => true,
// 	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
// 	register_nav_menus( array(
// 		'primary' => __( 'Primary Menu', 'twentysixteen' ),
// 		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
// 	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
// 	add_theme_support( 'html5', array(
// 		'search-form',
// 		'comment-form',
// 		'comment-list',
// 		'gallery',
// 		'caption',
// 	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
// 	add_theme_support( 'post-formats', array(
// 		'aside',
// 		'image',
// 		'video',
// 		'quote',
// 		'link',
// 		'gallery',
// 		'status',
// 		'audio',
// 		'chat',
// 	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	//add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	//add_theme_support( 'customize-selective-refresh-widgets' );
}

add_action( 'after_setup_theme', 'did_2016_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 * 
 */
// function twentysixteen_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
// }
//add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );



/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 */
function did_2016_scripts() {
	
	// Load the Internet Explorer specific stylesheet.
	//wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160412' );
	//wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );
	
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/scripts/jquery-1.12.3.min.js', array(), '1.12.3', true );	
	wp_enqueue_script( 'jquery.scrollTo', get_template_directory_uri() . '/scripts/jquery.scrollTo.min.js', array(), '', true );
	wp_enqueue_script( 'jquery.onepage', get_template_directory_uri() . '/scripts/jquery.onepage-scroll.min.js', array(), '', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/scripts/slick/slick.min.js', array(), '', true );
	
	wp_enqueue_style( 'did-2016-style', get_stylesheet_uri() );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/scripts/slick/slick.css');
	
	
// 	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
// 		'expand'   => __( 'expand child menu', 'twentysixteen' ),
// 		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
// 	) );
}
add_action( 'wp_enqueue_scripts', 'did_2016_scripts' );


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function did_2016_body_classes( $classes ) {
// 	// Adds a class of custom-background-image to sites with a custom background image.
// 	if ( get_background_image() ) {
// 		$classes[] = 'custom-background-image';
// 	}

// 	// Adds a class of group-blog to sites with more than 1 published author.
// 	if ( is_multi_author() ) {
// 		$classes[] = 'group-blog';
// 	}

// 	// Adds a class of no-sidebar to sites without active sidebar.
// 	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 		$classes[] = 'no-sidebar';
// 	}

// 	// Adds a class of hfeed to non-singular pages.
// 	if ( ! is_singular() ) {
// 		$classes[] = 'hfeed';
// 	}

	return $classes;
}
add_filter( 'body_class', 'did_2016_body_classes' );



/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function did_2016_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
//add_filter( 'wp_calculate_image_sizes', 'did_2016_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function did_2016_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'did_2016_post_thumbnail_sizes_attr', 10 , 3 );

