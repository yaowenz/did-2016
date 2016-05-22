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
			<div class="workshop menu">
				<a href="<?php echo site_url('workshop')?>">&nbsp;</a>
				<div class="sub-menu">
					<div class="list">
						<ul>
							<li><a href="<?php echo site_url('workshop')?>">黑暗中对话工作坊</a></li>
							<li><a href="<?php echo site_url('workshop-slience')?>">无声中对话工作坊</a></li>
							<li><a href="<?php echo site_url('workshop-edu')?>">教育工作坊</a></li>	
							<!-- <li>日程表</li> -->													
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
		<div class="button"><span>关注微信</span></div>
	</div>
	<div class="tool-corp tool">
		<div class="button"><span>工作坊预约</span></div>	
	</div>
	<div class="tool-ticket tool">
		<div class="button"><span>在线订票</span></div>
	</div>
	<div class="tool-news"><img src="<?php echo get_template_directory_uri()?>/images/sidebar-news.png" width="100%" /></div>
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
});
</script>
