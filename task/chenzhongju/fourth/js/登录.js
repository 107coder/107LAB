
    $(function(){
        var change = $('.name4');
        change.hover(function(){
            this.eq(index).addClass('current').siblings().removeClass();
        });
    });