$(function () {
    var nav_list = $(".banner_1 li");
    var nav_list_ul = $(".banner_1 li ul");

    nav_list.hover(function () {
        nav_list_ul.stop(false, true);
        $(this).addClass("current");
        $(this).find(".banner_2").slideDown("slow");

    }, function () {
        $(this).removeClass("current");
        $(this).find(".banner_2").slideUp(200);
    });
})
$(function () {
    var imgOl = $(".banner-image ul");
    var imgLi = $(".banner-image ul li");
    var imgPoint = $(".banner-image ol li");
    var img = $(".banner-image img");
    var imgWidth = img.width();
    var imgLength = imgLi.length;
    var timeId = null;
    var banner_prev = $(".prev");
    var banner_next = $(".next");
    var _index = 0;
    var _index2 = 0;  
    function banner(){
        if(_index>=imgLength-1){
            imgLi.eq(0).css({
                'position':'relative',
                'left':imgLength*imgWidth
            });
            _index2=0;
        }else{
            _index2++;
        }
        _index++;

        imgOl.animate({left:-_index*imgWidth},300,function(){
            if(_index == 4){
                imgLi.eq(0).css('position','static');
                imgOl.css('left',0);
                _index = 0;
            }
        });
        imgPoint.eq(_index2).addClass("current_2").siblings().removeClass('current_2');

    }
      function banner_click(){
        clearInterval(timeId);             

        _index2 = $(this).index();
        _index = _index2;    

        imgPoint.eq(_index2).addClass("current_2").siblings().removeClass('current_2');
        imgOl.animate({left:-_index*imgWidth},500);
        timeId = setInterval(banner,4000); 
    }   

    clearInterval(timeId);     
    timeId = setInterval(banner,4000);
    imgPoint.click(banner_click);

    banner_prev.click(function(){
        clearInterval(timeId);
        if(_index<=0){
            imgLi.eq(imgLength-1).css({
                'position':'relative',
                'left':-imgWidth*4
            });
            _index2 = imgLength-1;
        }else{
            _index2--;
        }
        _index--;
        imgOl.animate({left:-_index*imgWidth},500,function(){
            if(_index == -1){
                imgLi.eq(imgLength-1).css('position','static');
                imgOl.css('left',-3*imgWidth);
                _index = 3;
            }
            
        });
        imgPoint.eq(_index2).addClass("current_2").siblings().removeClass('current_2');

        timeId = setInterval(banner,4000);
    });
    banner_next.delay(300).click(function(){

        clearInterval(timeId);
        banner();
        timeId = setInterval(banner,4000);
    });
    $(".image-container").hover(function(){
        clearInterval(timeId);
    },function(){
        clearInterval(timeId);
        timeId = setInterval(banner,4000);  
    });
   
});
$(function () {
    var time_ID = null;
    var u_li = $('.announce-image ul li');
    var b_li = $('.announce-image ol li');
    var _now2 = 0;
    b_li.click(function () {
        clearInterval(time_ID);
        _now2 = $(this).index();
        $(this).addClass("current_3").siblings().removeClass();
        u_li.eq(_now2).fadeIn(600).siblings().fadeOut(600);
        showImg();
    });
    function showImg() {
        time_ID = setInterval(function () {
            _now2++;
            if (_now2 == 2)
                _now2 = 0;
            u_li.eq(_now2).fadeIn(600).siblings().fadeOut(600);
            b_li.eq(_now2).addClass("current_3").siblings().removeClass();
        }, 4000);
    }
    showImg();
    u_li.hover(function(){
 $(this).find("img").animate({
     "width":"800px",
     "height":"600px",
     "margin-left":"-200px",
     "margin-top":"-200px"
 },500);
},function(){
 $(this).find("img").animate({
     "width":"400px",
     "height":"300px",
     "margin-left":"0px",
     "margin-top":"0px"
 },500);});

});
$(function(){
    var ali=$('.tab-title li') ;
    var aul=$('.tab-content2');
    ali.hover(function(){
        index = $(this).index();
     $(this).addClass('tab-click').siblings().removeClass('tab-click');
     aul.eq(index).show().siblings().hide();
    });
 });
 $(function()
 {
     var top=$('#to_top');
     var a=$('#to_top a');
     top.hover(function(){
         a.addClass('none').siblings().removeClass('none');
     })
 })
