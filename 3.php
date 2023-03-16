<?php
/**
 * 이미지를 파일로 생성하기
 */

$im = imagecreate(300, 300);
imagecolorallocate($im, 90, 90, 90);

$text_color = imagecolorallocate($im, 0, 255, 0);

imagestring($im, 5, 10, 10, "Making Image File", $text_color);

imagegif($im, "data/result.gif");
imagedestroy($im);
?>
<p>이미지가 출력되었군요.</p>
<img src="data/result.gif">

