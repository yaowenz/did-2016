<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--[if IE]>
	<link rel="stylesheet" href="http://server-dev/did-v2/www/wp-content/themes/did-2016-cn/style-desktop.css" type="text/css" media="all" />
	<![endif]-->
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
	if(is_mobile()) {
		include 'header-mobile.php';
	}
	else {
		include 'header-desktop.php';
	}
?>
