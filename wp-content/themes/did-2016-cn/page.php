<?php 
get_header(); 

// Start the loop.
while ( have_posts() ) : the_post();		
	include_once('pages/' . $post->post_name . '.php');
	// End of the loop.
endwhile;

get_footer(); 
?>
