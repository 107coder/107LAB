function $$(id) {
        return document.getElementById(id);
    }
$('.caiji > li').hover(function() { 
		$('.cai1').stop(false, true);
		if($(this).index==1)
			$('.caiji>li').eq(0).addClass('choosed');
		$(this).children('.cai1').slideDown('slow');
	}, function() { 
		$(this).children('.cai1').slideUp(150);
		$('.caiji>li').eq(0).removeClass('choosed');
	}); 
    
//  function  chuxian(li){
//  	var xiao = li.getElementsByTagName("ol")[0];
//  	xiao.style.display = "block";
//  	xiao.style.transition = "5s";
//  }
//  function xiaoshi(li){
//  	var da = li.getElementsByTagName("ol")[0];
//  	da.style.display = "none";
//  	da.style.transition = "5s";
//  }

   
//  var gundong=$("gundong"),
//      img=gundong.getElementsByClassName('img'),
//      buttons=.getElementsByTagName('span'),
//      pi=0,
//      dada=$("dada"),
// 
//  function render(index){
//      for(var i=0;i<img.length;i++){
//          img[i].style.opacity="0";
//          img[i].style.zindex="1";
//      }
//      img[index].style.zindex="2";
//      img[index].style.opacity="1";
//  }
//  function bt_listen(event){
//      if (event.target&&event.target.tagName.toLowerCase()=='span') {
//          var index=event.target.getAttribute('index');
//          tu=index;
//          render(tu);
//          showButton();
//      }
//  }
//  function showButton(){
//      for(var i=0;i<buttons.length;i++){
//          buttons[i].className=buttons[i].className.replace(/\s*on/,"");
//      }
//      buttons[tu].className+=" on";
//  }
//  function play(){
//      timer=setInterval(function(){
//          if (tu==3) {
//              tu=0;
//          }else{
//              tu++;
//          }
//          render(tu);
//          showButton();
//      },4000);
//  }
//  function stop(){
//      clearInterval(timer);
//  }   
//  function start(){
//      buttonGroup.addEventListener('click',bt_listen,false);
//      container.addEventListener('mouseenter',stop,false);
//      container.addEventListener('mouseleave',play,false);
//      play();
//  }   
//  start();
     var he=$$("he"),
        hes=he.getElementsByTagName('span'),
        gunfu=$$("gunfu"),
        imgs=gunfu.getElementsByTagName('img'),
        tu=0,
        gundong=$$("gundong"),
        timer;
    function render(index){
        for(var i=0;i<imgs.length;i++){
            imgs[i].style.opacity="0";
            imgs[i].style.zindex="1";
        }
        imgs[index].style.zindex="2";
        imgs[index].style.opacity="1";
    }
    function bt_listen(event){
        if (event.target&&event.target.tagName.toLowerCase()=='span') {
            var index=event.target.getAttribute('index');
            tu=index;
            render(tu);
            showButton();
        }
    }
    function showButton(){
        for(var i=0;i<hes.length;i++){
            hes[i].className=hes[i].className.replace(/\s*on/,"");
        }
        hes[tu].className+=" on";
    }
    function play(){
        timer=setInterval(function(){
            if (tu==1) {
                tu=0;
            }else{
                tu++;
            }
            render(tu);
            showButton();
        },4000);
    }
    function stop(){
        clearInterval(timer);
    }   
    function start(){
        he.addEventListener('click',bt_listen,false);
        gundong.addEventListener('mouseenter',stop,false);
        gundong.addEventListener('mouseleave',play,false);
        play();
    }   
    start();
    
    $('.o').mouseover(function(){
    	$('.o').css("background-color","#4289C9")
    	$('.o1').css("background-color","#ffffff")
    	$('.o2').css("background-color","#ffffff")
    	$('.xia1').fadeIn(700);
    	$('.xia2').fadeOut(5);
    	$('.xia3').fadeOut(5);
    });
    $('.o1').mouseover(function(){
    	$('.o1').css("background-color","#4289C9")
    	$('.o').css("background-color","#ffffff")
    	$('.o2').css("background-color","#ffffff")
    	$('.xia1').fadeOut(5);
    	$('.xia2').fadeIn(700);
    	$('.xia3').fadeOut(5);
    });
    $('.o2').mouseover(function(){
    	$('.o2').css("background-color","#4289C9")
    	$('.o1').css("background-color","#ffffff")
    	$('.o').css("background-color","#ffffff")
    	$('.xia1').fadeOut(5);
    	$('.xia2').fadeOut(5);
    	$('.xia3').fadeIn(700);
    });
    
    
   $('.anniu').click(function(){

   	$('.anniu').css("background-color","#4289C9")
   	$('.anniu2').css("background-color","#ffffff")
   	$('.gundong1').fadeIn(800);
   	$('.gundong2').fadeOut(800);
   	
   });
      $('.anniu2').click(function(){
   	$('.anniu2').css("background-color","#4289C9")
   	$('.anniu').css("background-color","#ffffff")
   	$('.gundong2').fadeIn(800);
   	$('.gundong1').fadeOut(800);
   	});
   	 $('.fudong').mouseover(function(){
   	$('.fudong1').hide();
    $('.fudong2').show();
   	});
     $('.fudong').mouseout(function(){
   	$('.fudong2').hide();
    $('.fudong1').show();
   	});
   
   	$(function(){
   		$(window).scroll(function(){
   			if($(window).scrollTop() > 650){
   				$('.fudong').fadeIn()
   			}else{
   				$('.fudong').fadeOut()
   			}
   		});
   	});
   	$(function(){
   		$('.fudong').click(function(){
   			$('body,html').animate({
   				scrollTop:0
   			},400);
   			return false;
   			});
   		});
   		
//  $(".caidan1>ul>li").mouseover(function(){
//  	$(".caidan1>ul>li>ol").animate({
//  		height:'down',
//  	});
//  	
//  });
//  $(".caidan1>ul>li").mouseout(function(){
//  	$(".caidan1>ul>li>ol").animate({
//  		height:'up',
//  	});
//  	
//  });
 var slider = $$("slider");
	var ul = slider.children[0].children[0];
	var ullis = ul.children;
	
	
	
	var ol = document.createElement("ol");
	slider.appendChild(ol);
	for(var i = 0;i<ullis.length;i++){
		var li = document.createElement("li");
		li.innerHTML = i+1;
		ol.appendChild(li);
	}
	ol.children[0].setAttribute("class","current");
	
	var ollis = ol.children;
	for( var i=0;i<ollis.length;i++){
		ollis[i].index=i;
		ollis[i].onclick = function(){
			for(var j =0;j<ollis.length;j++){
				ollis[j].removeAttribute("class");
			}
			ollis[this.index].setAttribute("class","current");
			animate(ul,-this.index*ullis[0].offsetWidth);
			
			Key = point =this.index;
		}
	}
	
	var leader = 0;
	function animate(obj,target){
		clearInterval(obj.timer);
		obj.timer = setInterval(function(){
			leader = leader + (target-leader)/10;
			obj.style.left = leader+"px";
		},10);
	}
	
	var timer = null;
	timer = setInterval(autoplay,2000);
	var key = 0;
	var point = 0;
	function autoplay(){
		
		key++;
		if(key >ullis.length-1){
			leader = 0;
			key = 0;
		}
		animate(ul,-key*ullis[0].offsetWidth);
		
		point++;
		if(point>ollis.length-1){
			point = 0;
		}
		for(var i=0;i<ollis.length;i++){
			ollis[i].removeAttribute("class");
		}
		ollis[point].setAttribute("class","current")
	}
	slider.onmouseover = function(){
		clearInterval(timer);
	}
	slider.onmouseout = function(){
		timer = setInterval(autoplay,2000);
	}
	
