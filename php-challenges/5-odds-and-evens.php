<?php

/*
Generate a random number between any set limits you choose.
If the random number is an even number then echo “The random number is even.”
If the random number is an odd number then echo “The random number is odd.”
*/

$randomNumber = rand(1, 100);

if($randomNumber % 2 != 0){
  echo "Radu's random number $randomNumber is odd.";
} else {
  echo "Radu's random number $randomNumber is even.";
}

echo "<br>";
echo "Or";
echo "<br>";

// Or
if($randomNumber % 2 == 0){
  echo "Patrick's random number $randomNumber is even.";
} else {
  echo "Patrick's random number $randomNumber is odd.";
}


/*
+ Extension: Use a loop to generate the above 100 times.  Keep a score of how many odd and even numbers were generated and then echo out the results.
*/

/*
++ Radu's EXTRA Extension: echo out the generated random numbers before the results required above.
*/

echo "<hr>";

$odds = 0;
$evens = 0;

for($i = 1; $i <= 100; $i++){
  $anotherRandomNumber = rand(1, 100);
  if($anotherRandomNumber % 2 != 0){
    echo "$i. Random odd number is $anotherRandomNumber." . "<br>";
    $odds++;
  } else {
    echo "$i. Random even number is $anotherRandomNumber." . "<br>";
    $evens++;
  }
}

echo "TOTAL = There are $evens even numbers and $odds odd numbers.";
echo "<br>";
echo "Woooooohooooo!!!";