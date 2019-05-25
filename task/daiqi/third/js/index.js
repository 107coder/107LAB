$(document).ready(function(){
	/*  ´óÂÖ²¥Í¼  */
	var oul = $('#banner ul');
	var oli = $('#banner ol li');
	var liwidth = $('#banner ul li').eq(0).width();
	var now1 = 0;
	
    oli.click(function(){
		var index = $(this).index();
		$(this).addClass('dot').siblings().removeClass();
		oul.animate({'left':-liwidth*index},500);
	});
	setInterval(function(){
		if(now1==oli.length-1){
			now1=0;
		}else{
			now1++;
		}
		oli.eq(now1).addClass('dot').siblings().removeClass();
		oul.animate({'left':-liwidth*now1},500);
	},3500);
});

$(document).ready(function(){
	/*  Ð¡ÂÖ²¥Í¼  */
	var uli = $('.content_img ul li');
	var num = $('.content_img ol li');
	var len = $('.content_img ul li').length;
	var now2 = 0;
	
	num.click(function(){
		var index1 = $(this).index();
		$(this).addClass('num').siblings().removeClass();
		uli.eq(index1).fadeIn(200).siblings().fadeOut(200);
	});
	setInterval(function(){
		if(now2==num.length-1){
			now2=0;
		}else{
			now2++;
		}
		uli.eq(now2).fadeIn(200).siblings().fadeOut(200);
		num.eq(now2).addClass('num').siblings().removeClass();
	},3500)
	uli.hover(function(){
		$(this).find('img').animate({
			"width":"800px",
			"height":"600px",
			"margin-left":"-200px",
			"margin-top":"-150px"
		},500);
		},function(){
		$(this).find('img').animate({
			"width":"400px",
			"height":"300px",
			"margin-left":"0",
			"margin-top":"0"
		})
	})
});

$(document).ready(function(){
	/*  tab±êÇ©  */
	var tul = $('.tab ul');
	var index = 0;
	var tit = $('.tit li');
	
	tit.hover(function(){
		index = $(this).index();
		tit.eq(index).addClass('current').siblings().removeClass();
		tul.eq(index).show().siblings().hide();
	});
});

$(document).ready(function goTopEx(){
	/*  ·µ»Ø¶¥²¿  */
    var obj=document.getElementById("goTopBtn");
    function getScrollTop(){
            return document.documentElement.scrollTop;
    }
    function setScrollTop(value){
            document.documentElement.scrollTop=value;
    }  
    window.onscroll=function(){getScrollTop()>0?obj.style.display="":obj.style.display="none";}
    obj.onclick=function(){
        var goTop=setInterval(scrollMove,10);
        function scrollMove(){
            setScrollTop(getScrollTop()/1.1);
            if(getScrollTop()<1)clearInterval(goTop);
        }
    }
});