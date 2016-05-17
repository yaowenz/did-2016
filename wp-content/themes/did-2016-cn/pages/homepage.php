<?php 
get_header(); 

if(is_mobile()) {
	include 'homepage-mobile.php';
}
else {
	include 'homepage-desktop.php';
}

get_footer();
?>
