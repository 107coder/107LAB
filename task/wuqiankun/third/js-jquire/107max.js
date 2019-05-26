$(function(){
    
    //下拉菜单
    var nav_menu = $(".nav-menu");
    var nav_list_a = $(".nav_menu_ul a");
    var spe_nav = $(".spe-nav");
    nav_menu.hover(function(){

        $(this).addClass('current').siblings().removeClass();
        
        $(this).find(".nav_menu_ul").slideDown("slow");
 
    },function(){
        //滑出下拉菜单时的变化
        if(nav_list_a.hasClass("current")==false){
            spe_nav.addClass('current').siblings().removeClass();
        }
        
        $(this).find(".nav_menu_ul").slideUp(150);
    });
    
    
        //spe_nav.addClass('current').siblings().removeClass();
        
    

    //轮播图
    //tap 标签页 心理百科
    var aLi = $('.title ul li');
    var tit_con_ul = $('.tit-con ul');
    aLi.mouseover(function(){

        $(this).addClass('color-spe').siblings().removeClass();

        var index = $(this).index();

        tit_con_ul.eq(index).show().siblings().hide();
        
    });
    //回到顶部
    //var browserScrollTop = $(window).scrollTop();//窗口滚动条的变化
	//var browserScrollLeft = $(window).scrollLeft();

     
});