$(function(){
    var oBtn=$('.c7');
    oBtn.click(function(){
        $(this).next('ul').slideToggle('ul').siblings('ul').slideUp();
        $(this).addClass('c71').siblings().removeClass('c71');
    }); 
});

    