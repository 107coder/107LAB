<?php
  
  session_start();
  
 
  $image = imagecreatetruecolor(100, 30);    //1>设置验证码图片大小的函数
  //设置验证码颜色 
  $bgcolor = imagecolorallocate($image,255,255,255); //#ffffff
  //区域填充 int imagefill(int im, int x, int y, int col) (x,y) 所在的区域着色,col 表示欲涂上的颜色
  imagefill($image, 0, 0, $bgcolor);
  //设置变量
  $captcha_code = "";
  
  
    //生成随机数字
  for($i=0;$i<4;$i++){
    //设置字体大小
    $fontsize = 6;    
    //设置字体颜色，随机颜色
    $fontcolor = imagecolorallocate($image, rand(0,120),rand(0,120), rand(0,120));      //0-120深颜色
    //设置数字
    $fontcontent = rand(0,9);
    //连续定义变量
    $captcha_code .= $fontcontent;  
    //设置坐标
    $x = ($i*100/4)+rand(5,10);
    $y = rand(3,10);
 
    imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);
  }
  //存到session
  $_SESSION['authcode'] = $captcha_code;
  //增加干扰元素，设置雪花点
  for($i=0;$i<200;$i++){
    //设置点的颜色，50-200颜色比数字浅，不干扰阅读
    $pointcolor = imagecolorallocate($image,rand(50,200), rand(50,200), rand(50,200));    
    //imagesetpixel — 画一个单一像素
    imagesetpixel($image, rand(1,99), rand(1,29), $pointcolor);
  }
  //增加干扰元素，设置横线
  for($i=0;$i<6;$i++){
    //设置线的颜色
    $linecolor = imagecolorallocate($image,rand(80,220), rand(80,220),rand(80,220));
    //设置线，两点一线
    imageline($image,rand(1,99), rand(1,29),rand(1,99), rand(1,29),$linecolor);
  }
 
  //输出  设置头部，image/png
  header('Content-Type: image/png');
  //imagepng() 建立png图形函数
  imagepng($image);
  //imagedestroy() 结束图形函数 销毁$image
  imagedestroy($image);