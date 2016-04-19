<?php


$string_arr = array();
$filename = 'img/reCAPTCHA.png';

$orig_image = imagecreatefrompng($filename);
$x = 33;
$y = 7;
$percent = 0.5;

list($width, $height) = getimagesize($filename);
$new_width = $width * $percent;
$new_height = $height * $percent;
$im = imagecreatetruecolor($new_width, $new_height);
imagecopyresampled($im, $orig_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

imagedestroy($orig_image);

for ( $i = 0; $i < 4; $i++ ) {
    $number = mt_rand(0, 9);
    $string_arr[] = $number;

    $textColor = imagecolorallocate($im, $i*49, $i*3, $i*41);   //black text

    imagestring ($im, 5, $x, $y, $number, $textColor);
    $x += 13;
    if ( $y == 14 ) {
        $y = 0;
    }
    $y += 7;

}

@session_start();
$_SESSION['captcha'] = implode('',$string_arr);

header('Content-Type: image/png');

imagepng($im);
imagedestroy($im);

exit();
?>