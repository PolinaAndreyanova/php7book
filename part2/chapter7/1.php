<?php
define("LINE", 0);
define("CURVE", 1);
define("RECTANGLE", 2);
define("ELLIPSE", 3);

define("BLACK", 0);
define("BLUE", 4);
define("GREEN", 8);
define("YELLOW", 12);
define("ORINGE", 16);
define("RED", 20);
define("WHITE", 24);

echo "Желтый прямоугольник в десятичном формате: ";
echo RECTANGLE | GREEN;
echo "<br>";

echo "Желтый прямоугольник в двочном формате: ";
echo decbin(RECTANGLE | GREEN);
echo "<br>";