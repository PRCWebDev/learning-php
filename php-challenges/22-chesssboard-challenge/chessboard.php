<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- needs an older version of bootstrap to work properly -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Chessboard</title>
</head>
<body>
  <div class="container p-5">
    <div class="row justify-content-center">
      <form action="" method="POST" class="form-inline mb-3">
        <div class="form-group">
          <select name="size" class="form-control mr-3">
            <?php
            for($i = 2; $i <= 10; $i++){
              echo "<option value='$i'>$i</option>";
            }
            ?>
          </select>
        </div>
    
        <div class="form-group">
          <select name="color" class="form-control mr-3">
            <option value="black">Black</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
          </select>
        </div>
    
        <button name="submit" class="btn btn-primary">SUBMIT</button>
    
      </form>
    </div>

    <div class="row justify-content-center">
      <table>
        <?php
        if(isset($_POST['submit'])){
          $size = $_POST['size'];
          $color = $_POST['color'];
        } else {
          $size = 8; // default size
          $color = "black"; // default color
        }
    
        for($rows = 1; $rows <= $size; $rows++){
          echo "<tr>";
          for($columns = 1; $columns <= $size; $columns++){
            $total = $rows + $columns;
            if($total % 2 == 0){
              echo "<td></td>";
            } else {
              echo "<td class='"; // switching the color class
              switch ($color) {
                case "black":
                  echo "black";
                  break;
                case "red":
                  echo "red";
                  break;
                case "green":
                  echo "green";
              }
              echo "'></td>";
            }
          }
          echo "</tr>";
        }
        ?>
      </table>
    </div>
  </div>
</body>
</html>