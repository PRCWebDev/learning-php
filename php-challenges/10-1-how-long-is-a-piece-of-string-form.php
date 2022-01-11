<?php

/*
Design a form that will allow a user to input a string.  
Take the user input and count the number of characters in the string.  
Output the length of the string.  

If the user was to input:  Have a nice day.   
then the output should be as follows:  The string is 16 characters long 

+ EXTENSION  
Add radio button elements to the form that will allow the user to select if they wish to count the spaces in the string along with the other characters.   
Process the form taking into account whether or not they wish to count the spaces.
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>How long is a piece of string?</title>
</head>
<body>
  <form action="10-2-how-long-is-a-piece-of-string-processor.php" method="POST">
    <!-- <textarea name="userInput" cols="50" rows="2" placeholder="Insert input here.." required></textarea>
    <br> -->
    <input type="text" name="userInput" placeholder="Insert input here..">
    <input type="radio" name="spaces" value="Y">Y
    <input type="radio" name="spaces" value="N">N
    <input type="submit" name="submit" value="COUNT">
  </form>
</body>
</html>