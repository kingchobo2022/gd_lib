<?php
header("Content-Type: image/png");

// 이미지 크기 설정 및 생성 
$im = imagecreate(300, 300);

// 배경색
imagecolorallocate($im, 80, 80, 80);
$text_color = imagecolorallocate($im, 0, 0, 0);

// 글자 입력 php.net

$font_size = 1;
$x = 50;
$y = 200;

//imagestring($im, $font_size, $x, $y, "Only English... 123", $text_color);

for($i = 1; $i < 10; $i++) {
  $font_size = $i ;
  $y = 10 + $i * 30;
  imagestring($im, $font_size, $x, $y, "Only English... 123", $text_color);
}

imagepng($im);
imagedestroy($im);