window.onload = function () {
	//搜索框事件
	var oDiv = document.getElementsByClassName("search-bar")[0];
	var timer = null;
	oDiv.onmouseover = function () {
		startMove(1, 300);
	};
	oDiv.onmouseout = function () {
		startMove(-1, 200);
	};
	function startMove(speed, iTarget) {
		clearInterval(timer);
		timer = setInterval(function () {
			// 判断oDiv宽度是否等于目标值
			if (oDiv.offsetWidth == iTarget) {
				clearInterval(timer);
			} else {
				oDiv.style.width = oDiv.offsetWidth + speed + "px";
			}
			oDiv.style.borderColor = "#00c1de";
		}, 3);
	};

	//鼠标移入移出字体变色事件
	var aNav = document.getElementsByClassName("nav-right-li");
	for (i = 0; i < aNav.length; i++) {
		aNav[i].onmouseover = function () {
			this.style.color = "#00c1de";
		}
		aNav[i].onmouseout = function () {
			this.style.color = "#fff";
		}
	}
	var aLegal = document.getElementsByClassName("footer-siteinfoLegal-li");
	for (i = 0; i < aLegal.length; i++) {
		aLegal[i].onmouseover = function () {
			this.style.color = "#00c1de";
		}
		aLegal[i].onmouseout = function () {
			this.style.color = "#9b9ea0";
		}
	}
	var aProducts = document.getElementsByClassName("footer-products-li");
	for (i = 0; i < aProducts.length; i++) {
		aProducts[i].onmouseover = function () {
			this.style.color = "#00c1de";
		}
		aProducts[i].onmouseout = function () {
			this.style.color = "#9b9ea0";
		}
	}
	var aHiddenLi = document.getElementsByClassName("hidden-li");
	for (i = 0; i < aHiddenLi.length; i++) {
		aHiddenLi[i].onmouseover = function () {
			this.getElementsByTagName("h2")[0].style.color = "#00c1de";
		}
		aHiddenLi[i].onmouseout = function () {
			this.getElementsByTagName("h2")[0].style.color = "#9b9ea0";
		}
	}

	//咨询建议框隐藏与出现
	var oBox = document.getElementsByClassName("hidden")[0];
	var oBar = document.getElementsByClassName("sidebar")[0];
	var timer2 = null;
	var alpha = 0;
	var oClose = document.getElementsByClassName("close")[0];

	oBar.onmouseover = function () {
		startChange(100);
		oBox.onmouseover = function () {
			startChange(100);
		}
		oBox.onmouseout = function () {
			startChange(0);
		}
		oClose.onclick = function () {
			startChange(0);
		}
	}
	oBar.onmouseout = function () {
		startChange(0);
	}
	function startChange(iTarget2) {
		clearInterval(timer2);
		timer2 = setInterval(function () {
			var speed2 = 0;
			//判断透明度是否达到目标值
			if (alpha < iTarget2) {
				speed2 = 10;
			}
			else {
				speed2 = -10;
			}
			if (alpha == iTarget2) {
				clearInterval(timer2);
			}
			else {
				alpha += speed2;
				oBox.style.filter = 'alpha(opacity:' + alpha + ')';
				oBox.style.opacity = alpha / 100;
			}
		}, 30);
	}
}