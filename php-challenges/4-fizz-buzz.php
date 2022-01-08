<?php

/*
Loop through the numbers 1 to 100.    If a number is a multiple of 3 then output FIZZ instead of the number.    If a number is a multiple of 5 then output BUZZ instead of the number.    If a number is a multiple of both 3 and 5 then output FIZZ BUZZ instead of the number.  
*/

// Radu
$a = 1;

while($a <= 100){
  if($a % 3 == 0 && $a % 5 == 0)
  {
    echo "FIZZ BUZZ";
  } else if($a % 3 == 0){
    echo "FIZZ";
  } else if($a % 5 == 0){
    echo "BUZZ";
  }
  else{
    echo $a;
  }
  echo "<br>";
  $a++;
}

echo "WOOOHOOO!" . "<hr>";

// Patrick
for($i = 1; $i <= 100; $i++){
  if($i % 3 == 0 && $i % 5 == 0)
  {
    echo "FIZZ BUZZ";
  } else if($i % 3 == 0){
    echo "FIZZ";
  } else if($i % 5 == 0){
    echo "BUZZ";
  }
  else{
    echo $i;
  }
  echo "<br>";
}