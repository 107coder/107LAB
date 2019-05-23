$(function () {
    var oul = $('#a3 ul');
    var numli = $('#a31 ol li');
    var ali = $('#a3 ul li')
    var aliWidth = $('#a3 ul li').eq(0).width();
    var _now = 0;
    var _now2 = 0;
    var timeid;
    var aliwidth = ali.eq(0).width();
    var alisize = ali.size();
    var ulwidth = aliwidth * alisize;
    oul.width(ulwidth);
    numli.click(function () {
        var index = $(this).index();
        _now = index;
        _now2 = index;
        $(this).addClass('current').siblings().removeClass();
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
        numli.eq(_now).addClass('current').siblings().removeClass();
        oul.animate({ 'left': -aliWidth * _now2 }, 1000, function () {
            ;
            if (_now == 0) {
                ali.eq(0).css('position', 'static');
                oul.css('left', 0);
                _now2 = 0;
            }

        });
    }

    timeid = setInterval(slider, 3000)
    $('#a3').mouseover(function () {
        clearInterval(timeid);
    });
    $('#a3').mouseout(function () {
        timeid = setInterval(slider, 3000);

    });
    $('#a311').click(function () {
        if (_now == numli.size() + 1) {
            ali.eq(0).css({
                'position': 'relative',
                'left': oul.width()
            });
            _now = 0;
        } else {
            _now--;
        }
        _now2--;
        numli.eq(_now).addClass('current').siblings().removeClass();
        oul.animate({ 'left': -aliWidth * _now2 }, 1000, function () {
            ;
            if (_now == 0) {
                ali.eq(0).css('position', 'static');
                oul.css('left', 0);
                _now2 = 0;
            }
            if(_now<0)
            {
               _now=4;
               _now2=4;
            }

        });
    })
    $('#a312').click(function () {
        _now == numli.size() + 1;
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
        numli.eq(_now).addClass('current').siblings().removeClass();
        oul.animate({ 'left': -aliWidth * _now2 }, 1000, function () {
            ;
            if (_now == 0) {
                ali.eq(0).css('position', 'static');
                oul.css('left', 0);
                _now2 = 0;
            }

        });
    })
});
