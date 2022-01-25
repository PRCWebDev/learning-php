<?php

require_once('../db_config.php');

$query = "UPDATE books
          SET title = 'Another Book', genre = 'Comedy'
          WHERE id = 120";

if($db_connection->exec($query)){
  echo "update successful";
} else {
  echo "update failed";
}

$db_connection = NULL;