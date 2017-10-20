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
	<div class="m-big">
		<header>
			<img src="/shouji/Public/Home/images/logo.png">
			<span><a href="/shouji/index.php/Orderinfo/index">查询订单</a></span>
		</header>
		<section class="m-top">
			<div class="nav">
				<div class="nav-title nav-select"><a href="">手机维修</a></div>
				<div class="nav-title"><a href="">旧机换钱</a></div>
			</div>
			<div class="m-roll">
		        <div><img src="/shouji/Public/Home/images/banner1.png" /></div>
		       	 <!-- <div><img src="images/banner2.png" /></div>
		        <div><img src="images/banner3.png" /></div> -->
			</div>
		</section>
		<!-- 手机品牌 -->
		<section class="m-brand">
			<ul class="clearfix">
				<?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="/shouji/index.php/Index/index/id/<?php echo ($v["id"]); ?>" class="brand-select"><?php echo ($v["brands"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</section>
		<!-- 手机型号 -->
		<section class="m-model">
			<ul class="clearfix">
				<?php if(is_array($arr1)): $i = 0; $__LIST__ = $arr1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="/shouji/index.php/Fault/index/id/<?php echo ($v["bid"]); ?>"><?php echo ($v["Model_number"]); ?></a></li>
					<!-- <li><a href="">iPhone 7</a></li>
					<li><a href="">iPhone SE</a></li>
					<li><a href="">iPhone 6s Plus</a></li>
					<li><a href="">iPhone 6s</a></li>
					<li><a href="">iPhone 6 Plus</a></li>
					<li><a href="">iPhone 6</a></li>
					<li><a href="">iPhone 5s</a></li> --><?php endforeach; endif; else: echo "" ;endif; ?>
				<li><a href="/shouji/index.php/Phonetype/index">更多</a></li>
			</ul>
		</section>
		<section class="m-off">
			<ul class="clearfix">
				<li><a href="/shouji/index.php/Cell/index"><img src="/shouji/Public/Home/images/001.png"></a></li>
				<li><a href="/shouji/index.php/Shell/index"><img src="/shouji/Public/Home/images/002.png"></a></li>
				<li><a href="/shouji/index.php/Screen/index"><img src="/shouji/Public/Home/images/003.png"></a></li>
<<<<<<< HEAD
				<li><a href=""><img src="/shouji/Public/Home/images/004.png"></a></li>
=======
				<li><a href="/shouji/index.php/Ram/index"><img src="/shouji/Public/Home/images/004.png"></a></li>
>>>>>>> 894ec2eddc9461d088b06a00b9c777ddb6922a1b
			</ul>
		</section>
		<section class="m-adout">
			<ul>
				<li><a href="/shouji/index.php/Adout/index">关于我们<i class="fa fa-angle-down fa-md"></i></a></li>
				<li><a href="/shouji/index.php/Help/index">帮助中心<i class="fa fa-angle-down fa-md"></i></a></li>
			</ul>
		</section>
		<footer>
				<img src="/shouji/Public/Home/images/logo.png">
				<p>手机：18515559955</p>
				<p>地址：北京朝阳区工体北路三里屯SOHO2号商场地下1楼B1-252</p>
				<p>版权所有：修立达  技术支持：爱乔信科</p>
		</footer>
		<div class="m-footer">
			<div><a href="tel:10086">电话预约</a></div>
			<div><a href="">快捷下单</a></div>
		</div>
	</div>
</body>
</html>