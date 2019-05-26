
//轮播图
let oBanner = document.getElementById("banner"),
    oPicture = document.getElementsByClassName("picture")[0],
    aBtn = document.querySelectorAll(".box-bottom span+span"),
    oOn = document.getElementsByClassName("on")[0],
    oPrev = document.querySelectorAll("#banner .prev")[0],
    oNext = document.getElementsByClassName("next")[0],
    num = 0,
    wth = 1570,
    len = aBtn.length;//4
		function bannerRun(){
			num++ //picture
			animation(oPicture,{
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
			//Btn
			if(num === len){
				animation(oOn,{
					data:{
						opacity: 0
					}
				},200,()=>{
					oOn.style.left = 0 + "px";
					animation(oOn,{
						data:{
							opacity: 1
						}
					},200)
				})
			}else{
				animation(oOn,{
					data:{
						left : num * (53 + 40)
					}
				},400)
			}
		}
		for(let i = 0;i<len;i++){
			aBtn[i].onclick = function(){
				if(Math.abs(i - num) > 1){
					animation(oOn,{
						data:{
							opacity:0
						}
					},200,()=>{
						oOn.style.left = i * (53 + 40) + "px";
						animation(oOn,{
							data:{
								opacity:1
							}
						},200)
					})
				}else{
					animation(oOn,{
					 	data:{
							left: i * (53 + 40)
						}
					},400)
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
				},200,()=>{
					oOn.style.left = num * (53 + 40) +"px"
					animation(oOn,{
						data:{
							opacity:1
						}
					},200)
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
						left: num * (53 + 40)
					}
				},400)
			}
		}
		oNext.onclick = function(){//右键
			bannerRun()
		}
		let time = setInterval(bannerRun,4000)
		oBanner.onmouseover = function(){//清除时间函数
			clearInterval(time)
		}
		oBanner.onmouseleave = function(){
			time = setInterval(bannerRun,4000)
		}
//古诗切换
let poeml = document.getElementsByClassName("poem-left")[0],
	poemR = document.getElementsByClassName("poem-right")[0],
	conF = document.querySelectorAll(".content .con-first")[0],
	conS = document.querySelectorAll(".content .con-second")[0];
	animation(conF,{
		data:{
			opacity:1,
			"z-index":2
		}
	},500)
	
	poeml.onclick = function(){
		poeml.classList.add("chan-co");
		poemR.classList.remove("chan-co");
		animation(conS,{
			data:{
				opacity:0,
				"z-index":1
			}
		},500)
		animation(conF,{
			data:{
				opacity:1,
				"z-index":2
			}
		},500)

	}
	poemR.onclick = function(){
		poeml.classList.remove("chan-co");
		poemR.classList.add("chan-co");
		animation(conF,{
			data:{
				opacity:0,
				"z-index":1
			}
		},500)
		animation(conS,{
			data:{
				opacity:1,
				"z-index":2
			}
		},500)
	}
//会议图片切换和放大
let same = document.getElementsByClassName("same"),
	bigImg = document.getElementsByClassName("big-img")[0],
	textBot = document.getElementsByClassName("text-bot")[0],
	arr = ["第一次全体会议","第二次全体会议","第三次全体会议","第四次全体会议"],
	Image = document.querySelectorAll(".big-img img")[0],
	cycle = document.getElementsByClassName("cycle")[0];
	for(let i=0;i < same.length;i++){
		same[i].bool = true;//已正常可特殊
		same[0].classList.add("yellow");
		same[0].bool = false;//以特殊可正常
		same[i].onclick = function(){
			if(same[i].bool){
				same[i].classList.add("yellow");
				textBot.innerHTML = arr[i];
				animation(cycle,{
					data:{
						left: - i * 386
					},
					speedOpt:{
						mode:"Back",
						speed:2
					}
				},200)
				//Image.src = same[i].childNodes[1].getAttribute("src");第一次没有左右切换。直接src赋值。
			}else return;
			same[i].bool = !same[i].bool;
			for(let n=0;n<same.length;n++){
				if(n!==i&&same[n].bool === false){
					same[n].classList.remove("yellow");
					same[n].bool = true;
				}
			}
		}
	}
//古诗的上下切换
let pTitle = document.querySelectorAll(".poetry .p-title"),
	verse = document.querySelectorAll(".poetry .verse");
	for(let i=0;i < pTitle.length;i++){
		pTitle[i].bool = true;//已关闭可打开
		pTitle[0].classList.add("spe-color");
		pTitle[0].bool = false;//以打开可关闭
		verse[0].classList.add("spe-verse");
		pTitle[i].onclick = function(){
			if(pTitle[i].bool){
				pTitle[i].classList.add("spe-color");
				verse[i].classList.add("spe-verse");
			}else return;
			pTitle[i].bool = !pTitle[i].bool;
			for(let n=0;n<pTitle.length;n++){
				if(n!==i&&pTitle[n].bool === false){
					pTitle[n].classList.remove("spe-color");
					verse[n].classList.remove("spe-verse");
					pTitle[n].bool = true;
				}
			}
		}
	}
//多张图片轮播
let leftArrow = document.getElementsByClassName("l-arrow")[0],
	rightArrow = document.getElementsByClassName("r-arrow")[0],
	casePic = document.getElementsByClassName("case-pic")[0],
	caseLi = document.querySelectorAll(".case-pic li"),
	tom = 0 ;
	leftArrow.onclick = function (){
		tom++;
		/*if(tom < 0){
			tom = caseLi.length - 1;
				//casePic.style.left = -caseLi.length * 210 + "px";
		}*/
		
		if(tom > caseLi.length-4){
			tom = 3;
			animation(casePic,{
				data:{
					left: -tom * 210
				},
				speedOpt:{
					mode:"Back",
					speed:2
				}
			},40)
			//casePic.style.left = -tom * 210 + "px";
		}

		animation(casePic,{
			data:{
				left: -tom * 210
			},
			speedOpt:{
				mode:"Back",
				speed:2
			}
		},40)
	}
	rightArrow.onclick = function (){
		tom--;
		if(tom  < 0){
			tom = 5;
			animation(casePic,{
				data:{
					left: -tom * 210
				},
				speedOpt:{
					mode:"Back",
					speed:2
				}
			},40)
			//casePic.style.left = -tom * 210 +"px";
		}
		animation(casePic,{
			data:{
				left: -tom * 210
			},
			speedOpt:{
				mode:"Back",
				speed:2
			}
		},40)
	}
//弹出窗口放大图片
/*let dogImg = document.querySelectorAll(".dog-img img"),
	windowWidth = document.body.offsetWidth, 
	windowHeight = document.body.offsettHeight,
	//mask = document.getElementsByClassName("mask")[0],
	maskImgImg = document.querySelectorAll(".mask-img img")[0],
	maskImg = document.getElementsByClassName("mask-img")[0],
	onerror = document.querySelectorAll(".mask-img i")[0],
	imgLeft,
	imgTop;
	window.onresize = function(){  //窗口大小发生改变的时候触发;
		windowWidth = document.body.offsetWidth;
		windowHeight = document.body.offsetHeight;
		
	}
	console.log( document.body.clientHeight)
	for(let i=0;i<dogImg.length;i++){
		dogImg[i].onclick = function (){
			mask.style.width = windowWidth + "px";
			mask.style.height = windowHeight + "px";
			maskImgImg.src = dogImg[i].getAttribute("src");
			imgLeft = windowWidth/2 - maskImg.offsetWidth / 2;
			imgTop = windowHeight / 2 - maskImg.offsetHeight / 2;
			animation(maskImg,{
				data:{
					top:imgTop,
					left:imgLeft
				}
			},100)
			//console.log(window.innerHeight)1340
			//console.log(document.documentElement.offsetHeight)1340
			console.log(document.body.scrollTop)
			//console.log(document.documentElement.clientHeight)1340
		}
	}*/
	//弹出窗口放大图片
	
	var oxBtn = $('.dog-img img');
	var maskImg = $('.mask-img');
	var onerror = $('.mask-img i');
	var browserWidth = $(window).width();//浏览器窗口的大小
	var browserHeight = $(window).height();
	var maskImgWidth = maskImg.outerWidth(true);//盒子占位的大小
	var maskImgHeight = maskImg.outerHeight(true);
	var browserScrollTop = $(window).scrollTop();//窗口滚动条的变化
	var browserScrollLeft = $(window).scrollLeft();
	var positionLeft = browserWidth/2 - maskImgWidth/2;
	var positionTop = browserHeight/2 - maskImgHeight/2;
	var maskWidth = $(document).width();//阴影的大小
	var maskHeight = $(document).height();
	var oMask = '<div class="mask"></div>'
	for(let i=0;i<4;i++){
		oxBtn.click(function(){
			maskImg.show().animate({
				'left':positionLeft+'px',
				'top':positionTop+'px'
			},200);
			$('.mask-img > img').attr('src',$(this).attr('src'));
			$('body').append(oMask);
			$('.mask').width(maskWidth).height(maskHeight);
	
		});
	}
	
	$(window).resize(function(){
		if(maskImg.is(':visible')){
			browserWidth = $(window).width();
			browserHeight = $(window).height();
			positionLeft = browserWidth/2 - maskImgWidth/2+browserScrollLeft;
			positionTop = browserHeight/2 - maskImgHeight/2+browserScrollTop;
			maskWidth = $(document).width();
			maskHeight = $(document).height();
			$('.mask').width(maskWidth).height(maskHeight);
			maskImg.animate({
				'left':positionLeft+'px',
				'top':positionTop+'px'
			},200);
		}
	});
	$(window).scroll(function(){
		
		browserScrollTop = $(window).scrollTop();
		browserScrollLeft = $(window).scrollLeft();
		positionTop = browserHeight/2 - maskImgHeight/2 + browserScrollTop;
		positionLeft = browserWidth/2 - maskImgWidth/2 + browserScrollLeft;
		maskImg.animate({
			'left':positionLeft+'px',
			'top':positionTop+'px'
		},200).dequeue();
		
	})
	onerror.click(function(){
		maskImg.hide();
		$('.mask').remove();
	})