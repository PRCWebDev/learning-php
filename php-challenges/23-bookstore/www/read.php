<?php

require_once('../db_config.php');

$query = "SELECT * FROM books";

if($results = $db_connection->query($query)){
  foreach($results as $result){
    echo $result['id'] . ". " . $result['title'] . " " . $result['genre'];
    echo "<br>";
  }
} else {
  echo "No results to display.";
}

$db_connection = NULL;