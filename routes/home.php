<?php
$app->get('/', function($request, $response, $args) {
    $string = '<h2>Select your route:</h2>
              <ul>
              <li><strong>/news</strong> = shows all news</li>
              <br />
              <li><strong>/orari/{paesePartenza}/{idDestinazione}</strong> = shows all bus times</li>
              <br />
              <li><strong>/fermate/{id_paese}</strong> = shows all bus stop</li>
              </ul>
              ';
    $response->write($string);
    return $response;
});
?>
