$(function(){
//tab标签页
	var ali = $('.main-content-1-title ul li');
	var aDiv = $('.main-content-1-poem div');
	var aP=$('.main-content-1-poem div p');
	var timeId = null;
	aP.mouseover(function () {
		$(this).css("color", 'red');
	})
	aP.mouseout(function () {
		$(this).css("color", '#000');
	})
	ali.click(function () {
		var _this = $(this);
		//$(this)方法属于哪个元素，$(this)就是指哪个元素
		_this.addClass('main-content-1-current').siblings().removeClass();
		//如果想用一组元素控制另一组元素的显示或者隐藏，需要用到索引
		var index = _this.index();
		aDiv.eq(index).siblings().fadeOut(function () {
			aDiv.eq(index).fadeIn();
		});
	})

	//导航栏下拉菜单
	var aNav = $('.nav-mid span');
	var aDrop = $('.dropdown div ul');
	var aLi = $('.dropdown div ul li')
	var timer1 = null;
	var timer2 = null;
	aNav.mouseover(function() {
		var _this = $(this);
		timer1 = setTimeout(function() {
			_this.css("background-color", "#ec6b0e");
			var index = _this.index();
			aDrop.eq(index).slideDown(function () {
				aDrop.mouseenter(function() {					
					clearTimeout(timer2);
					aLi.mouseover(function(){
						$(this).css("background-color", "#ec6b0e");
					})
					aLi.mouseout(function(){
						$(this).css("background-color", "#01acb7");
					})					
				})
				aDrop.mouseleave(function() {
					$(this).css("background-color", "#01acb7");
					aDrop.slideUp();
				})
			});
		}, 300)
	})
	aNav.mouseout(function() {
		var _this = $(this);
		_this.css("background-color", "#01acb7");
		timer2 = setTimeout(function() {			
			var index = _this.index();
			aDrop.eq(index).slideUp();
		}, 300)
		clearTimeout(timer1);
	})

//搜索框背景色变化
	var oHeadBtn = $('.header-btn');
	var oInput = $('.header input');
	oInput.mouseover(function () {
		oInput.css("background-color", '#fff')
		oHeadBtn.css("background-color", '#fff')
	})
	oInput.mouseout(function () {
		oInput.css("background-color", '#f5aa02')
		oHeadBtn.css("background-color", '#f5aa02')
	});

//底部链接
	aFootA=$('.footer-content-connect p a');
	aFootA.mouseover(function(){
		$(this).css("color",'red');
	})
	aFootA.mouseout(function(){
		$(this).css("color",'#000');
	})

//春晓下拉菜单
	aTitle=$(".main-content-3-title");
	$('.main-content-3-title').last().css("background-color",'#ec6b0e')
	.siblings(".main-content-3-title").css("background-color",'#f5aa02');
	aTitle.click(function(){
		$(this).next().slideDown().siblings(".main-content-3-content").slideUp();
		$(this).css("background-color",'#ec6b0e')
		.siblings(".main-content-3-title").css("background-color",'#f5aa02')
	})

//大图片轮播
	var oBPicUl=$('.bigpic ul');
	var aBPicLi=$('.bigpic ul li');
	var numBSpan=$('.bigpic-choise span');
	var aBLiWidth=$('.bigpic ul li').eq(0).width();
	var _now=0;
	var _now2=0;
	var timer3=null;
	//点击下方选择图片
	numBSpan.click(function(){
		var index=$(this).index();	
		_now=index;	
		_now2=index;
		$(this).addClass('S-current').siblings().removeClass('S-current');
		oBPicUl.animate({'left':-aBLiWidth*index},500)
	});
	//向右
	$('.bigpic-next').on('click',function(){		
		$(".bigpic span").removeClass('S-current');
		numBSpan.eq(_now).addClass('S-current');
		slider();
	});
	//向左
	$('.bigpic-prev').on('click',function(){
		_now-=2;
		_now2-=2;
		$(".bigpic span").removeClass('S-current');
		numBSpan.eq(_now+1).addClass('S-current');
		if(oBPicUl.css('left')=='0px'){
			oBPicUl.animate({left:'-3780px'},500);
			_now=3;
			_now2=3;
		}else{
			slider();
		}				
	});
	//函数slider
	function slider() {
		if(_now==numBSpan.length-1) {
			aBPicLi.eq().css({
				'position':'relative',
				'left':oBPicUl.width()
			});		
			_now=0;
		}else{
			_now++;		
		}
		_now2++;
		$(".bigpic span").removeClass('S-current');
		numBSpan.eq(_now).addClass('S-current');
		
		oBPicUl.animate({'left':-aBLiWidth*_now2},500,function() {
			if(_now==0){
				aBPicLi.eq(0).css('position','static');
				oBPicUl.css('left',0);
				_now2=0;
			}
		});
	}
	//定时器
	timer3=setInterval(slider,1500);
	$('.bigpic').mouseenter(function() {
		clearInterval(timer3)
	});
	$('.bigpic').mouseleave(function() {
		timer3=setInterval(slider,1500)
	});

//会议放大缩略图
	var aSmallLi=$('.main-content-2-bottom ul li');
	$('.above').hide();
	$('.above:first').show();
	aSmallLi.click(function(){
		aSmallLi.removeClass('H-current');
		$(this).addClass('H-current');
		$('.above').hide();
		$(this).children('.above').show();
		var thisSrc=$(this).children().attr('src');
		$('.main-content-2-top img').attr('src',thisSrc);
		var imgAlt=$(this).children().attr('alt');
		oP=$('.main-content-2-top p');
		oP.html(imgAlt);
	})

//风景图点击轮播
	var leftBtn=$('.smallpic-prev img');
	var rightBtn=$('.smallpic-next img');
	var smallImgUl=$('.main-content-4 ul');
	var oUlHtml=smallImgUl.html();
	smallImgUl.html(oUlHtml+oUlHtml);
	rightBtn.click(function(){			
		if(smallImgUl.css('left')=='-1376px'){
			smallImgUl.css('left','+=860px');					
		}
		else{
			smallImgUl.animate({'left':'-=172px'},300);
		}
	});
	leftBtn.click(function(){
		if(smallImgUl.css('left')=='0px'){
			smallImgUl.css('left','-860px');
		}	
		else{
			smallImgUl.animate({'left':'+=172px'},300);
		};	
	});

//小狗弹出框遮罩层
	var oDogChoise=$('.dog');
	var popWindow=$('.popdiv');
	var oClose=$('.close');
	var browserWidth=$(window).width();//浏览器可是区域宽度
	var browserHeight=$(window).height();//浏览器可视区域高度
	var browserScrollTop=$(window).scrollTop();
	var popWindowWidth=popWindow.outerWidth(true);//弹出窗口宽度
	var popWindowHeight=popWindow.outerHeight(true);//弹出窗口高度
	var positionLeft=browserWidth/2-popWindowWidth/2;
	var positionTop=browserHeight/2-popWindowHeight/2+browserScrollTop;
	var oMask='<div class="mask"></div>';//遮罩层
	var maskWidth=$(document).width();
	var maskHeight=$(document).height();
	popWindow.css('left',positionLeft+'px');
	popWindow.css('top',positionTop+'px');
	oDogChoise.click(function(){
		var thisSrc=$(this).children().attr('src');
		$('.popdiv-dog').attr('src',thisSrc);
		$('.popdiv-dog').fadeIn();
		popWindow.show();		
		$('body').append(oMask);
		$('.mask').width(maskWidth).height(maskHeight);
	});
	oClose.click(function(){
		popWindow.hide();
		$('.mask').hide();	
	});
});