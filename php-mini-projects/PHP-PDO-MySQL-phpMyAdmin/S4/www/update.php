<?php

require_once('../db_config.php');

if(!isset($_POST['updateRecord'])){ // IF the Update button is NOT set / pressed
  header('Location: edit.php'); // HEADER REDIRECT back to edit.php page
  die(); // stop / exit the script
} else {
  if(!isset($_POST['id'])){ // If we DON'T have an id set
    header('Location: edit.php'); // HEADER REDIRECT back to edit.php page
    die(); // stop / exit the script
  } else {
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
  }
}

// $db_connection = NULL;