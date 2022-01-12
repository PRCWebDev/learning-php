<?php

if(isset($_POST['submit'])){ //check if form submitted
  $input = $_POST['check']; //assign post variable isbn number
  $string = str_replace([" ", "-"], "", $input); //optional since i have min and maxlength of chars set
  $digits = str_split($string); //split the string

  $total = 0; //total
  $i = 1; // incrementor

  foreach($digits as $digit){ //loop through the array
    $total += $digit * $i; //update the total = digit *1, 2, 3 etc.
    $i++;
  }

  if($total % 11 == 0){ //check if total / 11
    echo "Your ISBN number is VALID.";
  } else {
    echo "Your ISBN number is INVALID.";
  }
} else {
  echo "Please visit form page";
}