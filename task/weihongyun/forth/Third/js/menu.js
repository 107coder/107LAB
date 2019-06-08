$(function(){

    var nav_list = $(".nav_list");
    var nav_list_ol = $(".nav_list ol");

    nav_list.hover(function(){
        nav_list_ol.stop(false,true);
        $(this).addClass("current");
        $(this).find(".nav_list_child").slideDown("slow");
 
    },function(){
        $(this).removeClass("current");
        $(this).find(".nav_list_child").slideUp(200);
    });
