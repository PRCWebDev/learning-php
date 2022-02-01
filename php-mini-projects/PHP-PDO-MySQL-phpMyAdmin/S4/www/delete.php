<?php
require_once('../db_config.php');

if(!isset($_GET['id'])){
  header('Location: list-books.php');
  die();
} else {
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if(!$id){
      header('Location: list-books.php');
      die();
    } else {
      $query = "DELETE FROM books WHERE id=:id LIMIT 1";
      $result = $db_connection->prepare($query);
      $result->execute([
        'id' => $id
        ]);
      $rowsDeleted = $result->rowCount();
      // if($rowsDeleted == 1){
      //   echo "deletion successful";
      // } else {
      //   echo "deletion failed";
      // }
    }
}

$db_connection = NULL;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <title>Delete a Record</title>
</head>
<body>
  <div class="container">
    <?php
    if($rowsDeleted == 1){
    ?>
    <br>
    <div class="alert alert-primary" role="alert">
      Record has been deleted.
    </div>
    <?php
    } else {
    ?>
    <br>
    <div class="alert alert-primary" role="alert">
      Record has not been deleted.
    </div>
    <?php
    }
    ?>
  </div>
</body>
</html>