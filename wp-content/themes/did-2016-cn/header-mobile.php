<!-- Nav -->
<div id="nav">
	<div id="logo-orange">
		<img src="<?php echo get_template_directory_uri()?>/images/logo-orange.png" />
	</div>
</div>
<div id="menu">
	<img class="menu-icon" src="<?php echo get_template_directory_uri();?>/images/mobile/menu.png" width="40" />
	<div class="overlay hidden">
		<div class="menu-list">
			<div class="bar" data-href="<?php echo site_url('/')?>">
				<div class="title">
					<span style="color:#999">返回首页</span>
				</div>
			</div>
			<div class="bar" data-href="<?php echo site_url('stadium')?>">
				<div class="title">
					<img class="menu-icon" src="<?php echo get_template_directory_uri();?>/images/mobile/icon-stadium.png" />
					<span>体验馆</span>
				</div>
			</div>
			<div class="bar">
				<div class="title">
					<img class="menu-icon" src="<?php echo get_template_directory_uri();?>/images/mobile/icon-workshop.png" />
					<span>工作坊</span>
				</div>
				<div class="sub hidden">
					<div data-href="<?php echo site_url('workshop')?>">黑暗中对话工作坊 WSD</div>
					<div data-href="<?php echo site_url('workshop-slience')?>">无声中对话工作坊 WSS</div>
					<div data-href="<?php echo site_url('workshop-edu')?>">教育工作坊</div>
				</div>
			</div>
			<div class="bar" data-href="<?php echo site_url('special-events')?>">
				<div class="title">
					<img class="menu-icon" src="<?php echo get_template_directory_uri();?>/images/mobile/icon-events.png" />
					<span>团队项目</span>
				</div>
			</div>
			<div class="bar" data-href="<?php echo site_url('run')?>">
				<div class="title">
					<img class="menu-icon" src="<?php echo get_template_directory_uri();?>/images/mobile/icon-run.png" />
					<span>黑暗跑团</span>
				</div>
			</div>
			<div class="bar" data-href="<?php echo site_url('cooperation')?>">
				<div class="title">
					<img class="menu-icon" src="<?php echo get_template_directory_uri();?>/images/mobile/icon-cooperation.png" />
					<span>品牌合作</span>
				</div>
			</div>
			<div class="bar">
				<div class="title">
					<img class="menu-icon" src="<?php echo get_template_directory_uri();?>/images/mobile/icon-about.png" />
					<span>关于我们</span>
				</div>
				<div class="sub hidden">
					<div data-href="<?php echo site_url('about')?>">品牌故事</div>
					<div data-href="<?php echo site_url('team')?>">团队成员</div>
					<div data-href="<?php echo site_url('responsibility')?>">社会责任</div>
					<div data-href="<?php echo site_url('contact')?>">联系我们</div>
					<div data-href="<?php echo site_url('join')?>">加入我们</div>
				</div>
			</div>
			<div class="bar" data-href="http://booking.dialogue-in-the-dark.org.cn">
				<div class="title">
					<img class="menu-icon" src="<?php echo get_template_directory_uri();?>/images/mobile/icon-ticket.png" />
					<span class="reserve-ticket">预约订票</span>
				</div>
			</div>
		</div>
		
	
	</div>
</div>
<script type="text/javascript">
jQuery(function($) {
    FastClick.attach(document.body);

	$('#menu .menu-icon').click(function() {
		$('#menu .overlay').removeClass('hidden');
		$('#menu .menu-list').addClass('animated slideInRight');
		return false;
	});

	$('#menu .overlay').click(function() {
		$('#menu .menu-list').removeClass('animated slideInRight');
		$(this).addClass('hidden');
		return false;
	});

	$('#menu .menu-list .bar').click(function() {
		if($(this).data('href') != undefined) {
			location.href = $(this).data('href');
		}
		else {
			$('#menu .menu-list .bar .sub').addClass('hidden');
			$('#menu .menu-list .bar .sub').removeClass('animated fadeIn');
			
			var sub = $(this).find('.sub');
			sub.removeClass('hidden');
			sub.addClass('animated fadeIn');
		}
		return false;
	})

	$('#menu .menu-list .bar .sub > div').click(function() {
		location.href = $(this).data('href');
		return false;
	})
    
});
</script>
