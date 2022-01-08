<?php

// calculate the Area of different shapes using variables and formulas

// Rectangle

$length = 10;

$width = 5;

$areaRectangle = $length * $width;

echo "The area of a rectangle with length = $length and width = $width is $areaRectangle.";

echo "<br>";

// Triangle

$base = 12;

$height = 3;

$areaTriangle = $base * $height / 2;

echo "The area of a triangle with base = $base and height = $height is $areaTriangle.";

echo "<br>";

// Circle

$radius = 5;

$areaCircle = pi() * pow($radius, 2);

echo "The area of a circle with radius = $radius is $areaCircle.";

echo "<br>";

$areaCircleRounded = round($areaCircle, 2, PHP_ROUND_HALF_UP); // rounded value

echo "The rounded area of a circle with radius = $radius is $areaCircleRounded rounded to 2 decimal places.";

echo "<br>";

// Trapezium

$sideA = 10;

$sideB = 8;

$heightTrapezium = 4;

$areaTrapezium = ($sideA + $sideB) * $heightTrapezium / 2;

echo "The area of a trapezium with side a = $sideA and side b = $sideB is $areaTrapezium.";

echo "<br>";

echo "Woohoo!";