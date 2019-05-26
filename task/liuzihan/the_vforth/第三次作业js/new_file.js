$(function(){
    var fli=$('.test li');
	var oul=$('.tu1');
	var now=0;
	var now1=0;
	setInterval(function(){
		 if(oul.css('left')>'-6400')
		{
			oul.css('left','0');			
		}
		 oul.animate({'left':'+=-1600'},1000);
		},3000 );
	fli.click(function(){
		var index=$(this).index();
		$(this).addClass('current').siblings().removeClass();
		oul.animate({'left':'-1600'*index},500);
		now1=index;
		});
		setInterval(function(){
		now1++;
		if(now1>3){
			now1=0;
		}
			fli.eq(now1).addClass('current').siblings().removeClass();
	    },3000 );
   //轮播图	
	//下拉菜单
	var fol=$('.heade3 ul li ');
	var foll=$('.heade3 ul li ul')
	fol.hover(function(){
		$(this).addClass('current1').siblings().removeClass();
        $(this).children('ol').slideDown();
	},function(){
		$(this).children('ol').hide();
	});	
	fol.mouseout(function(){
		$(this).addClass('current1').siblings().removeClass();
		});
	var fool=$('.heade3 ul li')
	fool.click(function(){
		$(this).addClass('xiala').siblings().removeClass();
	});
	//小轮播
	var content_click=$('.content-tu2 li');
	var fol=$('.content-tu1');
	var inter=setInterval(function(){		
		fol.css('left','+=-440');
			if(fol.css('left')>'-800')
		    fol.css('left','0');
			now+=1;
			if(now>=2)
			now=0;
			 content_click.eq(now).addClass('current3').siblings().removeClass();
			 },3000);
			fol.mouseover(function(){
				 clearInterval(inter);					 
			})
		fol.mouseout(function(){
			inter=setInterval(function(){
				now++;
				if(now>=2)
					now=0;
				fol.css('left','+=-440');
					if(fol.css('left')>'-800')
				    fol.css('left','0');															
					 content_click.eq(now).addClass('current3').siblings().removeClass();								
	},3000);});
	    content_click.click(function(){
			var index1=$(this).index();
			fol.animate({'left':'-440'*index1},500);
			now=index1;
			content_click.eq(now).addClass('current3').siblings().removeClass();
		})
	
	
		
		
		
		//tab标签页
		var tab=$('.tabfirst ul li');
		var tabt=$('.tablast div');
		tab.mouseover(function(){
			var index=$(this).index();
			$(this).addClass('current3').siblings().removeClass();
			tabt.eq(index).show().siblings().hide();
		});
	//返回顶部
	var top=$('.top')
	var top1=$('.top1');
	var top2=$('.top2');
	var all=$('.all')
 	top.mouseover(function(){
 		$('.top2').show();
 		('.top1').hide();
 	});
 	top.mouseout(function(){
 		$('.top2').hide();
		('.top1').show();
 	}); 	
    $(".top").hide();
 
    $(function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 100) {
                $(".top").fadeIn(00);
            }
            else {
                $(".top").fadeOut(500);
            }
        });
        $(".top").click(function() {
            $('body,html').animate({
                scrollTop: 0
            },
            200);
            return false;
        });
    });
});