<?php

if(isset($_POST['submit'])){
  $string = $_POST['userInput'];
  $spaces = $_POST['spaces'];

  if($spaces == "Y"){
    $stringLength = strlen(str_replace(" ", "", $string)); //replaces the spaces in the string with nothing :)
  } else {
    $stringLength = strlen($string);
  }

  echo "Your input is $stringLength characters long.";

} else {
  echo "Please visit form page";
}
