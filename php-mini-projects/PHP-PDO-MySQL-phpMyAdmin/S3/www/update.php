<?php

require_once('../db_config.php');

$query = "UPDATE teachers
          SET firstName = 'Samantha', surname = 'Joy', dob = '1988-12-02', email = 'samantha@myschool.com', startDate = '2021-12-12'
          WHERE id = 76";

if($db_connection->query($query)){
  echo "update successful";
} else {
  echo "update failed";
}

$db_connection = NULL;