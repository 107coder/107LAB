//轮播图
let oBanner = document.getElementsByClassName("banner")[0],
	oPicture = document.getElementsByClassName("picture")[0],
	oPic =  document.getElementsByClassName("pic1")[0],
	oOn = document.getElementsByClassName("on")[0],
    aBtn = document.querySelectorAll(".box-bottom span+span"),
    oPrev = document.querySelectorAll(".banner .prev")[0],
	oNext = document.getElementsByClassName("next")[0],
	//imgWidth = document.querySelectorAll(".picture li img"),
    num = 0,
	wth = document.body.clientWidth,//获取窗口大小
	len = aBtn.length;//4

	window.onresize = function (){
		wth = document.body.clientWidth//函数运行重新计算窗口宽度
		//监听窗口距离变化并计算浮动框运动最大距离
		maxX = document.documentElement.clientWidth - mobile.clientWidth,//运动最大临界值
		maxY = document.documentElement.clientHeight -mobile.clientHeight;
	}
	//图片轮播运动函数
		function bannerRun(){
			wth = document.body.clientWidth//函数运行重新计算窗口宽度
			num++ //picture
			animation(oPicture,{//图片进行运动
				data:{
					left : -num * wth
				},
				speedOpt:{
					mode:"Back",
					speed:2
				}
			},400,()=>{
				if(num === len){
					oPicture.style.left = 0;
					num = 0;
				}
			})
			//Btn图标进行运动
			if(num === len){
				animation(oOn,{
					data:{
						opacity: 0
					}
				},10,()=>{
					oOn.style.left = 0 + "px";
					animation(oOn,{
						data:{
							opacity: 1
						}
					},10)
				})
			}else{
				animation(oOn,{
					data:{
						left : num * 35
					}
				},10)
			}
		}
		for(let i = 0;i<len;i++){//注册小图标四次点击事件
			aBtn[i].onclick = function(){
				if(Math.abs(i - num) > 1){
					animation(oOn,{
						data:{
							opacity:0
						}
					},10,()=>{
						oOn.style.left = i * 35 + "px";
						animation(oOn,{
							data:{
								opacity:1
							}
						},10)
					})
				}else{
					animation(oOn,{
					 	data:{
							left: i * 35
						}
					},10)
				}
				animation(oPicture,{
					data:{
						left: -i * wth
					},
					speedOpt:{
						mode:"Back",
						speed:2
					}
				},400)
				num = i;
			}
		}
		oPrev.onclick = function(){//按左键
			num--;
			if(num < 0){
				num = len - 1;
				oPicture.style.left = - len * wth + "px"
				animation(oOn,{
					data:{
						opacity: 0
					}
				},10,()=>{
					oOn.style.left = num * 35 +"px"
					animation(oOn,{
						data:{
							opacity:1
						}
					},10)
				})
			}
			animation(oPicture,{
				data:{
					left: - num * wth
				},
				speedOpt:{
					mode:"Back",
					speed:2
				}
			},400)
			if(num !== len - 1){
				animation(oOn,{
					data:{
						left: num * 35
					}
				},10
				
				)
			}
		}
		oNext.onclick = function(){//按右键
			bannerRun()
		}
		let time = setInterval(bannerRun,4000)
		oBanner.onmouseover = function(){//清除时间函数
			clearInterval(time)
		}
		oBanner.onmouseleave = function(){//重新加入时间函数
			time = setInterval(bannerRun,4000)
		}
//淡入淡出
let box_pic = document.getElementsByClassName("box-pic")[0],
    aLi = document.querySelectorAll(".pic li"),
    aSpan = document.querySelectorAll(".small-ico span"),
    len1 = aLi.length,//2
    index1 = 0;
    animation(aLi[index1],{
        data:{
            opacity:1,
            "z-index":2
        }
	},500)
	
	for(let i= 0;i<len1;i++){//点击传参
		aSpan[i].onclick = function(){
			let a = index1
			index1 = i;
			run(a)
		}
	}
	
	function run(j){//声明运动函数
		if(index1 === j) return
		animation(aLi[j],{
			data:{
				opacity:1,
				"z-index":2
			}
		},500)
		aSpan[j].classList.remove("spe-color")
		if(index1 < 0) index1 = len1 - 1;
		if(index1 > 1) index1 = 0;
		animation(aLi[index1],{
			data:{
				opacity:0,
				"z-index":1
			}
		},500)
		aSpan[index1].classList.add("spe-color")
	}
		let timer = setInterval(function(){//加入时间函数
			run(index1++)
		},4000);
		box_pic.onmouseover = function(){//清除时间函数
			clearInterval(timer)
		}
		box_pic.onmouseout = function(){//重新加入时间函数
			timer = setInterval(function(){
			run(index1++)
		},4000)
		}
//tap标签页心理百科
//碰壁

let {floor,random,min,max} = Math,//Math解构赋值
	mobile = document.getElementById("mobile"),

	speedX = 1,//运动速度
	speedY = 1,

	DTop = 0,
	DLeft = 0,
	maxX = document.documentElement.clientWidth - mobile.clientWidth,
	maxY = document.documentElement.clientHeight -mobile.clientHeight,
	broserScrollTop = document.documentElement.scrollTop,

	//返回顶部
	arrow = document.getElementsByClassName("arrow")[0];

	run1()
	window.onscroll = function(){
		broserScrollTop = document.documentElement.scrollTop;
		//返回顶部判断条件
		if(broserScrollTop > 250){
			arrow.style.opacity = 1;
		}else {
			arrow.style.opacity=0;
		}
	}
	
	function run1(){//运动函数
			DLeft += speedX;
			DTop += speedY;
			
		DLeft = min(maxX,DLeft);
		DLeft = max(0,DLeft);

		DTop = min(maxY,DTop);
		DTop = max(0,DTop);

		mobile.style.top = DTop + broserScrollTop + "px"
		mobile.style.left = DLeft + "px"
		
		if(DLeft === 0 || DLeft === maxX){//碰壁反向运动
			speedX = -speedX;
		}
		if (DTop === 0 || DTop === maxY) {
			speedY = -speedY;	
		}
		
	}
	let timer2 = setInterval(run1,20);
	mobile.onmouseover = function (){
		clearInterval(timer2)
	}
	mobile.onmouseout = function (){
		timer2 = setInterval(run1,20);
	}
	
	
