<?php
require_once('../db_config.php');

if(isset($_POST['addRecord'])){ //IF the 'Add Record' button IS SET / pressed
  $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
  $author = filter_var($_POST['author'], FILTER_SANITIZE_STRING);
  $genre = filter_var($_POST['genre'], FILTER_SANITIZE_STRING);
  $height = filter_var($_POST['height'], FILTER_SANITIZE_NUMBER_INT);
  $publisher = filter_var($_POST['publisher'], FILTER_SANITIZE_STRING);
  $query = "INSERT INTO books (title, author, genre, height, publisher) 
            VALUES (:title, :author, :genre, :height, :publisher)";
  $result = $db_connection->prepare($query);
  $result->execute([
            'title'     =>  $title,
            'author'    =>  $author,
            'genre'     =>  $genre,
            'height'    =>  $height,
            'publisher' =>  $publisher
  ]);
  // REDIRECT
  header('Location: list-books.php #addRecord'); // HEADER REDIRECT back to 'Add a New Record' button on the list-books.php page
  die(); // stop / exit the script
}

if(isset($_POST['cancel'])){ // IF the 'Cancel' button IS SET / pressed
  header('Location: list-books.php'); // HEADER REDIRECT back to the top of the list-books.php page
  die(); // stop / exit the script
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
  <title>Add a New Record</title>
</head>

<body>
  <br>
  <div class="container">
    <!-- ACTION intentionally left BLANK so that the form can send the data to ITSELF, not to another PHP processor file -->
    <form method="POST" action="">
      <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="title" name="title" value="">
        </div>
      </div>

      <div class="form-group row">
        <label for="author" class="col-sm-2 col-form-label">Author</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="author" name="author" value="">
        </div>
      </div>

      <div class="form-group row">
        <label for="genre" class="col-sm-2 col-form-label">Genre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="genre" name="genre" value="">
        </div>
      </div>

      <div class="form-group row">
        <label for="height" class="col-sm-2 col-form-label">Height</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="height" name="height" value="">
        </div>
      </div>

      <div class="form-group row">
        <label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="publisher" name="publisher" value="">
        </div>
      </div>

      <button type="submit" name="addRecord" class="btn btn-success">Add Record</button>
      <button type="submit" name="cancel" class="btn btn-success">Cancel</button>
    </form>
  </div>
</body>
</html>