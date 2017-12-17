<?php get_header(); ?>
<div id="topics" style="height:100%">
	<!-- First Impression -->
	<div id="topic-home" class="topic section">
		<!-- Text -->
		<div class="propaganda">
			<div class="line-1"><img src="<?php echo get_template_directory_uri()?>/images/index-1-text-mobile.png" width="100%" /></div>
			<div class="line-2"><img src="<?php echo get_template_directory_uri()?>/images/index-2-text.png" width="80%" /></div>
		</div>
		<div class="copyright">
			<div style="width:300px;margin:auto">
				<div style="float:left;width:80px;text-align:center">
					<p style="margin:10px 0px"><a href="http://www.dialogue-se.com/"><img src="<?php echo get_template_directory_uri()?>/images/didse.png" width="60" /></a></p>
				</div>
				<div style="float:left;text-align:left;font-size:10px;width:200px;color:#999">
					<p>Dialogue in the Dark、Dialogue in Silence、Dialogue with time是DSE的注册商标；黑暗中对话、无声中对话、时间对话概念及相关商标版权属于德国对话社会企业</p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!-- 体验馆 -->
	<div id="topic-stadium" class="topic section">
		<h1>走进黑暗之旅...</h1>
		<div class="map">
			<div class="locator shanghai active" data-tab="shanghai"></div>
			<!-- <div class="locator beijing" data-tab="beijing"></div> -->
			<div class="locator shenzhen" data-tab="shenzhen"></div>
			<div class="locator chengdu" data-tab="chengdu"></div>
		</div>
		<!-- 上海 -->
		<div class="introduction shanghai">
			<div class="text">
				<h2>上海体验馆</h2>
				<p class="text">作为中国第一站，体验馆融合了成都、深圳的优势，为企业带去更多的团建新方式……</p>
				<p class="address">
					· 上海市黄浦区江滨路99号绿地海外滩广场2-103室
				</p>
			</div>
		</div>
		<!-- 深圳 -->
		<div class="introduction shenzhen">
			<div class="text">
				<h2>深圳体验馆</h2>
				<p class="text">作为华南区首家 “黑暗中对话” 体验馆，也被称为深圳「黑店」…… </p>
				<p class="address">
					· 福田深南大道6017号都市阳光名苑群楼2楼（车公庙C出口）/ 0755-88917887 / 周一闭馆
				</p>
				<div class="reserve-button"><a href="http://sz.wx.dialogue-in-the-dark.org.cn">在线订票</a></div>
			</div>
		</div>
		<!-- 成都 -->
		<div class="introduction chengdu">
			<div class="text">
				<h2>成都体验馆</h2>
				<p class="text">期待热爱自由、冒险的你加入这段黑暗旅程!</p>
				<p class="address">
					· 成都市锦江区滨江东路232号（靠近太古里）/ 028-62103889 / 周一闭馆<br/>
				</p>
				<div class="reserve-button"><a href="http://cd.wx.dialogue-in-the-dark.org.cn">在线订票</a></div>
			</div>
		</div>
	</div>
	<!-- 工作坊 -->
	<div id="topic-workshop" class="topic section">
		<div class="products-wrapper center-wrapper">
			<div class="products">
				<!-- Workshop -->
				<div class="product corp wrapper no-offset linkable" data-href="<?php echo site_url('workshop')?>">
					<div class="cover">
						<img src="<?php echo get_template_directory_uri()?>/images/index-workshop-corp.jpg" width="100%" />
					</div>
					<div class="title">
						<h2>黑暗中对话工作坊</h2>
						<h2 class="english">Dialogue in the Dark Workshop</h2>
						<p class="text">这是极少数可以在短时间内改变参与者行为模式的体验式培训之一...</p>
					</div>
					<div class="clear"></div>
				</div>
				<!-- Slience -->
				<div class="product slience wrapper linkable" data-href="<?php echo site_url('workshop-slience')?>">
					<div class="cover"><img src="<?php echo get_template_directory_uri()?>/images/index-workshop-slience.jpg" width="100%" /></div>
					<div class="title">
						<h2>无声中对话工作坊</h2>
						<h2 class="english">Dialogue in the Slience Workshop</h2>
						<p class="text">摆脱日常工作和社交的束缚，发觉自己非语言表达方面的技能。</p>
					</div>
					<div class="clear"></div>
				</div>
				<!-- Education -->
				<div class="product edu wrapper linkable" data-href="<?php echo site_url('workshop-education')?>">
					<div class="cover"><img src="<?php echo get_template_directory_uri()?>/images/index-workshop-edu.jpg" width="100%" /></div>
					<div class="title">
						<h2>教育工作坊</h2>
						<h2 class="english">Education</h2>
						<p class="text">通过专业视障教练的引导来协助学生发现自己的生活意义、增进良好人际关系</p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- 特别活动 -->
	<div id="topic-events" class="topic section">
		<div class="center-wrapper">
			<div class="events-wrapper">
				<div class="row">
					<!--
					<div class="cell coffee text linkable" data-href="<?php echo site_url('special-events#coffee')?>">
						<h2>暗中咖啡</h2>
						<p>也许你喝过九十九种不同的咖啡，却独缺黑暗里的这一杯。</p>
					</div>
					-->
					<div class="cell dinner text linkable" data-href="<?php echo site_url('special-events#birthday')?>">
						<h2>暗中生日会</h2>
						<p>庆生还能团建，黑暗让你引领潮流。</p>
					</div>
					<div class="cell party text linkable" data-href="<?php echo site_url('special-events#party')?>">
						<h2>暗中同学会</h2>
						<p>放下书本，走出学校，来一堂黑暗体验课。</p>
					</div>
					<div class="cell music text linkable" data-href="<?php echo site_url('special-events#date')?>">
						<h2>暗中约会</h2>
						<p>拒绝“以貌取人”<br/>黑暗让你看见真心。</p>
					</div>
					<!--
					<div class="cell adventure text linkable" data-href="<?php echo site_url('special-events#adventure')?>">
						<h2>暗中探险</h2>
						<p>寻找“达尔克文明”，我们将在黑暗中完成一系列任务。</p>
					</div>
					 -->
					<div class="cell more text linkable" data-href="<?php echo site_url('special-events')?>">
						<p>更多集体行动</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!-- 我们的使命 -->
	<div id="topic-mission" class="topic section">
		<div class="center-wrapper">
			<h1>我们的使命</h1>
			<h2>我们为视障人士创造发挥其才智的就业机会，促进多元和包容的社会文化。</h2>
			<div class="missions">
				<div class="mission mission-1">
					<img src="<?php echo get_template_directory_uri()?>/images/index-mission-1.png" />
					<p>促进社会的平等包容</p>
				</div>
				<div class="mission mission-2">
					<img src="<?php echo get_template_directory_uri()?>/images/index-mission-2.png" />
					<p>增强人与人的沟通互信</p>
				
				</div>
				<div class="mission mission-3">
					<img src="<?php echo get_template_directory_uri()?>/images/index-mission-3.png" />
					<p>发挥残障人士被忽略的潜能才干
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!-- 合作伙伴 -->
	<div id="topic-partners" class="topic section">
		<div class="center-wrapper">
			<h2>合作伙伴</h2>
			<div class="brand-logos">
				<table border="0" width="100%" align="center">
					<tr valign="middle">
						<td><img src="<?php echo get_template_directory_uri()?>/images/logos/greenland.jpg" /></td>
						<td><img src="<?php echo get_template_directory_uri()?>/images/logos/haiwaitan.jpg" /></td>
					</tr>
					<tr valign="middle">
						<td><img src="<?php echo get_template_directory_uri()?>/images/pages/coop-logo-3.png" /></td>
						<td><img src="<?php echo get_template_directory_uri()?>/images/pages/coop-logo-2.png" /></td>
					</tr>
					<tr valign="middle">
						<td><img src="<?php echo get_template_directory_uri()?>/images/pages/coop-logo-5.png" /></td>
						<td><img src="<?php echo get_template_directory_uri()?>/images/pages/coop-logo-6.png" /></td>
					</tr>
					<tr valign="middle">
						<td><img src="<?php echo get_template_directory_uri()?>/images/logos/canlian.jpg" width="80%" /></td>
						<td><img src="<?php echo get_template_directory_uri()?>/images/logos/rede.jpg" /></td>
					</tr>
					<tr valign="middle">
						<td><img src="<?php echo get_template_directory_uri()?>/images/logos/wanyuan.jpg" /></td>
						<td></td>
					</tr>
				</table>
				<div class="copyright">
					<p>Copyright黑暗中对话（中国）版权所有 &nbsp;&nbsp;|&nbsp;&nbsp;沪ICP备12015459&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo site_url('contact')?>">联系我们</a></p>
					<p>Dialogue in the Dark 是DSE的注册商标，黑暗中对话概念及相关商标版权属于德国对话社会企业</p>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p>Copyright黑暗中对话（中国）版权所有 &nbsp;&nbsp;|&nbsp;&nbsp;沪ICP备12015459&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.dialogue-in-the-dark.org.cn/contactus">联系我们</a></p>
			<p>
				<a href="http://www.dialogue-se.com" target="_blank"><img class="dse-logo" src="<?php echo get_template_directory_uri()?>/images/logo-dse.gif" title=""></a>
				Dialogue in the Dark 是DSE的注册商标，黑暗中对话概念及相关商标版权属于德国对话社会企业
			</p>
		</div>
	</div>
</div>
<div id="arrow-down">
	<img src="<?php echo get_template_directory_uri()?>/images/arrow-down.png" width="25" />
</div>
<script type="text/javascript">
jQuery(function($) {

	// 动画
	$('.propaganda .line-1').fadeIn(1000);
	setTimeout(function() {
		$('.propaganda .line-2').fadeIn(1000);
	}, 1200);

	// scroll
	$("#topics").fullpage({
		//loopTop: true,
		loopBottom: true,
		afterLoad : function(anchorLink, index) {
			// 合作伙伴动画
			if(index == 6) {
				$('#topic-partners .comment-1 img').fadeIn(500);
			}
			// 我们的使命
			if(index == 5) {
				$('#topic-mission .mission-1').fadeIn(300);
				setTimeout(function() {
					$('#topic-mission .mission-3').fadeIn(300);
				}, 1000);
				setTimeout(function() {
					$('#topic-mission .mission-2').fadeIn(300);
				}, 500);
			}
			// 体验馆
			if(index == 2) {
				$('#topic-stadium h1').fadeIn(300);
				setTimeout(function() {
					$('#topic-stadium .map').fadeIn(300);
				}, 300);
				setTimeout(function() {
					$('#topic-stadium .introduction.shanghai').fadeIn(300);
					$('#topic-stadium .introduction.shanghai').addClass('active');
				}, 700);
			}
			// 工作坊
			if(index == 3) {
				$('#topic-workshop .corp').css('display', 'block');
				$('#topic-workshop .corp').addClass('slideInUp animated');
				setTimeout(function() {
					$('#topic-workshop .slience').css('display', 'block');
					$('#topic-workshop .slience').addClass('slideInUp animated');
				}, 300);
				setTimeout(function() {
					$('#topic-workshop .edu').css('display', 'block');
					$('#topic-workshop .edu').addClass('slideInUp animated');
				}, 600);
			}
		}
	});

	// 体验馆切换
	$('#topic-stadium .locator').tap(function() {
		var locator = this;
		$('.locator').removeClass('active');
		$(this).addClass('active');
		$('#topic-stadium .introduction.active').fadeOut(300, function() {
			$('#topic-stadium .introduction.' + $(locator).data('tab')).addClass('active');
			$('#topic-stadium .introduction.' + $(locator).data('tab')).fadeIn(300);
		});
		$('#topic-stadium .introduction.active').removeClass('active');
	});

	// 手动翻页
// 	$('#arrow-down > img').tap(function() {
// 		$("#topics").moveDown();
// 	});

	// tap link
	$('.linkable').tap(function() {
		location.href = $(this).data('href');
		return false;

	});

	//$.fn.fullpage.moveTo(6);
});
</script>
<?php get_footer();?>
