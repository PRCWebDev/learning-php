<?php
require_once('../db_config.php');

if(!isset($_GET['id'])){ // IF $_GET is NOT set
  header('Location: list-books.php'); // HEADER REDIRECT back to list-books.php page
  die();
} else {
  $id = filter_var($_GET['id'], FILTER_VALIDATE_INT); // FILTER / CHECKS IF the variable $_GET is an integer
  if(!$id){ // IF $_GET is NOT an integer
    header('Location: list-books.php'); // HEADER REDIRECT back to list-books.php page
    die();
  } else {
    $query = "SELECT * FROM books WHERE id=:id LIMIT 1";
    $result = $db_connection->prepare($query);
    $result->execute([
      'id' => $id
    ]);
    $result = $result->fetch();
  }
}
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Edit a Record</title>
  </head>
  <body>
    <br>
    <div class="container">
      <form method="POST" action="update.php">
        <div class="form-group row">
          <label for="id" class="col-sm-2 col-form-label">ID</label>
          <div class="col-sm-10">
            <input type="number" readonly class="form-control" id="id" name="id" value="<?php echo $result['id']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="title" class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $result['title']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="author" class="col-sm-2 col-form-label">Author</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="author" name="author" value="<?php echo $result['author']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="genre" class="col-sm-2 col-form-label">Genre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $result['genre']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="height" class="col-sm-2 col-form-label">Height</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="height" name="height" value="<?php echo $result['height']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="publisher" name="publisher" value="<?php echo $result['publisher']; ?>">
          </div>
        </div>

        <button type="submit" name="updateRecord" class="btn btn-success">Update Record</button>
      </form>
    </div>
  </body>
  </html>