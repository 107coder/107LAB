$(function(){
    var oBtn = $('.dog-img img');
    var maskImg = $('.mask-img');
    var onerror = $('.mask-img i');

});
var browserWidth = $(window).width();
var browserHeight = $(window).height();
var maskImgWidth = maskImg.outerWidth(true);
var maskImgHeight = maskImg.outerHeight(true);
var positionLeft = browserWidth/2 - maskImgWidth/2;
var positionTop = browserHeight/2 - maskImgHeight/2;
oBtn.click(function(){
    maskImg.show().animate({
        'left':positionLeft+'px',
        'top':positionTop+'px'
    },200);
});
$(window).resize(function(){
    browserWidth = $(window).width();
    browserHeight = $(window).height();
    positionLeft = browserWidth/2 - maskImgWidth/2;
    positionTop = browserHeight/2 - maskImgHeight/2;
    maskImg.animate({
        'left':positionLeft+'px',
        'top':positionTop+'px'
    },200);
});
onerror.click(function(){
    maskImg.hide();
})