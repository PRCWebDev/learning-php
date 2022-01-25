<?php

require_once('../db_config.php');

$query = "DELETE FROM teachers
          WHERE id = 77";

if($db_connection->query($query)){
  echo "deletion successful";
} else {
  echo "deletion failed";
}

$db_connection = NULL;