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
    var speed = 2;
    numli.click(function () {
        var index = $(this).index();
        _now = index;
        _now2=index;
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
                _now2=0;
            }
            
        });
    }

    timeid = setInterval(slider, 2000)
    $('#a3').mouseover(function () {
        clearInterval(timeid);
    });
    $('#a3').mouseout(function () {
        timeid = setInterval(slider,2000);

        });
    });

    $(function () {
        var oul = $('#a51 ul');
        var oulHtml = oul.html();
        oul.html(oulHtml + oulHtml);
        var timeid = null;
        var ali = $('#a51 ul li');
        var aliwidth = ali.eq(0).width();
        var alisize = ali.size();
        var ulwidth = aliwidth * alisize;
        oul.width(ulwidth);
        var speed = 2;
        function slider() {
            if (speed < 0) {
                if (oul.css('left') == -ulwidth /2 + 'px') {
                    oul.css('left', 0);
                }
                oul.css('left', '-=50px')
            }
            if (speed > 0) {
                if (oul.css('left') == '0px') {
                    oul.css('left', -ulwidth / 2 + 'px');
                }
                oul.css('left', '+='+50+'px')
            }
        }
        timeid = setInterval(slider, 1500)
        $('#a512').click(function () {
            speed = -2;
        });
        $('#a511').click(function () {
            speed = 2;
        });
    
    });

    $(function(){
        var oBtn=$('.c7');
        oBtn.click(function(){
            $(this).next('ul').slideToggle('ul').siblings('ul').slideUp();
            $(this).addClass('c71').siblings().removeClass('c71');
        }); 
    });

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

        $(function(){
            var oBtn=$('#a521');
            var oclass=$('.c11');
            var oclose=$('.c8')
            oBtn.click(function(){
                oclass.show();
            });
            oclose.click(function(){
                oclass.hide();
            })
        })
        $(function(){
            var oBtn=$('#a522');
            var oclass=$('.c12');
            var oclose=$('.c8')
            oBtn.click(function(){
                oclass.show();
            });
            oclose.click(function(){
                oclass.hide();
            })
        })
        $(function(){
            var oBtn=$('#a523');
            var oclass=$('.c13');
            var oclose=$('.c8')
            oBtn.click(function(){
                oclass.show();
            });
            oclose.click(function(){
                oclass.hide();
            })
        })
        $(function(){
            var oBtn=$('#a524');
            var oclass=$('.c14');
            var oclose=$('.c8')
            oBtn.click(function(){
                oclass.show();
            });
            oclose.click(function(){
                oclass.hide();
            })
        })

        $(function(){
            var ali=$('#a41 ul li') ;
            var aDiv=$('.tabcontent div');
            ali.click(function(){
             $(this).addClass('cu').siblings().removeClass('cu');
             var index=$(this).index(); 
             aDiv.eq(index).show().siblings().hide();
            });
         });
    

