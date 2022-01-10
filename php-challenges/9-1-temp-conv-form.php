<?php

/*
Design a HTML form to accept input data from the user.
The user should be able to enter:
  ● temperature ● select from ​o​C or ​o​F
This data will be sent to a PHP script where you will then convert the temperature from ​o​C to ​o​F or vice-versa.
  The formula to convert from ​o​F to ​o​C is:  C = (F - 32) * 5 / 9
  The formula to convert from ​o​C to ​o​F is:  F = C * 9 / 5 + 32
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature conversion</title>
</head>
<body>
  <form action="9-2-temp-conv-processor.php" method="POST">
    <input type="number" name="temperature" placeholder="Insert temperature" required>
    <input type="radio" name="units" value="C">&deg;C
    <input type="radio" name="units" value="F">&deg;F
    <select name="accuracy">
      <option value="0">Whole number</option>
      <option value="1">1 decimal place</option>
      <option value="2">2 decimal places</option>
      <option value="3">3 decimal places</option>
    </select>
    <!-- <button type="submit" name="submit" value="CONVERT">Convert</button> -->
    <input type="submit" name="submit" value="CONVERT"></input>
  </form>
</body>
</html>