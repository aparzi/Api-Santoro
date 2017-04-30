<?php
$app->get('/news', function ($request, $response, $args) {
  require_once './storage/DBproperties.php';
  $db = new DBproprierties();
  $conn = $db->getConnection();

  $sql = "SELECT * FROM News";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 0) {
      $response->getBody()->write("Non ci sono news");
  } else {
      while ($row = mysqli_fetch_assoc($result)) {
          echo json_encode($row);
      }
  }
});
