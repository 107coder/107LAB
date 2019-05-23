$(function(){
   var ali=$('#a41 ul li') ;
   var aDiv=$('.tabcontent div');
   ali.click(function(){
    $(this).addClass('cu').siblings().removeClass('cu');
    var index=$(this).index(); 
    aDiv.eq(index).show().siblings().hide();
   });
});