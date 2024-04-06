<?php
$image= imagecreatetruecolor(200,80);
$background=imagecolorallocate($image, 255,255,255);
imagefill($image,0,0, $background);
$red=imagecolorallocate($image,233,55,55);
$green=imagecolorallocate($image,55,155,55);
$blue=imagecolorallocate($image,55,55,233);
imagestring($image,5,30,20,'hello world!', $red);
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>
