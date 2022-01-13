<?php

/*
Place the following cities into an array: London Paris Amsterdam New York Berlin Brisbane  
Sort the cities alphabetically.  
Display the cities as an ordered list. 
Now add the following cities by using the array_push function  
Sydney Helsinki Beijing Dublin Rome  
Sort the cities alphabetically.  
Display the cities as an ordered list. 
*/

$string = "London, Paris, Amsterdam, New York, Berlin, Brisbane";

echo $string;
echo "<br>";

$cities = explode(", ", $string);

echo "<pre>";
print_r($cities);

echo "<br>";

sort($cities);
echo "<ol>";
foreach($cities as $city){
  echo "<li>$city</li>";
}
echo "</ol>";

echo "<br>";

array_push($cities, "Sydney", "Helsinki", "Beijing", "Dublin", "Rome");
print_r($cities);

echo "<br>";

sort($cities);
echo "<ol>";
foreach($cities as $city){
  echo "<li>$city</li>";
}
echo "</ol>";