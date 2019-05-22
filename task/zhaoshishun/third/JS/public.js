$(function(){
	
//下拉菜单
	$('.nav ul li').eq(0).addClass('acolor');
	$('.nav ul li').hover(function(){
		$(this).find('.nav2').stop().slideDown();	//让点击的对应的子元素nav2展开
		$(this).addClass('acolor').siblings().removeClass('acolor');		//给点击的添加样式
	},
	function(){						//如果移开鼠标执行的操作
		$(this).find('.nav2').stop().slideUp();	//让点击的对应的子元素nav2展开收起
		$(this).removeClass('acolor');		//给点击的删除样式
	}
	);
//下拉菜单结束


//所有字体变蓝效果
	$('.blue').hover(function(){
		$(this).addClass('dcolor');
	},function(){
		$(this).removeClass('dcolor');
	});	
//所有字体变蓝效果结束


});