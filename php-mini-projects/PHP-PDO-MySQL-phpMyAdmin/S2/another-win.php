<?php

$db_host = 'localhost'; // database location
$db_name = 'myschool'; // database name
$db_username = 'root'; // database username
$db_password = ''; // database password = left blank intentionaly

$dsn = "mysql:host=$db_host;dbname=$db_name"; // dsn = data source name

$db_connection = new PDO($dsn, $db_username, $db_password); // PDO = PHP Data Objects = it's a CLASS that represents a connection between PHP and a database server => $db_connection = OBJECT

$query = "SELECT * FROM teachers"; // pulls ALL the records from the database TABLE named teachers

$results = $db_connection->query($query); // runs the query on the OBJECT = METHOD

$db_connection = NULL; // closes the database connection

foreach ($results as $result){ // loops through the results retrieved from the database and displays the data we choose (first names, surnames, emails etc.)
  echo $result['id'] . ". ";
  echo $result['firstName'] . " ";
  echo $result['surname'] . " ";
  echo $result['dob'] . " ";
  echo $result['email'] . " ";
  echo $result['startDate'];
  echo "<br>";
}