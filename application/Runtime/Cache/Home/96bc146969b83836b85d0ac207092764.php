<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>手机网站</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=yes"/>
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<link rel="stylesheet" type="text/css" href="/shouji/Public/Home/css/main.css">
	<link href="/shouji/Public/Home/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/shouji/Public/Home/css/js-image-slider.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/shouji/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script src="/shouji/Public/Home/js/js-image-slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="/shouji/Public/Home/js/main.js"></script>               
</head>
<body>
	<div class="fault-big">
		<div class="fault-head"><a href="/shouji/index.php/Index/index">首页</a>故障信息</div>
		<section class="fault-top">
			<div class="fault-top-l">
				<img src="/shouji/Public/Home/<?php echo ($pro["path"]); ?>" alt="iphone7">
			</div>
			<div class="fault-top-r">
				<h2><?php echo ($pro["Model_number"]); ?></h2>
				<p>修改机型	&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg"></i></p>
			</div>
		</section>
		<section class="fault-info">
			<ul class="fault-info-color" id="test">
				<li class="info-select">金色</li>
				<li>银色</li>
				<li>黑色</li>
				<li>玫瑰金</li>
				<li>亮黑点</li>
				<li>灰色</li>
				<li>红色</li>
			</ul>
			<div class="fault-info-mes">
				<?php if(is_array($arr1)): $i = 0; $__LIST__ = $arr1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div><?php echo ($v["tabulation"]); ?><i class="fa fa-angle-right fa-lg"></i></div>
					<!-- <ul class="fault-info-mes-tow">
						<li data-price="998"><?php echo ($v["question1"]); ?><span><em>￥</em><b><?php echo ($v["The_price1"]); ?></b></span></li>
						<li data-price="100"><?php echo ($v["question2"]); ?><span><em>￥</em><b><?php echo ($v["The_price2"]); ?></b></span></li>
					</ul> -->
					<?php if(empty($v["question1"])): else: ?>
						<ul class="fault-info-mes-tow">
							<li data-price="<?php echo ($v["The_price1"]); ?>"><?php echo ($v["question1"]); ?><span><em>￥</em><b><?php echo ($v["The_price1"]); ?></b></span></li>
							<li data-price="<?php echo ($v["The_price2"]); ?>"><?php echo ($v["question2"]); ?><span><em>￥</em><b><?php echo ($v["The_price2"]); ?></b></span></li>
						</ul><?php endif; ?>
					<!-- <div>电池/充电问题<i class="fa fa-angle-right fa-lg"></i></div>
					<ul class="fault-info-mes-tow">
						<li data-price="198">电池<span>￥198</span></li>
						<li data-price="499">充电<span>￥499</span></li>
					</ul>
					<div>主板维修 <i class="fa fa-angle-right fa-lg"></i></div>
					<div>内存升级/更换硬盘 <i class="fa fa-angle-right fa-lg"></i></div>
					<div>摄像头问题 <i class="fa fa-angle-right fa-lg"></i></div>
					<div>外壳边框问题 <i class="fa fa-angle-right fa-lg"></i></div>
					<div>声音问题 <i class="fa fa-angle-right fa-lg"></i></div>
					<div>按键问题 <i class="fa fa-angle-right fa-lg"></i></div> --><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</section>
		<div class="m-footer fault-foot">
			<div class="fault-m">估价:￥<span>0</span></div>
			<!-- <div><a href="service_function.html">下一步</a></div> -->
			<div id="fault-next"><a href="javascript:void(0);">下一步</a></div>
			
		</div>
	</div>	
</body>
</html>