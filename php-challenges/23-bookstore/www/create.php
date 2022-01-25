<?php

require_once('../db_config.php');

$query = "INSERT INTO books (id, title, author, genre, height, publisher)
          VALUES (NULL, 'My Book', 'Patrick', 'Horror', '235', 'Penguin')";

if($db_connection->exec($query)){
  echo "success";
} else {
  echo "failed";
}


$db_connection = NULL;