<?php
get_header();
?>
<img class="slogan" src="<?php echo get_template_directory_uri()?>/images/content-slogan.png" />
<div id="content">
	<div class="main post">
		<?php the_post();?>
		<div class="section" id="fund">
			<div class="title"><?php $categories = get_the_category(); echo $categories[0]->name; ?></div>
			<div class="article">
				<h3 class="sub"><?php the_title();?></h3>
				<p class="post-date"><?php the_date();?></p>
				<?php the_content();?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>    
