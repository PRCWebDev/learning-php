<?php

$db_host = 'localhost'; // database location
$db_name = 'company'; // database name
$db_username = 'root'; // database username
$db_password = ''; // database password = left blank intentionaly

$dsn = "mysql:host=$db_host;dbname=$db_name"; // dsn = data source name

$db_connection = new PDO($dsn, $db_username, $db_password); // PDO = PHP Data Objects = it's a CLASS that represents a connection between PHP and a database server => $db_connection = OBJECT

$query = "SELECT * FROM users"; // pulls a record from the database

$results = $db_connection->query($query); // runs the query on the OBJECT = METHOD

$db_connection = NULL; // closes the database connection

foreach ($results as $result){ // loops throught the results retrieved from the database and displays the first names, the surnames, the emails etc.
  echo $result['firstName'] . " ";
  echo $result['surname'] . " ";
  // echo $result['dob'] . " ";
  echo $result['email'];
  echo "<br>";
}