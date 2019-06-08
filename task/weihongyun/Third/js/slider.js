$(function() {

	var imgOl = $(".slide_img ul");
	var imgLi = $(".slide_img ul li");
	var imgPoint = $(".slide_img ol li");
	var img = $(".slide_img img");
	var imgWidth = img.width();
	var imgLength = imgLi.length;
	var timeId = null;
	var _index = 0; //用来控制图片
	var _index2 = 0; //用来控制焦点
	var slide_timeId = null;
//alert(imgLength);
	function slide() {
		if(_index >= imgLength - 1) {
			imgLi.eq(0).css({
				'position': 'relative',
				'left': imgLength * imgWidth
			});
			_index2 = 0;
		} else {
			_index2++;
		}
		_index++;

		imgOl.animate({
			left: -_index * imgWidth
		},300, function() {
			if(_index == 4) {
				imgLi.eq(0).css('position', 'static');
				imgOl.css('left', 0);
				_index = 0;
			}
		});
		//给下面的焦点加样式
		imgPoint.eq(_index2).addClass("point_current").siblings().removeClass('point_current');

	}
	// 点击焦点的方法
      function slide_click(){
        clearInterval(timeId);              //清除定时器    

        _index2 = $(this).index();
        _index = _index2;                   //将两个计数器同步

        imgPoint.eq(_index2).addClass("point_current").siblings().removeClass('point_current');
        imgOl.animate({left:-_index*imgWidth},500);
        timeId = setInterval(slide,4000);  //再重新打开定时器 
    }   

    clearInterval(timeId);     
    // 自动滚动的方法
    timeId = setInterval(slide,4000);
    // 点击焦点执滚动的执行
    imgPoint.click(slide_click);
 //给下面的焦点加样式
        imgPoint.eq(_index2).addClass("point_current").siblings().removeClass('point_current');

        timeId = setInterval(slide,4000);
    });
	//当鼠标移到轮播图上时会停止，移开后继续滚动
    $("#slide").hover(function(){
        clearInterval(timeId);
    },function(){
        clearInterval(timeId);
        timeId = setInterval(slide,4000);  
//对小图片部分轮播
	var
    
    
    
    
    
    
    
});

