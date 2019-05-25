$(document).ready(function(){
	/*  下拉菜单  */
	$('.nav1>li').hover(function(){
		$('.nav2').stop(false,true);
		$(this).children('.nav2').slideDown('slow');
	},function(){
		$(this).children('.nav2').slideUp(100);
	});
});