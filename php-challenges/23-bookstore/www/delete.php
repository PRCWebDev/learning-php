<?php

require_once('../db_config.php');

$query = "DELETE FROM books
          WHERE id = 119";

if($db_connection->exec($query)){
  echo "deletion successful";
} else {
  echo "deletion failed";
}

$db_connection = NULL;