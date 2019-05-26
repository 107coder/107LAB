
$('.caiji > li').hover(function() {
		$('.cai1').stop(false, true);
		if($(this).index==1)
			$('.caiji>li').eq(0).removeClass('choosed');
		$(this).children('.cai1').slideDown('slow');
	}, function() { 
		$(this).children('.cai1').slideUp(150);
		$('.caiji>li').eq(0).addClass('choosed');
	}); 

