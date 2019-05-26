$(function(){
    var oBtn = $('#menua0');
    var oContent = $('#menua');
    
    oBtn.hover(function(){
      oContent.slideToggle();
     });
});
$(function(){
  var oBtn = $('#menub0');
  var oContent = $('#menub');
  
  oBtn.hover(function(){
    oContent.slideToggle();
   });
});
$(function(){
  var oBtn = $('#menuc0');
  var oContent = $('#menuc');
  
  oBtn.hover(function(){
    oContent.slideToggle();
   });
});
$(function(){
  var oBtn = $('#menud0');
  var oContent = $('#menud');
  
  oBtn.hover(function(){
    oContent.slideToggle();
   });
});
$(function(){
  var oBtn = $('#menue0');
  var oContent = $('#menue');
  
  oBtn.hover(function(){
    oContent.slideToggle();
   });
});
$(function(){
  var oBtn = $('#menuf0');
  var oContent = $('#menuf');
  
  oBtn.hover(function(){
    oContent.slideToggle();
   });
});

$(function(){
  var ali=$('.tab-title li') ;
  var aul=$('.tab-content2');
  ali.click(function(){
   $(this).addClass('tab-click').siblings().removeClass('tab-click');
   var index=$(this).index(); 
   aul.eq(index).show().siblings().hide();
  });
});
