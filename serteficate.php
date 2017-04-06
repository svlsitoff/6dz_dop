<?php
header("Content-type: image/png");
$string= file_get_contents('serteficate.txt');
getimage($string);

function getimage($string) {
	 $img = imagecreatetruecolor(300, 260);
	 $backcolor = imagecolorallocate($img, 255, 224, 221);
	 $fontcolor = imagecolorallocate($img, 34, 75, 45);
	 $fontfile = '/font/a_CampusOtl.ttf';
	 $imgbox = imagecreatefrompng('images/sert.png');
	 imagefill($img, 0, 0, $backcolor);
	 imagecopy($img, $imgbox, 10, 10, 0, 0, 400, 400);
	 imagettftext($img, 16, 0, 20, 96, $fontcolor, $fontfile, $string);
	 imagepng($img);
	 imagedestroy($img);

}