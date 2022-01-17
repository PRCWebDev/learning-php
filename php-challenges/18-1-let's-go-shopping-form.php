<?php

/*
Take a user’s credit card input and test if it is a valid credit card number. 
Design a simple form to allow the user to input a credit card number (some test numbers are provided below). 
Test if the credit card number is valid. 
Output an appropriate message, just showing the last 4 digits. 
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's go shopping | Credit card checker</title>
</head>
<body>
    <form action="18-2-let's-go-shopping-processor.php" method="POST">
        <input type="text" name="cc" placeholder="Insert credit card number">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>