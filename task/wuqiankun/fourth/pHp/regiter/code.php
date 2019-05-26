<?php
session_start();
srand((double)microtime()*1000000);
$authnum=rand(1000,9999);
//session_register("authnum");
header("content-type:image/png");
function creat_image($width,$height,$authnum)
{
	srand((double)microtime()*1000000);
	$im = imagecreate($width,$height);
	$black = ImageColorAllocate($im, 0,0,0);
	$white = ImageColorAllocate($im, 255,255,255);
	$gray = ImageColorAllocate($im, 200,200,200);
	imagefill($im,0,0,$gray);

	//将四位整数验证码绘入图片
	imagestring($im, 5, 10, 3, $authnum, $black);
	for($i=0;$i<200;$i++)//加入干扰象素
	{
		$randcolor = ImageColorallocate($im,rand(0,255),rand(0,255),rand(0,255));
		imagesetpixel($im, rand()%70 , rand()%30 , $randcolor);
	}
	ImagePNG($im);
	ImageDestroy($im);
	}
creat_image(60,20,$authnum);
?>


