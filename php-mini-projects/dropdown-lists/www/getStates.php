<?php

/*
THE LOGIC

1.
// $countryID = $_POST['country'];
// changed the '$countryID' name to '$randomName' to avoid confusion


2.
$randomName = $_POST['country']; 
// 'country' is the NAME of the 'data' we are POSTing to the HTML code inside the getStates.php file FROM the dropdown-lists.php file
// the VALUE of the 'country' is the country id number/value from the COUNTRIES!!! table


3.
echo "<option>$randomName</option>";
// we SEND BACK the VALUE of the 'country' (aka the country id number/value from the countries table)
// which NOW BECOMES the 'data' 
// and changes the HTML in the .done(function(data) via the $("#stateDropdown").html(data); statement
// this links BACK to the $("#stateDropdown").html("<option>Loading...</option>"); and changes the 'Loading...' to the the VALUE of the 'country' (aka the country id number/value from the countries table) DISPLAYED / ADDED / INSERTED in the 'select' HTML element code (in the div with the id 'stateDropdown')


4.
// the next step is to RETRIEVE the 'states' from the database

require("../dbConfig.php");
// similar to require_once('../db_config.php');
// retrieves the connections details(database location, name, username and password) from the db_config.php file

$randomName = $_POST['country'];
// see step 2.

$sql = "SELECT state FROM states WHERE countryID = :countryID ORDER BY state ASC";
// 'countryID' = the countryID column value (1 or 2 or 3) from the STATES!!! table in the database
// ':countryID' = placeholder for 'countryID'
// ORDERed in an ASCending alphabetical way based on the state column in the states table 

$states = $db->prepare($sql);
// gets the Database OBJECT '$db' (from the db_config.php file) 
// operates on it '->' 
// prepares the '$sql' statement

$states->execute(array(
        ':countryID' => $randomName
    ));
// we operate ('->') on the '$states' OBJECT
// we 'execute' an 'array' (similar to the S4 mini-project: $result->execute([ // executes as an ARRAY of values
              'title'     => $title,
              'author'    => $author,
              'genre'     => $genre,
              'height'    => $height,
              'publisher' => $publisher,
              'id'        => $id
    ]);)
// this  ASSIGNS the ':countryID' placeholder to the actual value that has been POSTed, which is the '$randomName' variable (RENAMED from '$countryID' - see steps 1 & 2)
// in other words, we are LINKING / ASSOCIATING the ':countryID' placeholder FROM THE STATES!!! TABLE (with the value of 1 or 2 or 3) TO the '$randomName' variable FROM THE COUNTRIES!!! TABLE (with the value of 1 or 2 or 3)
// SO: 1 links / associates to 1, 2 links to 2 and 3 links to 3 and thus THE STATES of Australia are linked / associated to THE COUNTRY of Australia etc.


5. 
// populating the State dropdown:
echo "<option>Select state...</option>";
// instead of echo "<option>$randomName</option>"; from step 3.

foreach ($states as $state) {
        echo "<option value='".$state['id']."'>".$state['state']."</option>";
// loops through the data that is returned from the statements of step 4.
// displays the states names based on their id value from the states table


6.
// securing the script using an if / else error traping method

$randomName = $_POST['country'];
if (filter_var($randomName, FILTER_VALIDATE_INT)) {
  4.
  5.
  } else {
      echo "<option>Failed to load states!</option>";
}
// we are taking the $randomName variable
// we are runnung a FILTER on it to chech if it's an INTEGER number
// if that is TRUE, we are running steps 4 & 5
// otherwise, we are displaying an ERROR message


7.
$db_connection = NULL;
// closes the database connection
*/

$randomName = $_POST['country'];
if (filter_var($randomName, FILTER_VALIDATE_INT)) {
    require("../db_config.php");
    
    $sql = "SELECT state FROM states WHERE countryID = :countryID ORDER BY state ASC";
    $states = $db->prepare($sql);
    $states->execute(array(
        ':countryID' => $randomName
    ));
    //$array = $states->fetchAll(PDO::FETCH_ASSOC);
    echo "<option>Select state...</option>";
    foreach ($states as $state) {
        echo "<option value='".$state['id']."'>".$state['state']."</option>";
    }
    
    //echo json_encode($array);
} else {
    echo "<option>Failed to load states!</option>";
}

$db_connection = NULL;