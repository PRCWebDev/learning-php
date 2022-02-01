<?php
require_once('../db_config.php');

if(!isset($_POST['updateRecord'])){ // IF the 'Update Record' button is NOT set / pressed
  header('Location: edit.php'); // HEADER REDIRECT back to edit.php page
  die(); // stop / exit the script
} else {
  if(!isset($_POST['id'])){ // If we DON'T have an id set
    header('Location: edit.php'); // HEADER REDIRECT back to edit.php page
    die(); // stop / exit the script
  } else { //IF the 'Update Record' button IS SET / pressed
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    $author = filter_var($_POST['author'], FILTER_SANITIZE_STRING);
    $genre = filter_var($_POST['genre'], FILTER_SANITIZE_STRING);
    $height = filter_var($_POST['height'], FILTER_SANITIZE_NUMBER_INT);
    $publisher = filter_var($_POST['publisher'], FILTER_SANITIZE_STRING);
    $query = "UPDATE books
              SET title = :title,
              author = :author,
              genre = :genre,
              height = :height,
              publisher = :publisher
              WHERE id = :id";
    $result = $db_connection->prepare($query);
    $result->execute([ // executes as an ARRAY of values
              'title'     => $title,
              'author'    => $author,
              'genre'     => $genre,
              'height'    => $height,
              'publisher' => $publisher,
              'id'        => $id
    ]);
    // REDIRECT
    header('Location: list-books.php'); // HEADER REDIRECT back to 'Add a New Record' button on the list-books.php page
    die(); // stop / exit the script
  }
}

if(isset($_POST['cancel'])){ // IF the 'Cancel' button IS SET / pressed
  header('Location: list-books.php'); // HEADER REDIRECT back to top of the list-books.php page
  die(); // stop / exit the script
}

$db_connection = NULL;