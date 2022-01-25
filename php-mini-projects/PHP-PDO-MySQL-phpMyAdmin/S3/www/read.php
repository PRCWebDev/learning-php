<?php

require_once('../db_config.php');

// $query = "SELECT * FROM teachers"; // selects ALL Fields from the teachers table
$query = "SELECT firstName, surname FROM teachers"; // selects ALL Fields from the teachers table

$results = $db_connection->query($query);

/*
displays ALL Fields from the teachers table
foreach ($results as $result){
  echo $result['id'] . ". " . $result['firstName'] . " " . $result['surname'] . " " . $result['dob'] . " " . $result['email'] . " " . $result['startDate'] . "<br>"; 
}
*/


// displays ONLY the firstName and the surname Fields from the teachers table
foreach ($results as $result){
  echo $result['firstName'] . " " . $result['surname'] . "<br>"; 
}

/*
// adding SUCCESS / FAILURE messages - NOT WORKING
$query = "SELECT endDate FROM teachers"; // selects ALL Fields from the teachers table
if($results = $db_connection->query($query)){
  foreach ($results as $result){
  echo $result['firstName'] . " " . $result['surname'] . "<br>"; 
}
} else {
  echo "No results to display";
}
*/

$db_connection = NULL; // closes the database connection