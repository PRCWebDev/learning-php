<?php

require_once('../db_config.php'); // retrieves the connections details(database location, name, username and password) from the db_config.php file

/*
TEST

$query = "SELECT * FROM teachers"; // pulls ALL the records from the database TABLE named teachers

$results = $db_connection->query($query); // runs the query on the OBJECT = METHOD

$db_connection = NULL; // closes the database connection

foreach ($results as $result){ // loops through the results retrieved from the database and displays the data we choose (first names, surnames, emails etc.)
  echo $result['id'] . ". ";
  echo $result['firstName'] . " ";
  echo $result['surname'] . " ";
  // echo $result['dob'] . " ";
  echo $result['email'];
  echo "<br>";
}
*/

$query = "INSERT INTO teachers (id, firstName, surname, dob, email, startDate)
          VALUES (NULL, 'James', 'Jones', '1988-11-11', 'james@myschool.com', '2009-09-09')"; // the values we are going to INSERT INTO the teachers table of the myschool database

// $db_connection->exec($query); // runs / executes the $query

if($db_connection->exec($query)){
  echo "success";
} else {
  echo "failed";
}

$db_connection = NULL; // closes the database connection