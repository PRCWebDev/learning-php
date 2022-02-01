<?php

require_once('../db_config.php');

$id = 56;

$query = "SELECT * FROM books WHERE id = :id LIMIT 1";

$result = $db_connection->prepare($query);

$result->execute([
  'id'  =>  $id
]);

/*
$result = $result->fetch();
echo "<pre>";
print_r($result);
echo "<br>";
echo $result['title'];
*/

$result = $result->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
echo "<br>";
echo $result['title'];

/*
$result = $result->fetch(PDO::FETCH_NUM);
echo "<pre>";
print_r($result);
echo "<br>";
echo $result[1];
*/

/*
$result = $result->fetch(PDO::FETCH_BOTH); // or the default $result = $result->fetch(); because they are the same
echo "<pre>";
print_r($result);
echo "<br>";
echo $result['title'];
*/

$db_connection = NULL;