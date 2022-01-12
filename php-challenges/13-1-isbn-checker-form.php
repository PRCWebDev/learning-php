<?php

/*
Design a HTML form to allow a user to input a ​10 digit ​ISBN.  
Send this data to a processing script and then check if it is a valid ISBN number.  
Output a valid or invalid message to the user.  
Sample valid ISBN: ​1573980137
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ISBN Checker</title>
</head>
<body>
  <form action="13-2-isbn-checker-processor.php" method="POST">
    <input type="text" name="check" placeholder="Insert ISBN number here" minlength="10" maxlength="10" required>
    <input type="submit" name="submit" value="CHECK">
  </form>
</body>
</html>