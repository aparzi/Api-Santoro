<?php
$app->get('/news', function ($request, $response, $args) {
  header('Content-Type: application/json');
  require_once './storage/DBproperties.php';
  $db = new DBproprierties();
  $conn = $db->getConnection();

  $sql = "SELECT * FROM News";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 0) {
      $response->getBody()->write("Non ci sono news");
  } else {
      $news = array();
      while ($row = mysqli_fetch_assoc($result)) {
          $news[] = $row;
      }
      print json_encode($news);
  }
});
