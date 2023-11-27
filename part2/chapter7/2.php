<?php
define("RECTANGLE", 2);
define("GREEN", 8);

$angle = 45 << 5;
$height = 15 << 14;
$width = 15 << 23;

// echo "RECTANGLE: " . RECTANGLE . "<br>";
// echo "GREEN: " . GREEN . "<br>";
// echo "angle: $angle<br>";
// echo "height: $height<br>";
// echo "width: $width<br>";

echo RECTANGLE | GREEN | $angle | $height | $width;