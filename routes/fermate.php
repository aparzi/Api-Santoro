<?php
$app->get('/fermate/{id_paese}', function ($request, $response, $args) {
  header('Content-Type: application/json');
  $id_paese = $args['id_paese'];
  $db = new DBproprierties();
  $conn = $db->getConnection();
  // statement
  $sql = "SELECT * FROM Fermate WHERE id_paese = $id_paese";
  $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
      $response->getBody()->write("Non ci sono fermate disponibili");
    } else {
      $fermate = array();
      while ($row = mysqli_fetch_assoc($result)) {
          $fermate[] = $row;
      }
      print json_encode($fermate);
    }
  });
 ?>
