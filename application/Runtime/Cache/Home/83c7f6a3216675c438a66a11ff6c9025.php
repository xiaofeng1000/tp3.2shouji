<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>更换屏幕</title>
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
	<script type="text/javascript" src="/shouji/Public/Home/js/cell-public.js"></script>
	<script type="text/javascript" src="/shouji/Public/Home/js/cell-screen.js"></script>  
</head>
<body>
	<div class="cell-big">
		<div class="cell-banner">
			<img src="/shouji/Public/Home/images/screen-banner.png" width="100%">
		</div>
		<ul class="screen-serve">
			<li><img src="/shouji/Public/Home/images/20.png"><p>免费上门</p></li>
			<li><img src="/shouji/Public/Home/images/21.png"><p>原厂品质</p></li>
			<li><img src="/shouji/Public/Home/images/22.png"><p>全程录像</p></li>
			<li><img src="/shouji/Public/Home/images/23.png"><p>半年保质</p></li>
		</ul>
		<div class="screen-img">
			<img src="/shouji/Public/Home/images/18.png" width="100%">
		</div>
		<div class="screen-img">
			<img src="/shouji/Public/Home/images/19.png" width="100%">
		</div>
		<div class="screen-phrase">
			<h3>人们都是怎么打碎手机屏幕的呢？</h3>
			<p> 世界上50%的人口都至少打碎过一次手机屏幕。在这方面，印度人打碎屏幕几率最高，占总人 口的65%，而美国排名最末，只有34%。</p>
			<p> 手机从手中不慎掉落的比例最高，达到50%；而其余的原因包括从口袋里掉出（32%），从大 腿上坠地（27%），自拍时坠地（7%）和拿手机砸别人（5%）。</p>
		</div>
		<div class="screen-img">
			<img src="/shouji/Public/Home/images/15.png" width="100%">
		</div>
		<div class="screen-phrase">
			<h3>人们对于手机屏幕坏掉的反应</h3>
			<p>在屏幕碎裂之后，不少人都并没有进行维修。根据调查，有42%的用户认为维修费用太高了， 而23%的用户会继续使用屏幕碎裂的手机，即便他们会因此割破手指。</p>
		</div>
		<div class="screen-img">
			<img src="/shouji/Public/Home/images/14.png" width="100%">
		</div>
		<div class="screen-phrase">
			<h3>为和换屏要趁早</h3>
		</div>
		<div class="screen-style">
			<div class="screen-box">
				<div class="screen-box-top1">
					<p>外屏碎裂</p>
					<p>屏幕玻璃碎了，但图像显示正常</p>
				</div>
				<div class="screen-box-bottom">
					<p>碎屏不换的危险 </p>
					<p>外屏是保护内屏的屏障，外屏碎裂后， 汗液或水渍直接 穿过外屏玻璃，或者 一次微小的跌落或撞击，都会对内 屏 造成无可挽回的损伤，结果是本来只 需花换外屏的钱， 最后却要因内屏损 坏多花成倍的费用。</p>
				</div>
			</div>
			<div class="screen-box">
				<div class="screen-box-top2">
					<p>碎屏不换的危险</p>
					<p>外屏是保护内屏的屏障，外屏碎裂后</p>
				</div>
				<div class="screen-box-bottom">
					<p>内屏损坏的风险 </p>
					<p>手机内屏紧贴着主板和电池，而手机在 日常使用过 程中会遇到高负荷运行 （如玩游戏时），电池和机 身不同程 度发热的情况，大大增加了手机使用的 安全隐患。</p>
				</div>
			</div>
		</div>
		<div class="screen-arc">
			<h3>您可能关心的问题</h3>
			<p>1、外屏碎和内屏碎有什么区别？ 如果屏幕碎了，但图像可以正常显示，表示只是外屏碎。 如果图片显示不正常或者 完全无法显示，则内屏已碎。</p>
			<p>2、换屏要多久？ 平均20分钟维修时长。 </p>
			<p>3、可以单换玻璃吗？ 不行，这种更换维修故障高，用户使用体验差。</p>
			<p>4、为什么有的机型外屏碎的价格比内屏的价格低？ 因为如果仅是外屏碎，更换下来的旧件可以折价抵一部分维修费用。</p>
		</div>
	</div>
	
	<h2 class="cell-h2">预约下单</h2>
	<div class="cell-order">
		<div class="cell-order-member">
			<select id="cell-model">
				<?php if(is_array($obj)): $i = 0; $__LIST__ = $obj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["sid"]); ?>"><?php echo ($v["model_number"]); ?></option>
					<!-- <option value="2">iphone 8</option>
					<option value="3">iphone 9</option> --><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
		<div class="cell-order-member">
			<select id="screen-ab">
				<option value="0">请选择</option>
				<option value="355">内屏异常</option>
				<option value="155">外屏碎(显示正常)</option>
			</select>
		</div>
		<div class="cell-order-member">
			<select id="screen-color">
				<!-- <option value="1">金色</option>
				<option value="2">黑色</option>
				<option value="3">白色</option> -->
				<?php
 for($i=0;$i<count($color);$i++){ echo "<option value='$i+1'>$color[$i]</option>"; } ?>
			</select>
		</div>
		<div class="cell-order-member">
			<select id="cell-function">
				<option value="1">上门维修</option>
				<option value="2">邮寄维修</option>
				<option value="3">到店维修</option>
			</select>
		</div>
		<div class="cell-order-member cell-pa">
			<label for="">姓名</label>
			<input type="text" name="name" value="" id="name">
		</div>
		<div class="cell-order-member cell-pa">
			<label for="">手机</label>
			<input type="text" name="tel" value="" id="tel">
		</div>
		<div class="cell-order-member cell-branch">
			<select id="cell-address-branch">
				<option value="1">北京分部</option>
				<option value="2">天津分部</option>
				<option value="3">石家庄分部</option>
				<option value="4">上海分部</option>
			</select>
		</div>
		<div class="cell-order-text">
			地址:北京市海淀区知春路甲108号豪景大厦A座606室
		</div>
		<div class="cell-order-address cell-order-portion">
			<div class="order-add-0">
				<select id="cell-province">
					<option value="0">请选择</option>
				</select>
			</div>
			<div class="order-add-1">
				<select id="cell-city">
					<option>请选择</option>
				</select>
			</div>
			<div class="order-add-1">
				<select id="cell-county">
					<option>请选择</option>
				</select>
			</div>
		</div>
		<div class="cell-order-address cell-order-all">
			<div class="order-add-0">
				<select id="province" name="province" onchange="doProvAndCityRelation();">
  　　　　　		<option id="choosePro" value="-1">请选择</option>
  　　　　　	</select>	
			</div>
			<div class="order-add-1">
				<select id="citys" name="city" onchange="doCityAndCountyRelation();">
 　　　　　 		<option id='chooseCity' value='-1'>请选择</option>
 　　　　　 	</select>
			</div>
			<div class="order-add-1">
				<select id="county" name="county">
		　　　　　	<option id='chooseCounty' value='-1'>请选择</option>
		　　　　</select>
			</div>
		</div>
		<div class="cell-order-member cell-pa">
			<textarea placeholder="请填写详细地址信息" id="cell-text"></textarea>
		</div>
		<div class="cell-order-member cell-pa">
			<label for="">IMEI码(选填)</label>
			<input type="text" name="" value="">
		</div>
	</div>
	<div class="cell-phone-clause">
		<div class="select-input on">
			<input type="checkbox" name="" id="select-checkbox" checked="checked">
		</div>
		<p>我同意 <a href="help.html">《服务条款》</a></p>
	</div>
	<div class="cell-footer clearfix">
		<div class="cell-footer-l"><a href="tel:10086"><img src="/shouji/Public/Home/images/13.png"></a>客服 <span>￥<b></b></span></div>
		<div class="cell-footer-r" id="cell-submit">提交订单</div>
	</div>
</body>
<script>
$(function(){
	var color=$('#cell-model').find('option:selected').html();
	$('#cell-model').change(function(){
		var id=$(this).val();
		$.ajax({
			type:'POST',
			url:'/shouji/index.php/Shell/select',
			data:{
				id:id,
			},
			success:function(data){
				if(data){
					console.log(data);
					var tr="";
					var color= new Array();
					color= JSON.parse(data);
					console.log(color);
					console.log(color.length);
					for(i=0;i<color.length;i++){
						tr+="<option value="+(i+1)+">"+color[i]+"</option>";
					}
					console.log(tr);
					$('#screen-color').html(tr);
					// alert(2);
				}		
			}
		});
	});
});

$('#cell-submit').click(function(){
	var path="";
	var model_number=$('#cell-model').find('option:selected').html();
	var Damage_reason=$('#screen-ab').find('option:selected').html();
	var color=$('#screen-color').find('option:selected').html();
	var Service=$('#cell-function').find('option:selected').html();
	var user=$('#name').val();
	var Contact=$("#tel").val();
	var path2=$('#cell-text').val();
	var price=$('.cell-footer-l').find('span').text();
	if(Service=="上门维修"){
		var path3=$('#cell-province').find('option:selected').html();
		var path4=$('#cell-city').find('option:selected').html();
		var path5=$('#cell-county').find('option:selected').html();
		$.ajax({
			type:'POST',
			url:'/shouji/index.php/Shell/insert',
			data:{
				Model_number:model_number,
				color:color,
				Damage_reason:Damage_reason,
				user:user,
				Contact:Contact,
				path:path3+path4+path5+path2,
				Service:Service,
				price:price,
			},
			success:function(data){
				if(data){
					window.location.href='/shouji/index.php/Succeed/index';
				}
			}
		});
	}else if(Service=="邮寄维修"){
		var path3=$('#province').find('option:selected').html();
		var path4=$('#citys').find('option:selected').html();
		var path5=$('#county').find('option:selected').html();
		$.ajax({
			type:'POST',
			url:'/shouji/index.php/Shell/insert',
			data:{
				Model_number:model_number,
				color:color,
				Damage_reason:Damage_reason,
				user:user,
				Contact:Contact,
				path:path3+path4+path5+path2,
				Service:Service,
				price:price,
			},
			success:function(data){
				if(data){
					window.location.href='/shouji/index.php/Succeed/index';
				}
			}
		});
	}else if(Service=="到店维修"){
		var path3=$('#province').find('option:selected').html();
		var path4=$('#citys').find('option:selected').html();
		var path5=$('#county').find('option:selected').html();
		$.ajax({
			type:'POST',
			url:'/shouji/index.php/Shell/insert',
			data:{
				Model_number:Model_number,
				color:color,
				Damage_reason:Damage_reason,
				user:user,
				Contact:Contact,
				path1:path3+path4+path5+path2,
				Service:Service,
				price:price,
			},
			success:function(data){
				if(data){
					window.location.href='/shouji/index.php/Succeed/index';
				}
			}
		});
	}
});
</script>
</html>