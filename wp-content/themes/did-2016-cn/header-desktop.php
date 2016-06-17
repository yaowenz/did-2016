<!-- Nav -->
<div id="nav">
	<!-- Standalone logo -->
	<div id="alter-menu">
		<div id="logo-orange">	
			<a href="<?php echo site_url()?>"><img src="<?php echo get_template_directory_uri()?>/images/logo-orange.png" /></a> 
		</div>
	</div>	
	<!-- Nav -->
	<div id="primary-menu" style="display:none">
		<div class="logo">
			<a href="<?php echo site_url()?>"><img src="<?php echo get_template_directory_uri()?>/images/logo-transparent.png" /></a> 
		</div>
		<div class="menu-buttons">
			<div class="homepage menu">
				<a href="<?php echo site_url()?>">&nbsp;</a>
			</div>
			<!-- Staidums -->
			<div class="stadium menu">
				<a href="<?php echo site_url('stadium')?>">&nbsp;</a>
				<div class="sub-menu">
					<div class="list">
						<ul>
							<li><a href="<?php echo site_url('stadium')?>">黑暗中对话体验馆</a></li>
							<li>在线购票</li>							
						</ul>
						<p class="brief">关闭您的视觉，颠覆您的感官</p>					
					</div>
					<div class="image">
						<img src="<?php echo get_template_directory_uri()?>/images/index-menu-thumb-stadium.jpg" /> 
					</div>
				</div>
			</div>
			<!-- Workshops -->
			<div class="workshop menu">
				<a href="<?php echo site_url('workshop')?>">&nbsp;</a>
				<div class="sub-menu">
					<div class="list">
						<ul>
							<li><a href="<?php echo site_url('workshop')?>">黑暗中对话工作坊</a></li>
							<li><a href="<?php echo site_url('workshop-slience')?>">无声中对话工作坊</a></li>
							<li><a href="<?php echo site_url('workshop-edu')?>">教育工作坊</a></li>	
							<li><a href="<?php echo site_url('workshop-calendar')?>">日程表</a></li>										
						</ul>
						<p class="brief">针对企业，政府机构和组织开发，是极少数可在短时间内改变参与者行为模式的体验式培训之一</p>					
					</div>
					<div class="image">
						<img src="<?php echo get_template_directory_uri()?>/images/index-menu-thumb-workshop.jpg" /> 
					</div>
				</div>
			</div>
			<!-- 特别活动 -->
			<div class="events menu">
				<a href="<?php echo site_url('special-events')?>">&nbsp;</a>
				<div class="sub-menu">
					<div class="list">
						<ul>
							<li><a href="<?php echo site_url('special-events#coffee')?>">暗中咖啡</a></li>
							<li><a href="<?php echo site_url('special-events#adventure')?>">暗中探险</a></li>
							<li><a href="<?php echo site_url('special-events#party')?>">暗中派对</a></li>
							<li><a href="<?php echo site_url('special-events#music')?>">暗中音乐会</a></li>
							<li><a href="<?php echo site_url('special-events#dinner')?>">暗中夜宴</a></li>						
						</ul>									
					</div>
					<div class="image">
						<img src="<?php echo get_template_directory_uri()?>/images/index-menu-thumb-events.jpg" /> 
					</div>
				</div>
			</div>
			<!-- 黑暗跑团 -->
			<div class="run menu">
				<a href="<?php echo site_url('run')?>">&nbsp;</a>				
			</div>
			<!-- 品牌合作 -->
			<div class="cooperation menu">
				<a href="<?php echo site_url('cooperation')?>">&nbsp;</a>
				<div class="sub-menu">
					<div class="list">
						<ul>
							<li><a href="<?php echo site_url('cooperation')?>">合作方式及案例</a></li>
						</ul>
						<p class="brief">联系我们，定制更多活动</p>					
					</div>
					<div class="image">
						<img src="<?php echo get_template_directory_uri()?>/images/index-menu-thumb-coop.jpg" /> 
					</div>
				</div>
			</div>
			<!-- 关于我们 -->
			<div class="about menu">
				<a href="<?php echo site_url('about')?>">&nbsp;</a>
				<div class="sub-menu">
					<div class="list">
						<ul>
							<li><a href="<?php echo site_url('about')?>">品牌故事</a></li>	
							<li><a href="<?php echo site_url('team')?>">团队成员</a></li>
							<li><a href="<?php echo site_url('responsibility')?>">社会责任</a></li>						
							<li><a href="<?php echo site_url('contact')?>">联系我们</a></li>							
							<li><a href="<?php echo site_url('join')?>">加入我们</a></li>
							<!-- <li>FAQ</li> -->							
						</ul>
						<p class="brief"></p>					
					</div>
					<div class="image">
						<img src="<?php echo get_template_directory_uri()?>/images/index-menu-thumb-about.jpg" /> 
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
<!-- Phone -->
<div id="contact-header">
	<table border="0">
		<tr valign="middle">
			<td><img height="22" src="<?php echo get_template_directory_uri()?>/images/iconfont-phone-h.png" style="position:relative;margin-right:5px;margin-top:5px" /></td>
			<td>021-63020090&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English Version</td>	
		</tr>
	</table>
</div>
<!-- Sidebar -->
<div id="sidebar">
	<div class="tool-wx tool">
		<div class="button"><span><a href="<?php echo site_url('contact')?>">关注微信</a></span></div>
	</div>
	<div class="tool-corp tool">
		<div class="button"><span><a href="<?php echo site_url('contact')?>">工作坊预约</a></span></div>	
	</div>
	<div class="tool-ticket tool">
		<div class="button booking"><span>在线订票</span></div>
	</div>
	<div class="tool-news">
		<img src="<?php echo get_template_directory_uri()?>/images/sidebar-news.png" width="100%" />
		<div class="news-list">		
		<?php 
    		$args = array (
				'category_name'          => 'news',
				'pagination'             => false,
				'posts_per_page'		 => 4,
			);
    		// The Query
    		$query = new WP_Query( $args );
    		$news = $query->posts;
    		
    		foreach($news as $v):
    	?>
    		<p><a href="<?php echo get_the_permalink($v)?>"><?php echo get_the_date('Y-m-d', $v)?>&nbsp;&nbsp;<?php echo get_the_title($v)?></a></p>
    	<?php endforeach;?>		  
		</div>
	</div>
</div>
<!-- Booking -->
<div class="overlay booking hidden">
	<div class="wrapper">
		<div class="booking-goback">&lt;&nbsp;后退</div>
		<div class="close"><img src="<?php echo get_template_directory_uri()?>/images/close-icon-white.png" width="30" /></div>
		<iframe class="booking" frameborder="0" ori="http://booking.dialogue-in-the-dark.org.cn" src="http://booking.dialogue-in-the-dark.org.cn" height="100%" width="100%"></iframe>
	</div>
</div>
<script type="text/javascript">
var primaryMenuShow = false;
jQuery(function($) {	
	// 菜单切换
	$('#alter-menu').hover(
		function() {
			primaryMenuShow = true;
			$('#alter-menu').fadeOut(300);
			$('#primary-menu').fadeIn(300);
		},
		function () {}
	);
	
	$('#primary-menu').hover(
		function() {
			primaryMenuShow = true;
		},
		function() {
			primaryMenuShow = false;
			setTimeout(function() {
				if(!primaryMenuShow) {
					$('#alter-menu').fadeIn(300);
					$('#primary-menu').fadeOut(300);
				}
			}, 500);
			
		}
	);

	// booking window
	$('.booking-goback').click(function() {
		history.go(-1);
	});
	$('.booking.overlay .close').click(function() {
		$('#nav').removeClass('hidden');
		$('.booking.overlay').addClass('hidden');
	});
	
	$('.booking.button').click(function() {		
		$('#nav').addClass('hidden');
		$('.booking.overlay').removeClass('hidden');		
		$('iframe.booking').attr('src', $('iframe.booking').attr('ori')); 
		return false;
	});

	// news list
	$('.tool-news').hover(
		function() {
			$('.tool-news .news-list').fadeIn(200);
		},
		function() {
			$('.tool-news .news-list').fadeOut(200);
		}
	);
});
</script>
