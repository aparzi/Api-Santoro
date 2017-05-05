<?php
$app->get('/orari/{paese}/{id_arrivo}', function ($request, $response, $args) {
  header('Content-Type: application/json');
  $paesePartenza = $args['paese'];
  $idDestinazione = $args['id_arrivo'];
  $db = new DBproprierties();
  $conn = $db->getConnection();
  // statement
  $sql = "SELECT * FROM $paesePartenza WHERE paese_arrivo = $idDestinazione ORDER BY id ASC";
  $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
      $response->getBody()->write("Non ci sono orari disponibili");
    } else {
      $orari = array();
      while ($row = mysqli_fetch_assoc($result)) {
          $orari[] = $row;
      }
      print json_encode($orari);
    }
  });
 ?>
