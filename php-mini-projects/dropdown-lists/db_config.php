<?php

$db_host = 'localhost';
$db_name = 'dropdown-lists';
$db_username = 'root';
$db_password = '';

// $dsn = "mysql:host=$db_host;dbname=$db_name";

try {
  // $db = new PDO($dsn, $db_username, $db_password);
  $db = new PDO("mysql:host=$db_host; dbname=$db_name", $db_username, $db_password);
  // echo "Success";
} catch (PDOException $e) {
  echo "Error" . $e->getMessage();
}