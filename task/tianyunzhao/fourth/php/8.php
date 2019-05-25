<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style>
			*{
				margin: 0;
				padding: 0;
				
			}
			ul,li,ol{
				list-style: none;
			}
			.slider{
				width:100%;
				height:500px;
				border:1px solid #eee;
				margin: 100px auto;
				padding:5px;
				position:relative;
			}
			.inner{
				width:100%;
				height:100%;
				background: pink;
				position: relative;
				overflow: hidden;
			}
			.inner img{
				display: block;
				width:100%;
			}
			.inner ul{
				width:800%;
				position: absolute;
				top:0px;
				left:0px;
				
			}
			.inner li{
				float:left;
			
			}
			.slider ol{
				position:absolute;
				left:50%;
				margin-left: -80px;
				bottom: 10px;
				cursor: pointer;
				border-radius: 50%;
			}
			.slider ol li{
				float:left;
				width:18px;
				height:18px;
				background: #fff;
				margin-right: 10px;
				text-align: center;
				line-height: 18px;
				border-radius: 50%;
				background:#4289C9;
			}
			.slider ol li.current{
				background: #82959F;
				cursor: pointer;
			}
			
		</style>
	</head>
	<body>
		<div class="slider" id="slider">
			<div class="inner">
				<ul>
					<li><a href="#"><img src="image1.jpg" alt="" style="width:2100px;height:500px;"></a></li>
			        <li><a href="#"><img src="image2.jpg" alt="" style="width:2100px;height:500px;"></a></li>
					<li><a href="#"><img src="image3.jpg" alt="" style="width:2100px;height:500px;"></a></li>
					<li><a href="#"><img src="image4.jpg" alt="" style="width:2100px;height:500px;"></a></li>
					
				</ul>				
			</div>
			
		</div>
	</body>
</html>
<script>
	var slider = document.getElementById("slider");
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
	timer = setInterval(autoplay,3000);
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
		timer = setInterval(autoplay,3000);
	}
</script>