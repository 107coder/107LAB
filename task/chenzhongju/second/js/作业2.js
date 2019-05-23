$(function () {
    var oul = $('#a51 ul');
    var oulHtml = oul.html();
    oul.html(oulHtml + oulHtml);
    var ali = $('#a51 ul li');
    var aliwidth = ali.eq(0).width();
    var alisize = ali.size();
    var ulwidth = aliwidth * alisize;
    oul.width(ulwidth);
    var speed = 2;
    function slider() {
        if (speed < 0) {
            if (oul.css('left') == -ulwidth /4 + 'px') {
                oul.css('left', 0);
            }
            oul.css('left', '-=20px')
        }
        if (speed > 0) {
            if (oul.css('left') == '0px') {
                oul.css('left', -ulwidth / 4 + 'px');
            }
            oul.css('left', '+='+20+'px')
        }
    }
    timeid = setInterval(slider, 3000)
    $('#left').click(function () {
        speed = -2;
    });
    $('#right').click(function () {
        speed = 2;
    });

});