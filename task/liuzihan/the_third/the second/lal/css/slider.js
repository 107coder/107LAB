
$(function(){
	var ali = $('.notice-tit ul li');
	var aDiv=$('.notice-con div');
	ali.click(function(){
		$(this).addClass('current').siblings().removeClass('current');
		var index= $(this).index();
		aDiv.eq(index).show().siblings().hide();
	})

	$('.up1').click(function(){
   		$('.shdow').show();
   		$('.tp1').show();
   		$('.tp1-tit').click(function(){
   			$('.shdow').hide();
   			$('.tp1').hide();
   		});
   	});
   	$('.up2').click(function(){
   		$('.shdow').show();
   		$('.tp2').show();
   		$('.tp2-tit').click(function(){
   			$('.shdow').hide();
   			$('.tp2').hide();
   		});
   	});
   	$('.up3').click(function(){
   		$('.shdow').show();
   		$('.tp3').show();
   		$('.tp3-tit').click(function(){
   			$('.shdow').hide();
   			$('.tp3').hide();
   		});
   	});
   	$('.up4').click(function(){
   		$('.shdow').show();
   		$('.tp4').show();
   		$('.tp4-tit').click(function(){
   			$('.shdow').hide();
   			$('.tp4').hide();
   		});
   	});
   	$(".t1").click(function(){
   		$(".t1").css('background-color','#EC6B0E')
   		$(".t2").css('background-color','#F5AA02')
   		$(".t3").css('background-color','#F5AA02')
   		$(".spe-height").slideToggle("slow");
   		$(".spe").hide();
   		$(".spe-width").hide();
   	})
   	$(".t2").click(function(){
   		$(".t2").css('background-color','#EC6B0E')
   		$(".t1").css('background-color','#F5AA02')
   		$(".t3").css('background-color','#F5AA02')
   		$(".spe").slideToggle("slow");
   		$(".spe-height").hide();
   		$(".spe-width").hide();
   	})
   	$(".t3").click(function(){
   		$(".t3").css('background-color','#EC6B0E')
   		$(".t2").css('background-color','#F5AA02')
   		$(".t1").css('background-color','#F5AA02')
   		$(".spe-width").slideToggle("slow");
   		$(".spe").hide();
   		$(".spe-height").hide();
   	})
});
   	$(function(){
   	var oul=$('.button');
    setInterval(function(){
    	oul.css('left','+=-1620px');
    	if(oul.css('left')>='-5800px'){
    		oul.css('left','-30px');
    	}
    },2000);
});


