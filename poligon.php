<?php
// Create a blank image
$image= imagecreatetruecolor(200,200);
imagesavealpha($image, true);

// Allocate a color for the polygon
$col_poly = imagecolorallocate($image, 255, 255, 255);
$putih=imagecolorallocate($image,255,255,255);


// Draw the polygon
imagepolygon($image, array(65.226,74.622,65.226,129.564,120.468,134.602,120.588,79.66),4,$col_poly);
imagefill($image,0,1,$putih);

// Output the picture to the browser
header('Content-type: image/png');

imagepng($image);
imagedestroy($image);
?>