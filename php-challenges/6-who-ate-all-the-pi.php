<?php

$radius = 5;

$areaCircle = pi() * pow($radius, 2);

echo "The area of a circle with radius = $radius is $areaCircle.";

echo "<br>";

$areaCircleRounded = round($areaCircle, 2, PHP_ROUND_HALF_UP); // rounded value

echo "The area of a circle with radius = $radius is $areaCircleRounded rounded to 2 decimal places.";