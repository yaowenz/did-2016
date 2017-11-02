<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui" />
	<meta name="format-detection" content="telephone=no"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--[if IE]>
	<link rel="stylesheet" href="http://server-dev/did-v2/www/wp-content/themes/did-2016-cn/style-desktop.css" type="text/css" media="all" />
	<![endif]-->
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?8ab0156648b9eb055d8659c563f41fc1";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>
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
