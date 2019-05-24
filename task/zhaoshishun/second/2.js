
$(function(){
	
	var oul=$('.picture ul');//四张图片
	var numLi=$('.points-1');//小点
	var ali=$('.picture ul li').eq(0).height();
	var timer;
	var _now=0;
	
	
		$(".picture-1:eq(0)").show();
	numLi.mouseenter(function(){
		var index=$(this).index();
		//小点颜色变化
		$(this).addClass('current').siblings().removeClass('current');
		//图片显示
		$('.picture-1').eq(index).show().siblings('.picture-1').hide();
		_now=index;
	});
		xunhuan();
		//函数循环
		function xunhuan(){	timer=setInterval(function(){
			_now++;//循环
			//循环条件
			if(_now==4){
				_now=0
			}
			numLi.eq(_now).addClass('current').siblings().removeClass('current');//小点循环
			$('.picture-1').eq(_now).show().siblings('.picture-1').hide();//图片循环
		},2000);
		}
		//函数循环
	//左边按钮
	$('.prev').click(function(){
		clearInterval(timer);
		_now--;
		if(_now==-1){
				_now=3
			}
		$('.picture-1').eq(_now).show().siblings('.picture-1').hide();
		numLi.eq(_now).addClass('current').siblings().removeClass('current');
		xunhuan();
	});
	//右边按钮
	$('.next').click(function(){
		clearInterval(timer);
		_now++;
		if(_now==4){
				_now=0
			}
		$('.picture-1').eq(_now).show().siblings('.picture-1').hide();
		numLi.eq(_now).addClass('current').siblings().removeClass('current');
		xunhuan();
	});
		
	//第一行下拉菜单
	$('.li-1').hover(function(){
		$('.li-1-1').slideDown(500);
		
	},//放上去下拉
	function(){
		$('.li-1-1').slideUp(500);
		});//移走隐藏
		//重复操作
				$('.li-2').hover(function(){
			$('.li-2-1').slideDown(500);
		},
		function(){
			$('.li-2-1').slideUp(500);
			});
			$('.li-3').hover(function(){
			$('.li-3-1').slideDown(500);
		},
		function(){
			$('.li-3-1').slideUp(500);
			});
				$('.li-4').hover(function(){
			$('.li-4-1').slideDown(500);
		},
		function(){
			$('.li-4-1').slideUp(500);
			});
				$('.li-5').hover(function(){
			$('.li-5-1').slideDown(500);
		},
		function(){
			$('.li-5-1').slideUp(500);
			});
		//重复操作
	
	
	//鼠标放上去改变颜色
	$('.bcolor').hover(function(){
		$(this).addClass('acolor').siblings().removeClass('acolor');
	},function(){
		$('.bcolor').removeClass('acolor');
		});

	//点水调歌头效果
	$('.left-main-1').click(function(){
			$('.left-left').show(500);
			$('.left-right').hide();
			
	});
	//点满江红效果
	$('.left-main-2').click(function(){
			$('.left-right').show(500);
			$('.left-left').hide();
			$('.left-main-1').removeClass('left-css').addClass('right-css');
	});
	//字体效果
	$('.left-body').hover(function(){
		$(this).addClass('left-body-color').siblings().removeClass('left-body-color');
	},function(){
		$('.left-body').removeClass('left-body-color');
		});
		
	//中右左轮播图
	
	
	
	
	
	var now=-1;
	var timeq;
	$(".right-1-1 ul li:eq(0)").show();
	$(".img-points:eq(0)").addClass('img-css');
	$('.img-points').click(function(){
		clearInterval(timeq);
		$(this).addClass('img-css').siblings('.img-points').removeClass('img-css');
		//图片显示
		$('.img').eq($(this).index()).show().siblings('.img').hide();
		now=$(this).index();
		xunhuan_a();
	});
		xunhuan_a();
		//定义函数xunhuan_a
		
		function xunhuan_a(){	timeq=setInterval(function(){
			now++;
			if(now==4){
				now=0
			}
			$('.img-points').eq(now).addClass('img-css').siblings('.img-points').removeClass('img-css');
			$('.img').eq(now).show().siblings('.img').hide();
		},2000);
		}
	

	//春晓诗句
	$(".a:eq(0)").show();
	$("h3").click(function(){
		$(this).addClass("a-color").next(".a").slideToggle(300).siblings(".a").slideUp(600);
		$(this).siblings().removeClass("a-color");
		
	});
	
	//下面的轮播图
	var time;
	xunhuan_b();
	function xunhuan_b(){
		time=setInterval(function(){
			if($('.main-2-1 ul').css('left')=='-1700px'){
				$('.main-2-1 ul').css('left','-400px');
			}
			$('.main-2-1 ul').css('left','+=-100px')
		},1500);
	}
	$('.main-prev').click(function(){
		clearInterval(time);
		xunhuan_c();
		xunhuan_b();
		
	});
	$('.main-next').click(function(){
		clearInterval(time);
		xunhuan_c();
		xunhuan_b();
	});
	function xunhuan_c(){
			if($('.main-2-1 ul').css('left')=='-1700px'){
				$('.main-2-1 ul').css('left','-400px');
			}
			$('.main-2-1 ul').css('left','+=-100px');
		
	}
	
	//小狗部分
	$('.up-1').click(function(){
		tanchuang();
		$('.dog2').hide();$('.dog3').hide();$('.dog4').hide();
	});
	
		$('.up-2').click(function(){
			tanchuang();
			$('.dog1').hide();$('.dog3').hide();$('.dog4').hide();
		});
				$('.down-1').click(function(){
					tanchuang();
					$('.dog1').hide();$('.dog2').hide();$('.dog4').hide();
				});
	$('.down-2').click(function(){
		tanchuang();
		$('.dog1').hide();$('.dog3').hide();$('.dog2').hide();
	});
	function tanchuang(){
		var screenWidth = $(window).width();
		screenHeight = $(window).height(); //当前浏览器窗口的 宽高
		var scrolltop = $(document).scrollTop();//获取当前窗口距离页面顶部高度
		var objLeft = (screenWidth - $('.dog1 img').width())/2 ;
		var objTop = (screenHeight - $('.dog1 img').height())/2 + scrolltop;
		$('.dog1, .dog2,.dog3,.dog4').css({position:'absolute',left: objLeft + 'px', top: objTop + 'px'}).show();
		$('.dog1 span img').click(function(){
		$('.dog1').hide();
		})
		$('.dog2 span img').click(function(){
		$('.dog2').hide();
		})
		$('.dog3 span img').click(function(){
		$('.dog3').hide();
		})
		$('.dog4 span img').click(function(){
		$('.dog4').hide();
		})
	}
	
	
	
	$('.laboratory').hover(function(){
		$(this).addClass('left-body-color');
	},function(){
		$(this).removeClass('left-body-color');
	});
	
});