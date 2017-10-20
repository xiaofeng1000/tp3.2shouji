<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>订单详情</title>
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
	<script type="text/javascript" src="/shouji/Public/Home/js/order.js"></script>               
</head>
<body>
	<div class="fault-big">
		<div class="fault-head"><a href="/shouji/index.php/Index/index">首页</a>订单详情</div>
		<div class="order-con">
			<div class="fault-top">
				<div class="fault-top-l">
					<img src="/shouji/Public/Home/<?php echo ($pro["image"]); ?>" alt="<?php echo ($pro["Model_number"]); ?>">
				</div>
				<div class="fault-top-r">
					<h2><?php echo ($pro["Model_number"]); ?></h2>
					<p><?php echo ($pro["color"]); ?></p>
				</div>
			</div>
			<ul class="fault-info-mes-tow">
					<?php
 $Damage=explode(",",$pro['Damage_reason']); for($i=0;$i<count($Damage);$i++){ $Damagereason[$i]=substr($Damage[$i],0,stripos($Damage[$i],'￥')); $cost[$i]=substr($Damage[$i],stripos($Damage[$i],'￥')+3); if($Damagereason[$i]){ echo "<li class='info-tow-select'>".$Damagereason[$i]."<span><em>￥</em><b>".$cost[$i]."</b></span></li>"; } } ?>
					<!-- <li class="info-tow-select"><?php echo ($pro["Damage_reason1"]); ?><span><em>￥</em><b>998</b></span></li> -->
					<!-- <li class="info-tow-select">外屏碎(显示正常)<span><em>￥</em><b>998</b></span></li> -->
			</ul>
			<ul class="order-box">
				<li><span>姓名:</span><em><?php echo ($pro["user"]); ?></em></li>
				<li><span>联系方式:</span><em><?php echo ($pro["Contact"]); ?></em></li>
				<li><span>详细地址:</span><p><?php echo ($pro["path"]); ?></p></li>
				<li><span>服务说明:</span><p><?php echo ($pro["Service"]); ?></p></li>
			</ul>
		</div>
		<div class="m-footer fault-foot">
			<div class="fault-m">预计费用:￥<span><?php echo ($pro["total_cost"]); ?></span></div>
			<div><a href="/shouji/index.php/Succeed/index">提交订单</a></div>
		</div>
	</div>	
</body>
</html>