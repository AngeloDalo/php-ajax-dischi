<?php
include __DIR__ . '/db.php';
header('Content-type: application/json');

if (isset($_GET['genre']) !== false) {
    $genre = $_GET['genre'];
    if ($genre === 'all') {
      $albumsFiltered = $albums;
    } else {
      $albumsFiltered = [];
      foreach ($albums as $album) {
        if ($album['genre'] === $genre) {
          $albumsFiltered[] = $album;
        }
      }
    }
    echo json_encode([
      'results' =>  $albumsFiltered,
      'length' => count($albums)
    ]);
  } else {
    echo json_encode([
      'error' =>  'genere non selezionato'
    ]);
  }
?>
