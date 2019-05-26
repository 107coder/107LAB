$(function(){
	var oul=$('.three ul');
	var ali=$('.three ul li');
	var nonli=$('.three ol li');
	var aliwidth=$('.three ul li').eq(0).width();
	var _now=0;  //控制数字样式计数器
	var _now2=0;  //控制图片运动距离的计数器
	var timeId=null;
	var prevBtn=$('.np .prev_img');
	var nextBtn=$('.np .next_img');

	
	nonli.click(function(){
		var index=$(this).index();
		_now=index;
		_now2=index;
		$(this).addClass('current').siblings().removeClass();
		oul.animate({'left':-aliwidth*index},500);
	});
	nextBtn.click(function(){
		if(oul.css('left')=='-3789.99px'){
			oul.css('left','0px');
		}
		oul.animate({'left':'-=1263.33px'},200);
	});
	prevBtn.click(function(){
		if(oul.css('left')=='0px'){
			oul.css('left','-3789.99px');
		}
		oul.animate({'left':'+=1263.33px'},200);
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
		oul.animate({'left':-aliwidth*_now2},500,function(){
		        if(_now==0){
			    ali.eq(0).css('position','static');
			    oul.css('left',0);
				_now2=0;
		    }
		});
	}
	timeId=setInterval(slider,2200);
	$('.three').mouseover(function(){
		clearInterval(timeId);
	});
	$('.three').mouseout(function(){
		timeId=setInterval(slider,2200);
	});
	
	//下拉菜单
	$("#sideMenu li ul").eq(0).slideDown();
	var num = 0;
	$("#sideMenu li h3").click(function(){
		num = $("#sideMenu li").index(this);						
		$(this).parent().children('ul').slideDown();
		$(this).parent().siblings().children('ul').slideUp();
		$(this).addClass("on");	
		$(this).parent().siblings().children('h3').removeClass("on");
	});
	
    
	//Tab切换
	var bli=$('four hd ul li');
	$(".four.hd ul li").mouseover(function() {
		$(this).addClass('on').siblings().removeClass('on');
	});
	
	/*picBtnTop 图片展示框 Begin*/
	var spli=('.sp li');
	$('.sp li').mouseover(function(){
		$(this).addClass('on1').siblings().removeClass('on1');
		var thisSrc=$(this).children().attr('src');
		$('.pic img').attr('src',thisSrc);
		
	});
	
	//弹出层
	 $(".mskeLayBg").height($(document).height());
    $(".mskeClaose").click(function() {
        $(".mskeLayBg,.mskelayBox").hide()
    });
    $(".msKeimgBox li").click(function() {
        $(".mske_html").html($(this).find(".hidden").html());
        $(".mskeLayBg").show();
        $(".mskelayBox").fadeIn(300)
    });
	
	/*
		图片滚动展示
	 */
	time = window.setInterval(function(){
		$('.prevnext.img').click();	
	},5000);
	$('.box').hover(function() {
		/* Stuff to do when the mouse enters the element */
		clearInterval(time);
	}, function() {
		/* Stuff to do when the mouse leaves the element */
		time = window.setInterval(function(){
			$('.prevnext.img').click();	
		},5000);
	});
	linum = $('.mainlist li').length;//图片数量
	w = linum * 250;//ul宽度
	$('.piclist').css('width', w + 'px');//ul宽度
	$('.swaplist').html($('.mainlist').html());//复制内容
	
	$('.prevnext.img').click(function(){
		
		if($('.swaplist,.mainlist').is(':animated')){
			$('.swaplist,.mainlist').stop(true,true);
		}
		
		if($('.mainlist li').length>4){//多于4张图片
			ml = parseInt($('.mainlist').css('left'));//默认图片ul位置
			sl = parseInt($('.swaplist').css('left'));//交换图片ul位置
			if(ml<=0 && ml>w*-1){//默认图片显示时
				$('.swaplist').css({left: '1000px'});//交换图片放在显示区域右侧
				$('.mainlist').animate({left: ml - 1000 + 'px'},'slow');//默认图片滚动				
				if(ml==(w-1000)*-1){//默认图片最后一屏时
					$('.swaplist').animate({left: '0px'},'slow');//交换图片滚动
				}
			}else{//交换图片显示时
				$('.mainlist').css({left: '1000px'})//默认图片放在显示区域右
				$('.swaplist').animate({left: sl - 1000 + 'px'},'slow');//交换图片滚动
				if(sl==(w-1000)*-1){//交换图片最后一屏时
					$('.mainlist').animate({left: '0px'},'slow');//默认图片滚动
				}
			}
		}
	})
	$('.og_prev').click(function(){
		
		if($('.swaplist,.mainlist').is(':animated')){
			$('.swaplist,.mainlist').stop(true,true);
		}
		
		if($('.mainlist li').length>4){
			ml = parseInt($('.mainlist').css('left'));
			sl = parseInt($('.swaplist').css('left'));
			if(ml<=0 && ml>w*-1){
				$('.swaplist').css({left: w * -1 + 'px'});
				$('.mainlist').animate({left: ml + 1000 + 'px'},'slow');				
				if(ml==0){
					$('.swaplist').animate({left: (w - 1000) * -1 + 'px'},'slow');
				}
			}else{
				$('.mainlist').css({left: (w - 1000) * -1 + 'px'});
				$('.swaplist').animate({left: sl + 1000 + 'px'},'slow');
				if(sl==0){
					$('.mainlist').animate({left: '0px'},'slow');
				}
			}
		}
	});    
	
	$('.og_prev,.og_next').hover(function(){
			$(this).fadeTo('fast',1);
		},function(){
			$(this).fadeTo('fast',0.7);
	});
	/* 滚动图片展示 Ended*/
});