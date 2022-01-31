<?php
require_once('../db_config.php');

$query = "SELECT * FROM books";

$results = $db_connection->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <title>List of Books</title>
</head>
<body>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>TITLE</th>
          <th>AUTHOR</th>
          <th>GENRE</th>
          <th>HEIGHT</th>
          <th>PUBLISHER</th>
          <th>EDIT</th>
          <th>DELETE</th>
        </tr>
      </thead>

      <tbody>
        <?php // start of the loop
        foreach($results as $result){
        ?>
        <tr>
          <td><?php echo $result['id']; ?></td>
          <td><?php echo $result['title']; ?></td>
          <td><?php echo $result['author']; ?></td>
          <td><?php echo $result['genre']; ?></td>
          <td><?php echo $result['height']; ?></td>
          <td><?php echo $result['publisher']; ?></td>
          <td><a href="edit.php?id=<?php echo $result['id']; ?>"><i class="fas fa-edit"></i></a></td>
          <td><a href="delete.php?id=<?php echo $result['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php // end of the loop
        }
        ?>
      </tbody>
    </table>
    </div>
</body>
</html>