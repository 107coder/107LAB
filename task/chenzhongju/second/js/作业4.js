$(function () {
    var oul = $('#a42 ul');
    var numli = $('#a42 ol li');
    var ali = $('#a42 ul li')
    var aliWidth = $('#a42 ul li').eq(0).width();
    var _now = 0;
    var _now2 = 0;
    var timeid;
    var aimg=$('#a42 ul img');
    var op=$('#a42 p') ;
    numli.click(function () {
        var index = $(this).index();
        _now = index;
        _now2=index;
        var imgalt=aimg.eq(_now).attr('alt');
        op.html(imgalt);
        $(this).addClass('c6').siblings().removeClass();
        oul.animate({ 'left': -aliWidth * index }, 1000);
    });
    function slider() {
        if (_now == numli.size() - 1) {
            ali.eq(0).css({
                'position': 'relative',
                'left': oul.width()
            });
            _now = 0;
        } else {
            _now++;
        }
        _now2++;
        numli.eq(_now).addClass('c6').siblings().removeClass();
        var imgalt=aimg.eq(_now).attr('alt');
        op.html(imgalt);
        oul.animate({ 'left': -aliWidth * _now2 }, 1000, function () {
            ;
            if (_now == 0) {
                ali.eq(0).css('position', 'static');
                oul.css('left', 0);
                _now2=0;
            }
        });
    }
    timeid = setInterval(slider, 2000)
    $('#a42').mouseover(function () {
        clearInterval(timeid);
    });
    $('#a42').mouseout(function () {
        timeid = setInterval(slider,2000);

        });

    });