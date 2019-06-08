$(function(){
	var oul=$('.slider ul');
	var numLi=$('.slider ol li');
	var aliWidth=$('.slider ul li').eq(0).width();
	var _now=0;
	
	var oBtn=$('.second span');
	var oContent=$('.second ul');
	
	numLi.click(function(){
		var index=$(this).index();
		$(this).addClass('current').siblings().removeClass();
		oul.animate({'left':-aliWidth*index},500);
	});
	
	oBtn.click(function(){
		if(oContent.is(':visible')){
			oContent.slideUp();
		}else{
			oContent.slideDown();
		}
	});
	
	setInterval(function(){
		if(_now==numLi.size()-1){
			_now=0;
		}else{
			_now++;
		}
		numLi.eq(_now).addClass('current').siblings().removeClass();
		oul.animate({'left':-aliWidth*_now},500);
	},1500);
});
