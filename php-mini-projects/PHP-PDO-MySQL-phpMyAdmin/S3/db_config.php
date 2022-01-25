<?php

$db_host = 'localhost'; // database location
$db_name = 'myschool'; // database name
// $db_name = 'myschool2'; // wrong database name for testing using the TRY-CATCH METHOD
$db_username = 'patrick'; // database username
$db_password = 'MlUUK@taGY0O-jg/'; // database password = left blank intentionaly

$dsn = "mysql:host=$db_host;dbname=$db_name"; // dsn = data source name

// TRY-CATCH METHOD
try{
  $db_connection = new PDO($dsn, $db_username, $db_password); // PDO = PHP Data OBJECTs = it's a CLASS that represents a connection between PHP and a database server => $db_connection = OBJECT
} catch (Exception $e) { // Exception = the error(with the variable name $e) we are going to CATCH 
  echo "there was a failure - " . $e->getMessage(); // we operate(the dash and arrow sign) on the error, we retrieve(get) the Exception / error message and we display it: there was a failure - SQLSTATE[HY000] [1049] Unknown database 'myschool2'
}