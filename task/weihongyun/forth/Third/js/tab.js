$(function(){
	var ali = $('.tabTitle ul li');
	var aDiv = $('.tabContent div');
	var timeId = null;

	ali.mouseover(function(){

		var _this = $(this);
		//setTimeout();的作用是延迟某一段代码的执行
		timeId = setTimeout(function(){

			//$(this)方法属于哪个元素，$(this)就是指哪个元素
			_this.addClass(function(){
				return 'current';
			}).siblings().removeClass();


			//如果想用一组元素控制另一组元素的显示或者隐藏，需要用到索引
			var index = _this.index();

			aDiv.eq(index).show().siblings().hide();


		},300);
		
			
	}).mouseout(function(){
		//clearTimeout的作用是清除定时器
		clearTimeout(timeId);
	});

	

	
	
});