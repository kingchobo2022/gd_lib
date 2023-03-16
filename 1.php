<?php
header("Content-Type: image/png");

// 이미지 크기 설정 및 생성 
$im = imagecreate(100, 200);

// 배경색
imagecolorallocate($im, 80, 80, 80);

imagepng($im);
imagedestroy($im);