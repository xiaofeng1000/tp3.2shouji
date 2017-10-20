
$(function(){
	$('.m-brand ul li').eq(4).after('<li class="m-ioc"><i class="fa fa-angle-down fa-lg"></i></li>');
	var _mIoc = $('li.m-ioc').nextAll();
	_mIoc.hide();
	$('li.m-ioc').click(function(){
		_mIoc.slideToggle(500);
	})
	
	$('.fault-info-mes >div').click(function(){	
		$(this).next('ul.fault-info-mes-tow').slideToggle(500);
	})	
	$('.address').click(function(){
		$('.city').show();
		$('.service-function-big').hide();
		$.region();
	});
	$('.city-top >span').click(function(){
		$('.city').hide();
		$('.service-function-big').show();
	});
	
	$('#branch').click(function(){
		var id = $(this).val();
		$.ajax({
			type:'GET',
			dataType: 'json',
			url:'js/branch.json',
			success: function(data){
				$.each(data.branch,function(i,n){
					if (n.id == id) {
						$('.mailAddress').text(n.nameCon);
					}
				});
  			}
		});
	});
	$('ul.fault-info-color >li').click(function(){
		$(this).addClass('info-select').siblings().removeClass('info-select');
	});
	$('ul.fault-info-mes-tow >li').click(function(){
		var price = 0;
		$(this).toggleClass('info-tow-select');
		for (var i = 0; i < $('ul.fault-info-mes-tow >li.info-tow-select').length; i++) {
			price += parseInt($('ul.fault-info-mes-tow >li.info-tow-select').eq(i).data('price'));
		}
		$('.fault-m').find('span').text(price);
	});
	$('#fault-next').click(function(){
		if ($('.info-tow-select').length == 0) {
			alert('请选择故障信息！');
		}else{
			var Damage_reason="";
			var str=window.location.href;
			str=str.substr(str.indexOf("id")+3);
			var color=$('#test>li.info-select').html();
			var info = $('.fault-info-mes-tow li.info-tow-select');
			// console.log(info);
			for(var i=0;i<info.length;i++){
				// console.log(info[i].innerHTML);
				Damage_reason+=info[i].innerText+=",";
			}
			var total_cost=$('.fault-m').find('span').html();
			// console.log(str);
			// console.log(color);
			// console.log(Damage_reason);
			// console.log(total_cost);
			$.ajax({
				type:'POST',
				url:'/shouji/index.php/Fault/insert',
				data:{
					id:str,
					color:color,
					Damage_reason:Damage_reason,
					total_cost:total_cost,
				},
				success:function(id){
					if(id){
						window.location.href='/shouji/index.php/service/index/id/'+id;
					}
				}
			});
			// window.location.href='service_function.html';
		}

	});
});


$.region = function(){
	var conOne ='',
		conTow =[],
		conThree =[],
		vleveTitle ='',
		Title = '';
	//初始化
	init();
	
	function init(){
		$('.city-c,.city-qx').empty();
		$.ajax({
			type:'GET',
			dataType: 'json',
			url:'/shouji/public/Home/js/city.json',
			success: function(data){
				$.each(data.province,function(i,n){
					conOne +="<li data-id="+n.provinceid+">"+n.provincename+"</li>";
				});
				conTow = data.city;
				conThree = data.county;
				leveOne();	
  			}
		});

	}
	//一级地区
	function leveOne(){
		$('.city-s').html(conOne);
		$('.city-s >li').click(function(){
			$(this).addClass('city-the').siblings().removeClass('city-the');
			leveTitle = $(this).text();
			$('.city-select').find('p').text(leveTitle);
			$('.city-qx').empty();
			leveTow($(this).data('id'));
		});
	}
	//二级联动
	function leveTow(id){
		var conData ='';
		$.each(conTow,function(i,n){
			if (n.citybool == id) {
				conData +="<li data-id="+n.cityid+">"+n.cityname+"</li>";
			}	
		});
		$('.city-c').html(conData).css('visibility','visible');
		$('.city-c >li').click(function(){
			$(this).addClass('city-the').siblings().removeClass('city-the');
			var leveTowTitle = $(this).text();
				Title = leveTitle+'-'+leveTowTitle;
			$('.city-select').find('p').text(Title);
			leveThree($(this).data('id'));
		});
	}
	//三级联动
	function leveThree(id){
		var conData ='';
		$.each(conThree,function(i,n){
			if (n.countybool == id) {
				conData +="<li data-id="+n.countyid+">"+n.countyname+"</li>";
			}	
		});
		$('.city-qx').html(conData).css('visibility','visible');
		$('.city-qx >li').click(function(){
			var leveThreeTitle = $(this).text();
			$('.address').text(Title+'-'+leveThreeTitle);
			$('.city').hide();
			$('.service-function-big').show();
			$('.city-select').find('p').empty();
			$('.city-c,.city-qx').empty();
		});
	}
}
