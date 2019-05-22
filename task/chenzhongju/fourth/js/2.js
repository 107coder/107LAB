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