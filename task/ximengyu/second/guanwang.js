$(function () {
    var oBtn = $('h3');
    oBtn.click(function () {
        $(this).next('ul').slideToggle().siblings('ul').slideUp();
    });
});
$(function() {
    var menu= $('.menu');
    menu.hover(function (){
        $(this).children('ul').show();
    },function(){
        $(this).children('ul').hide();
    });
});
$(function () {
    var ali = $('.title ul li');
    var aDiv = $('.tabconcent div');
    ali.mouseover(function () {

        $(this).addClass('_current').siblings().removeClass('_current');

        var index = $(this).index();

        aDiv.eq(index).show().siblings().hide();
    });
});
$(function () {
    var oul = $('.container ul');
    var numli = $('.container ol li');
    var aliwidth = $('.container ul li').eq(0).width();


    numli.click(function () {
        var index = $(this).index();
        $(this).addClass('current').sibilings().removeClass();
        oul.animate({ 'left': -aliwidth * index }, 500);
    });
    // setInterval(function(){
    //  if(_now==numli.size()-1){
    //      _now=0;
    //  }else{
    //      _now++;
    //   }
    //   _now++;
    // numli.eq(_now).addClass('current').sibilings().removeClass();
    // oul.animate({'left':aliwidth*_now},500);
    //  },1500);
});


$(function () {
    var oul = $('.icon ul');
    var oulHtml = oul.html();
    oul.html(oulHtml + oulHtml)

    setInterval(function () {
        oul.css('left', '+=-2px');
    }, 30);
});
$(function () {
    var smallimg = $('.picture ul li');

    smallimg.mouseover(function () {
        $(this).addClass('pcurrent').sibilings().removeClass('pcurrent');
        var thissrc = $(this).children('img').attr('src');
        $('.photo img').attr('src', thissrc);
    });
});
$(function () {
    $('.one img').click(function () {

        $(this).toggleClass('min');
        $(this).toggleClass('max');
    });
});
$(function () {
    var photo = $('.one img');
    $(this).animate({
        left: '100px',
        height: '300px',
        width: '400px',
    });
});
$(function () {
    var show = $('#showone');
    var hide = $('#hideone');
    var close = $('#hideone span');
    show.click(function () {
        hide.show();
    });
    close.click(function () {
        hide.hide();
    });
});