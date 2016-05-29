<?php
/*
 *Template Name: 内容页面
 */
add_filter('body_class', function($body_class) {
	$body_class[] = 'content-page';
	return $body_class;
});
get_header();
?>
<img class="slogan" src="<?php echo get_template_directory_uri()?>/images/content-slogan.png" />
<?php $pagename = get_query_var('pagename') . get_queried_object()->slug;?>
<?php require_once __DIR__ . "/../pages/$pagename.php"; ?>
<script>
// following nav
jQuery(function($) {	
	// 有二级导航时，启用菜单追踪功能
	if($('#secondary-nav ul li').length > 0) {
	
		var scrolling = false;
					
		$('#secondary-nav li a').click(function() {
			var current = $(this);
			scrolling = true;
			var target = $(this).attr('href').split('#');
			scrolling = true;
			$.scrollTo($('#' + target[1]).offset().top - 100, {
				duration: 500,
				onAfter: function(target, settings) {
					scrolling = false;
					$(window).scroll();
					$('#secondary-nav li a').removeClass('active');
					current.addClass('active');
				}						
			});				
			return false;
		});
		
		var sections =  $('#content .section');
		
		var trailingTopInit = jQuery('#secondary-nav')[0].offsetTop;
		$(window).scroll(function() {	
			if(scrolling) return false;						
			var offsetX = $('#secondary-nav').offset().left;
			var offsetY = trailingTopInit + $(window).scrollTop();			

			var current_id = '';
			for(var i=0; i < sections.length; i++) {
				var limit2 = 0;		
				if(i > 0) {				
					limit2 = $(sections[i-1]).next().offset().top + $(sections[i-1]).next().height();
				}
				var id = $(sections[i]).attr('id');
				
				if($(window).scrollTop() > ($(sections[i]).offset().top - 200) && $(window).scrollTop() < limit2) {
					current_id = id;					
					break;
				}
				else {					
					if(i == 0 && $(window).scrollTop() < $(sections[0]).offset().top) {
						current_id = id;					
						break;
					}
				}							
			}	

			if(current_id != '') {
				$('#secondary-nav li a').removeClass('active');
				//console.log($('#secondary-nav a[href="#' + id + '"]'));
				$('#secondary-nav a[href="#' + current_id + '"]').addClass('active');
			}
		});

		// 如果是通过锚点进入页面，滑动一次
		var enter_section = window.location.hash;	
		if(enter_section.length > 1) {
			enter_section = enter_section.split('#')[1];
			setTimeout(function() {
				$('#secondary-nav li a[href="#' + enter_section + '"]').click();
			}, 100);
		}
	}

	$(window).scroll();
});
</script>
<?php get_footer(); ?>    
