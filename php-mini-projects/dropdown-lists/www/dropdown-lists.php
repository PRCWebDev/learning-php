<?php
include('../db_config.php');
$sql = "SELECT * FROM countries ORDER BY country ASC";
$countries = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>Dropdown lists</title>
</head>
<body>
  <div class="container">
    <br>
    <form action="" class="form-horizontal">
      <div class="form-group">
        <label for="country" class="col-sm-2">Country:</label>
        <div class="col-sm-4">
          <select name="country" class="form-control" onchange="getStates(this.value)">
          <!-- removed id="state" fom the select element above -->
            <option value="">Select country...</option>
            <?php
            foreach ($countries as $country) {
              echo "<option value='" . $country['id'] . "'>" . $country['country'] . "</option>";
            }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group hide">
        <!-- removed id="state" fom the div above -->
        <label for="state" class="col-sm-2">State:</label>
        <div class="col-sm-4">
          <p>Lorem ipsum 111</p>
          <select name="state" id="stateDropdown" class="form-control">
            <!-- <option value="">Select state...</option> goes here -->
          </select>
        </div>
      </div>
    </form>
  </div>

  <script>
    function getStates(countryID) {
      // the 'countryID' in the 'getStates' function refers to the option value (that equals to the country id number/value from the countries table) we echo out in the php foreach loop above mixed in the html (foreach ($countries as $country) {echo "<option value='" . $country['id'] . "'>" . $country['country'] . "</option>";})

      // alert(countryID); // displays an alert modal of the countryId (aka the country id number/value from the countries table)

      $("#state").show(); // when someone selects ANY country, this is going to SHOW / display the div with the id of 'state'

      $("#stateDropdown").html("<option>Loading...</option>"); // ADDS / inserts the <option>Loading...</option> to the 'select' HTML element code (in the div with the id 'stateDropdown')

      $.ajax({ // we use the AJAX METHOD
                method: "POST",
                url: "getStates.php",
                dataType: "html",
                data: {country: countryID} // the NAME of the 'data' we are POSTing to the HTML code inside the getStates.php file is 'country' and the VALUE is 'countryID'(that equals to the country id number/value from the countries table)
            })
                .done(function(data){
                    // console.log(data);
                    
                    $("#stateDropdown").html(data); // then we SEND BACK data and change the 'select' HTML element code (in the div with the id 'stateDropdown')
                });
    }
  </script>
</body>
</html>