$(function(){
	$('.n1 > li').hover(function() {
		$(this).children('.n2').slideDown('slow');
	}, function() {
		$(this).children('.n2').slideUp(200);
	});
});
