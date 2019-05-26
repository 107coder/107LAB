$(function(){
	var oul=$('.four ul');
	var ali=$('.four ul li');
	var nonli=$('.four ol li');
	var aliwidth=$('.four ul li img').eq(0).width();
	var _now=0;  //控制数字样式计数器
	var _now2=0;  //控制图片运动距离的计数器
	var timeId=null;
	var oul2=$('.top_left ul');
	var numLi=$('.top_left ol li');
	var aliWidth2=$('.top_left ul li').eq(0).width();
	var now=0;
	var id;
	var directionX=true,directionY=true;
	

	//导航栏
	$('.n1 > li').hover(function() {
		$(this).children('.n2').slideDown('slow');
	}, function() {
		$(this).children('.n2').slideUp(200);
	});
	
	//大图轮播
	nonli.click(function(){
		var index=$(this).index();
		_now=index;
		_now2=index;
		$(this).addClass('current').siblings().removeClass();
		oul.animate({'left':-aliwidth*index},500);
	});
	//图片运动的函数
	function slider(){
		if(_now==nonli.size()-1){
			ali.eq(0).css({
				'position':'relative',
				'left':oul.width()
			});
			_now=0;
		}else{
			_now++;
		}
		_now2++;
		nonli.eq(_now).addClass('current').siblings().removeClass();
		oul.animate({'left':-aliwidth*_now2},1000,function(){
		        if(_now==0){
			    ali.eq(0).css('position','static');
			    oul.css('left',0);
				_now2=0;
		    }
		});
	}
	timeId=setInterval(slider,2200);
	
               //Tab切换
	$(".slideTxtBox .hd ul li").hover(function() {
		num = $(".slideTxtBox .hd ul li").index(this);
		$(".slideTxtBox .bd ul").eq(num).fadeIn()
			.siblings().hide();
		$(".slideTxtBox .hd ul li").eq(num).addClass("on")
			.siblings().removeClass("on");
	});
	
	//小图轮播
	numLi.click(function(){
		var index=$(this).index();
		$(this).addClass('current2').siblings().removeClass();
		oul2.animate({'left':-aliWidth2*index},500);
	});
	
	setInterval(function(){
		if(now==numLi.size()-1){
			now=0;
		}else{
			now++;
		}
		numLi.eq(now).addClass('current2').siblings().removeClass();
		oul2.animate({'left':-aliWidth2*now},500);
	},2500);
	
	//放大镜
	/*var top_leftImgLi=$('.top_left ul li');
	top_leftImgLi.mouseover(function(){
		var thisSrc=$(this).children('img').attr('src');
		$('.large img').attr('src',thisSrc);
	});
	
	var top_leftDiv=$('.top_left');
	top_leftDiv.mousemove(function(e){
		$('.mask').show();
		$('.large').show();
		top_leftDivOffset=top_leftDiv.offset();
		var x=e.pageX-top_leftDivOffset.left-$('.mask').width()/2;
		var y=e.pageY-top_leftDivOffset.top-$('.mask').height()/2;
		
		if(x<=0){
			x=0;
		}else if(x>=top_leftDiv.width()-$('.mask').width()){
			x=top_leftDiv.width()-$('.mask').width();
		}
		if(y<=0){
			y=0;
		}else if(y>=top_leftDiv.height()-$('.mask').height()){
			y=top_leftDiv.height()-$('.mask').height();
		}
		
		var percentageX=x/(top_leftDiv.width()-$('.mask').width());
		var percentageY=y/(top_leftDiv.height()-$('.mask').height());
		
		$('.large img').css({
			left:-percentageX*(600-$('.large').width()),
			top:-percentageY*(450-$('.large').height())
		});
		
		$('input').val(percentageX+','+percentageY)
		
		$('.mask').css({
			'left':x+'px',
			'top':y+'px'
		});
	});
	top_leftDiv.mouseout(function(){
		$('.mask').hide();
		$('.large').hide();
	});*/
});