<?php

if(isset($_POST['submit'])){ //check if form was submitted
  $comment = $_POST['userInput']; //assign post variable to user input
  $filters = ["badword1", "badword2", "badword3", "badword4"]; //store any bad words in an array

  foreach($filters as $filter){
    $comment = str_replace($filter, "****", $comment); //loop throught the array of badwords and replace any bad word with ****
  }

  echo $comment; //echo out the filtered comment
} else {
  echo "Please visit form page"; //if form was not submitted, redirect back to form page
}