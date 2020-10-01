<?php
/*
	header('content-type:image/jpeg');
	$text=$_SESSION['code']=mt_rand(1111,9999);
	$font_size=20;
	$width=200;
	$height=40;
	$image=imagecreate($width,$height);
	imagecolorallocate($image,215,215,215);
	$font_color=imagecolorallocate($image,0,0,0);
	imagettftext($image,$font_size,0,20,40,$font_color,'font.ttf',$text);
	imagejpeg($image);
*/
session_start();
	$str=md5(microtime());;
	$str=substr($str,0,6);
	
	
	
	$img=imagecreate(80,25);
	imagecolorallocate($img,255,255,255);
	$txtcol=imagecolorallocate($img,0,0,0);
	imagestring($img,20,5,5,$str,$txtcol);
	header('content-type:image/jpeg');
	imagejpeg($img);
	$_SESSION['cap_code']=$str;
?>