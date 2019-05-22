$(function(){
	

		
//上面的轮播图	
	var a=0;
	xunhuan();
	$('.dot').eq(0).addClass('bcolor')
	function xunhuan(){
	time=setInterval(function(){
		
		if(a<3)						//如果前两张直接滚动
			$('.image-1').animate({left:'-=100%'});
		if(a==3){					//当滚到第三张让它滚到第四张的时候立即设置left为0，这样不会有立即到最左边的感觉
			a=-1;
			$('.image-1').animate({left:'-=100%'},function(){	//当animate滚动完执行的语句
			$('.image-1').css('left','0');
			});
		}
	    a++;
		$('.dot').eq(a).addClass('bcolor').siblings('.dot').removeClass('bcolor');
		},2500);
	}


	//点击小点时到达相应图片位置
	$('.dot').click(function(){
		clearInterval(time);	//清除计时器
		var index=$(this).index(); 	
		$(this).addClass('bcolor').siblings().removeClass('bcolor');		//小点颜色变化
		
	/*	$('.image-1').animate({left:-index*100+'%'},500);	*/			//点击图片滑动到相应位置
		
		$('.image-1').css({
				'left':-index*100+'%'
		});									     					//点击时图片立即显示指定图片，无滑动感
		
		a=index;	//让小点等于点击的那个
		xunhuan();		//图片自动循环
	});
		
//上面的轮播图结束
		
	
//下面的轮播图
	var time2;
	var now3=0;
	$('.number').eq(0).addClass('ccolor').siblings().removeClass('ccolor');
	$('.image ul li').eq(0).show();
	xunhuan2();
	
	function xunhuan2(){		//定义xunhuan2
		time2=setInterval(function(){
			now3++;
			if(now3==2){
				now3=0;
			}
			$('.image ul li').eq(now3).fadeIn(200).siblings().fadeOut(300);
			$('.number').eq(now3).addClass('ccolor').siblings().removeClass('ccolor');
			
		},3000);
	}
	//点击第一个小点时到达相应图片位置
	$('.number-1').click(function(){
		clearInterval(time2);
		$('.image ul li').eq(0).fadeIn(200).siblings().hide();
		$('.number').eq(0).addClass('ccolor').siblings().removeClass('ccolor');
		now3=0;
		xunhuan2();		
	});
	//点击第二个小点时到达相应图片位置
	$('.number-2').click(function(){
		clearInterval(time2);
		$('.image ul li').eq(1).fadeIn().siblings().hide();
		$('.number').eq(1).addClass('ccolor').siblings().removeClass('ccolor');
		now3=1;
		xunhuan2();		
	});
	
	//放大效果
	var testli = $('.image ul li');
	testli.hover(function(){
		//alert(4);
		$(this).find('img').animate({
			width:'800px',
			height:'600px',
			left:'-200',
			top:'-150'
		},500)
	},function(){
		$(this).find('img').animate({
				width:'400px',
				height:'300px',
				top:'0',
				left:'0'
			
		},500);
		
	});
	




	
//下面的轮播图结束
	
	
	//新闻公告
	$('.up-3 ul li').hover(function(){
		var index=$(this).index();
		$('.up-3 ul li a').eq(index).addClass('dcolor');
		
	},function(){
		$('.up-3 ul li a').removeClass('dcolor');
	});
	//新闻公告结束
	
	
	//心理百科。。。
	$('.down-2-2 ul').eq(0).show();
	$('.down-2-1 ul li').eq(0).addClass('acolor');
	$('.down-2-1 ul li').hover(function(){
		var idx=$(this).index();
		$(this).addClass('acolor').siblings().removeClass('acolor');
		$('.down-2-2 ul').eq(idx).stop().fadeIn().siblings().hide();
	});
	
	$('.down-2-1 ul li span').hover(function(){
		$(this).addClass('ecolor');
	},function(){
		$(this).removeClass('ecolor');
	});	
	//心理百科。。。结束
	
	
	//一键回顶部
	$('.returnTop').hide();		//先隐藏
		$(window).scroll(function(){	//如果屏幕滚动
			if($(window).scrollTop()>50){		//如果相对顶部大于50
				$('.returnTop').fadeIn(100);
			}
			else{
				$('.returnTop').fadeOut(100);
			}
		});
	
	$('.returnTop').click(function(){	//点击的时候让body相对顶部为0
			$('body,html').animate({	//用animate且速度为300
			scrollTop:0
	},300);
	});
		
	$('.returnTop').hover(function(){		//鼠标放到上面的时候
		$('.returnTop-img').css('display','none');		//图片消失
		$('.returnTop span').show();					//文字出现
	},function(){							//鼠标移走执行相反操作
		$('.returnTop span').hide();
		$('.returnTop-img').show();
	}
	);
	//一键回顶部结束
	
});	

	
//浮动窗
var xin = true,
    yin = true;
var step = 1;
var delay = 10;
var $obj;
$(function() {
    $obj = $('.float img');
    var time = window.setInterval("move()", delay);
    $obj.mouseover(function() {
        clearInterval(time)
    });
    $obj.mouseout(function() {
        time = window.setInterval("move()", delay)
    });
});
 
function move() {
    var left = $obj.offset().left;
    var top = $obj.offset().top;
	
    var L = T = 0; //左边界和顶部边界
    var R = $(window).width() - $obj.width(); // 右边界
    var B = $(window).height() - $obj.height(); //下边界
	
	var xtop=top-$(window).scrollTop();
	
    //判断广告的4个边框有没有超出可视化范围!
    if (left < L) {
        xin = true; // 水平向右移动
		
    }
    if (left > R) {
        xin = false;
		
    }
    if (xtop < T) {
        yin = true;
    }
    if (xtop > B) {
        yin = false;
    }
	
    //根据有没有超出范围来确定广告的移动方向
    left += step * (xin == true ? 1 : -1);
    xtop  += step * (yin == true ? 1 : -1);
	
    // 给div 元素重新定位
    $obj.css({
        'top': xtop,
        'left': left
    })
	
}
 