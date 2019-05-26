$(function(){

//注销
    
	
//操作用户
	$('.user').click(function(){
		$('.doUser').show();
		$('.doAdmin').hide();
		$('.doNews').hide();
		$('.doIntroduce').hide();
    


	});
	$('.addUser').click(function(){
       $('.addUserForm').fadeIn(400);
       $('.back').css('opacity','0.3');
       

    });
    $('.addUserForm img').click(function(){
        $('.addUserForm').fadeOut(400);
        $('.back').css('opacity','1');
    });
    $('.update').click(function(){
    	$(".updateUserForm").show();
    });    
	



//操作管理员
    $('.admin').click(function(){
		$('.doAdmin').show();
		$('.doUser').hide();
		$('.doNews').hide();
		$('.doIntroduce').hide();
	});
	$('.addAdmin').click(function(){
       $('.addAdminForm').fadeIn(400);
       $('.back').css('opacity','0.3');

    });
    $('.addAdminForm img').click(function(){
        $('.addAdminForm').fadeOut(400);
        $('.back').css('opacity','1');
    });    
       
  
//操作新闻
	$('.news').click(function(){
		$('.doNews').show();
		$('.doAdmin').hide();
		$('.doUser').hide();	
		$('.doIntroduce').hide();
	});
	$('.addNews').click(function(){
       $('.addNewsForm').fadeIn(400);
       $('.back').css('opacity','0.3');

    });
    $('.addNewsForm img').click(function(){
        $('.addNewsForm').fadeOut(400);
        $('.back').css('opacity','1');
    });    


    //操作中心简介
	$('.introduce').click(function(){
		$('.doIntroduce').show();
		$('.doAdmin').hide();
		$('.doUser').hide();	
		$('.doNews').hide();
	});
	$('.addWorkRange').click(function(){
       $('.addWorkRangeForm').fadeIn(400);
       $('.back').css('opacity','0.3');

    });
    $('.addWorkRangeForm img').click(function(){
        $('.addWorkRangeForm').fadeOut(400);
        $('.back').css('opacity','1');
    });    
	



});