<?php

  //return json da prompt PHP
  header('Content-Type: application/json');

  require_once 'db.php';


  //per esercizio :
  $singoloCD = [];

  foreach ($db as $album) {

    $singoloCD[] =[
      "poster" => $album['poster'],
      "title" => $album['title'],
      "author" => $album['author'],
      "genre" => $album['genre'],
      "year" => $album['year']
    ];
  }

  echo json_encode($singoloCD);

  //ma bastava fare
  // echo json_encode($db);
 ?>
