<?php

/*
Create a form which allows the user to input a string of text.  
Send this text to a processing script that will search through the text and replace any inappropriate words with ****

For example the user may input: I love this website but feel that the stupid badword1 comments are detracting from the user experience. The person who wrote this is a badword2. Also, badword3 and badword4.
where badword1 and badword2 would be something inappropriate.
So as not to offend anyone we shall just use badword1 and badword2.  

The output from this sample would be: I love this website but feel that the stupid **** comments are detracting from the user experience. The person who wrote this is a ****. Also, **** and ****.
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mind your language</title>
</head>
<body>
  <form action="14-2-mind-your-language-processor.php" method="POST">
    <textarea name="userInput" cols="50" rows="10" placeholder="Insert your comment here" required></textarea>
    <input type="submit" name="submit" value="COMMENT">
  </form>
</body>
</html>