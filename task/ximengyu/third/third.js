$(function(){
    var float=$(".float");
float.animate({left:"1500px",
top:"900px"
},20000)
float.mouseenter(function(){
float.stop();});
float.mouseout(function(){
float.animate({
    left:"1500px",
top:"900px"
  
},20000)});	





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
//////////////
var oul=$('.photo ul');
var numli=$('.photo ol li');
var aliwidth=$('.photo ul li').eq(0).width();
var _now=0;


numli.click(function(){
    var index=$(this).index();
    _now=index();
$(this).addClass("now").siblings().removeClass();
oul.animate({'left':-aliwidth*index},500);
});
setInterval(function(){
    if(_now==1)
    {
_now=0;
    }else{
        _now++;
    }
   
  numli.eq(_now).addClass("now").siblings().removeClass("now");
  oul.animate({'left':-aliwidth*_now},500);
},1500);
//////////////////
var oul1=$('.container ul');
var numli1=$('.container ol li');
var aliwidth1=$('.container ul li').eq(0).width();
var _now1=0;


numli1.click(function(){
    var index1=$(this).index();
    _now1=index();
$(this).addClass("current2").siblings().removeClass();
oul.animate({'left':-aliwidth1*index},700);
});
setInterval(function(){
    if(_now1==3)
    {
_now1=0;
    }else{
        _now1++;
    }
   
  numli1.eq(_now1).addClass("current2").siblings().removeClass("current2");
  oul1.animate({'left':-aliwidth1*_now1},1000);
},1500);

/////////////////////////
    var buttom=$('#buttom');
   buttom.hover(function(){
      buttom.html();
   },function(){
       buttom.html("回到顶部")
   })
    buttom.click(function(){
        $('html,body').animate({scrollTop:0},'slow');
    });



    var tap_title = $(".title ul li");
    var tap_content = $(".topic div");
    var tap_time = null;
    tap_title.hover(function(){

        tap_this = $(this);
        tap_time = setTimeout(function(){
            tap_index = tap_this.index();
            tap_this.addClass("current5").siblings().removeClass("current5");
            tap_content.eq(tap_index).fadeIn(500).siblings().hide();
        },200);
    },function(){
        clearTimeout(tap_time);






/*$(function(){
    var oul=$('.container ul');
    var numli=$('.container ol li');
    var aliwidth=$('.container ul li').eq(0).width();
   var _now=0;
  var timeId=null;

    numli.click(function(){
        var index=$(this).index();
        _now=index();
   $(this).addClass("current2").siblings().removeClass();
   oul.animate({'left':-aliwidth*index},500);
    });
    setInterval(function(){
        if(_now==3)
        {
    _now=0;
        }else{
            _now++;
        }
       
      numli.eq(_now).addClass('now').siblings().removeClass();
      oul.animate({'left':-aliwidth*_now},500);
    },1500);
});
});

*/})})
