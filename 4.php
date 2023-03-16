<?php
/**
 * 이미지를 배경으로 사용하는 
 * 이미지 카운터 만들기 
 * - 왕초보 홈페이지만들기 -
 */
$counter_data_file = "data/counter.txt";
if (!file_exists($counter_data_file)) {
  file_put_contents($counter_data_file, "0");
}

$cnt = file_get_contents($counter_data_file);

$cnt++;

file_put_contents($counter_data_file, $cnt);


header('Content-Type: image/png');

$imgname = 'counter.png';

$im = @imagecreatefrompng($imgname);
$text_color = imagecolorallocate($im, 50, 50, 50);

$string = $cnt;
$len = strlen($string);
$font_size = 4;
$x = 93 + (2 - $len) * 8;
$y = 10;

imagestring($im, $font_size, $x, $y, $string, $text_color);

// 1자리 - x좌표 100
// 2자리 - x좌표 93



imagepng($im);
imagedestroy($im);