$(function(){

    /**
     * 下拉菜单
     */
    var nav = $(".header-nav-list");
    var subNav = $(".header-nav-list ol");
    $('.header-nav-list').eq(0).addClass("current");
    $('.header-nav-list').eq(1).removeClass("current");
    nav.hover(function(){
        subNav.stop(false,true);
        $(this).addClass("current").siblings().removeClass('current');
        $(this).find(".header-nav-list-child").slideDown("slow");
        $(".header-nav-list-child li").hover(function(){
           $(this).css("background-color","#3C93ED");
        },function(){
            $(this).css("background-color","#39A4DB");
        });
        
    },function(){
        $(this).removeClass("current");
        $(this).find(".header-nav-list-child").slideUp(200);
        $('.header-nav-list').eq(0).addClass("current");
    });
    
    
    /**
     * 轮播图
     */
    var imgUl=$('.bootstarp-img ul');
    var imgLi=$('.bootstarp-img ul li');
    var imgPoint=$('.bootstarp-choose ol li');
    var aImg=$('.bootstarp-img ul li img');
    var imgWidth=aImg.width();
    var imgLength=imgLi.length;
    var index1=0;    //用来控制图片
    var index2=0;   //用来控制焦点
    var timeID=null;

    //轮播图执行滚动
    function bootstarp(){
        if(index1>=imgLength-1){
            imgLi.eq(0).css({
                'position':'relative',
                'left':imgLength*imgWidth
            });
            index2=0;
        }
        else{
            index2++;
        }
        index1++;

        imgUl.animate({
            left:-index1*imgWidth
        },300,function(){
            if(index1==4){
                imgLi.eq(0).css('position','static');
                imgUl.css('left',0);
                index1=0;
            }
        });
        //给下面的焦点加样式
        imgPoint.eq(index2).addClass('point-current')
        .siblings().removeClass('point-current');
    }
    //点击焦点的方法
    function pointClick(){
        clearInterval(timeID);
        index2=$(this).index();
        index1=index2;
        imgPoint.eq(index2).addClass('point-current')
        .siblings().removeClass('point-current');
        imgUl.animate({
            left:-index1*imgWidth
        },500);
        timeID=setInterval(bootstarp,4000);
    }

    clearInterval(timeID);
    //自行滚动
    timeID=setInterval(bootstarp,4000);
    //点击焦点执行的滚动
    imgPoint.click(pointClick);

    //当鼠标移到轮播图上时停止滚动，移开后继续滚动
    imgUl.hover(function(){
        clearInterval(timeID);
    }
    ,function(){
        clearInterval(timeID);
        timeID=setInterval(bootstarp,4000);
    });

    /**
     * 小图片切换
     */
    var smallImg=$('.main-content-pic img');
    var smallImgOl=$('.main-content-pic ol li');
    var _index=0;
    var timer=null;

    //图片淡入淡出切换
    function fadeSwitch(){
        if(_index==0){
            smallImg.eq(1).fadeOut(0,function(){
                smallImg.eq(1).siblings().fadeIn(300);
            })
            _index=1;
        }
        else{
            smallImg.eq(0).fadeOut(0,function(){
                smallImg.eq(0).siblings().fadeIn(300);
            })
            _index=0;
        }

        
        //给焦点添加样式
        smallImgOl.eq(_index).addClass('ol-current')
        .siblings().removeClass('ol-current');
    }
    //点击焦点
    clearInterval(timer);
    //自动切换
    timer=setInterval(fadeSwitch,2000);
    //鼠标点击焦点执行切换
    smallImgOl.click(function(){
        clearInterval(timer);
    });
    
    smallImgOl.click(fadeSwitch);

    //鼠标移入图片放大
    smallImg.hover(function(){
        $(this).animate({
            top: '-150px',
            left: '-200px',
            width: '800px',
            height: '600px'
        },300); 

    },function(){
        $(this).animate({
            top: '0px',
            left: '0px',
            width: '400px',
            height: '300px'
        },300); 
        }
    );


    /**
     * 鼠标移入移出字体变颜色
     */
    var character1=$('.main-content>div>h3, .main-content>div>a>h3, .main-content>div>div>ul>li,.main-content>div>div>ul>li>a, .content-list ul li a, .nowposition a');
    
    character1.hover(function(){
        $(this).addClass('hover');
    },function(){
        $(this).removeClass('hover');
    })
    

    /**
     * tab标签页
     */
    var tabTitle=$('.main-content-tab>ul>li');
    var tabContent=$('.main-content-tab-detail ul');
    var timeDelay=null;

    tabTitle.hover(function(){
        tabThis=$(this);
        tabDelay=setTimeout(function(){
            tabIndex=tabThis.index();
            tabThis.addClass('current')
            .siblings().removeClass('current');
            tabContent.eq(tabIndex).fadeIn(500)
            .siblings().hide();
        },200)
    },function(){
        clearTimeout(timeDelay);
    });

    /**
     * 回到顶部
     */
     var toTop=$('.totop');
     toTop.css('display','none')
     $('.totop').hover(function(){
         $('.totop a img').css('display','none');
         $('.totop').css('background-color','#333')
     },function(){
        $('.totop a img').css('display','block');
        $('.totop').css('background-color','#e3e5e6')
     })
     //监听滚动事件获取高度
     $(window).scroll(function(event){
        var oTop = document.body.scrollTop==0?
        document.documentElement.scrollTop:document.body.scrollTop;
         if(oTop>=300){
             toTop.css('display','block')
             
         }
         else{
            toTop.css('display','none');
         }
         
    });
    toTop.click(function(){
            $('body,html').animate({scrollTop:0},500);
         });

        /**
         * 浮动窗口
         */
        var iSpeedX=1;
        var iSpeedY=1;
        var oDiv=$('.float');
        var viewWidth=$(window).width();
        var viewHeight=$(window).height();
        var timer2=null;
        var l=oDiv.position().left;
        var t=oDiv.position().top;
        $(window).scroll(function(){
            var sTop=document.body.scrollTop==0?
            document.documentElement.scrollTop:document.body.scrollTop;
            })
        function startMove1(){
            
            //alert(oDiv.css("left"));//带单位
                  //alert($(window).height())
                  l+=iSpeedX;
                  t+=iSpeedY;
                oDiv.animate({    
                    left: l+'px',
                    top: t+'px'
            },10);
            
            if(l>=(viewWidth-oDiv.width())){
                iSpeedX*=-1;
                l=viewWidth-oDiv.width();
            }
            else if(l<=0){
                iSpeedX*=-1;
                l=0;
            }
            if(t>=(viewHeight-oDiv.height())){
                iSpeedY*=-1;
                t=viewHeight-oDiv.height();
            }
            else if(t<=0){
                iSpeedY*=-1;
                t=0;
            }
        
        }
    timer2=setInterval(startMove1,10)
        //鼠标停留停止浮动
        oDiv.hover(function(){
            clearInterval(timer2);
        }
        ,function(){
            clearInterval(timer2);
            timer2=setInterval(startMove1,10);
        });
    
    /**
     * 用户信息
     */
    var $cur_user=$('.cur_user')[0].innerHTML;
    
});
