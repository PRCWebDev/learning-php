<?php

/*
The temperatures in degrees C were recorded in January 2015 as follows:
32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0,  36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2,  29.1, 28.6, 30.6

Write a script to output the following:
● average daily temperature in degrees C  (rounded to 1 decimal place)
● the 5 lowest temperatures
● the 5 highest temperatures
Your output should look something like this:
The average daily temperature is 30.4°C
The 5 lowest temperatures are: 25.2°C 25.9°C 28°C 28.2°C 28.4°C
The 5 highest temperatures are: 32.4°C 32.8°C 32.9°C 33.3°C 36.2°C

Create an array and store all of your values in the array.
*/

echo "The temperatures in degrees Celsius were recorded in January 2015 as follows: ";
$string = "32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6";
echo $string; // displays the given string
echo "<br>";
$temperatures = explode(", ", $string); // converts the string into an array
echo "<pre>";
print_r($temperatures); // displays the array
echo "<br>";

/*
$temperatures = [32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6];
echo "<pre>";
print_r($temperatures); // displays the array
echo "<br>";
*/

$sum = array_sum($temperatures); // calculates the sum of the values of the array
echo "The sum of the temperatures is $sum &degC.";
echo "<br>";

$count = count($temperatures); // counts all the items of the array
echo "There are $count items in the array.";
echo "<br>";

$average = round($sum / $count, 1, PHP_ROUND_HALF_UP); // calculates the average temperature by dividing the sum of the values of the array by the count and rounds it up to 1 decimal place
echo "The average daily temperature is $average &degC.";
echo "<br>";

sort($temperatures); // sorts the temperatures in ascending order
print_r($temperatures); // displays the sorted temperatures in ascending order
echo "<br>";

$lowestTemps = array_slice($temperatures, 0, 5); // removes the items AFTER those starting from position [0] until position [5]
$lowestTemps = implode(" &degC, ", $lowestTemps); // converts the array with the 5 lowest temperatures into a string
echo "The 5 lowest temperatures are: $lowestTemps &degC.";
echo "<br>";

$highestTemps = array_slice($temperatures, -5, 5); // removes the items BEFORE AND AFTER those STARTING from position [-5] UNTIL the next 5 positions
$highestTemps = implode(" &degC, ", $highestTemps); // converts the array with the 5 highest temperatures into a string
echo "The 5 highest temperatures are: $highestTemps &degC.";