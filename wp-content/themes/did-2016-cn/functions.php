<?php
function is_mobile() {
	$useragent=$_SERVER['HTTP_USER_AGENT'];
	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
		return true;
	}
	return false;
}


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
function did_2016_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'did_2016_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 */
function did_2016_scripts() {
	
	// Load the Internet Explorer specific stylesheet.
	//wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160412' );
	//wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );
	
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/scripts/jquery-1.12.3.min.js', array(), '1.12.3', true );
	
	wp_enqueue_script( 'jquery.mobile-events', get_template_directory_uri() . '/scripts/jquery.mobile-events.min.js', array(), '', true );
	
	if(!is_mobile()) {
		wp_enqueue_script( 'jquery.onepage', get_template_directory_uri() . '/scripts/jquery.onepage-scroll.min.js', array(), '', true );		
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/scripts/slick/slick.min.js', array(), '', true );
		wp_enqueue_script( 'jquery.scrollTo', get_template_directory_uri() . '/scripts/jquery.scrollTo.min.js', array(), '', true );
	}
	else {
		wp_enqueue_style( 'animate-css',  get_template_directory_uri() . '/scripts/animate.min.css');
		wp_enqueue_style( 'jquery.fullpage-css',  get_template_directory_uri() . '/scripts/jquery.fullpage.min.css');		
		wp_enqueue_script( 'jquery.fullpage', get_template_directory_uri() . '/scripts/jquery.fullpage.min.js', array(), '', true );
		wp_enqueue_script( 'fastclick', get_template_directory_uri() . '/scripts/fastclick.js', array(), '', true );		
	}
	
	wp_enqueue_style( 'did-2016-style', get_stylesheet_uri() );
	
	
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

