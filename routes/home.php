<?php
$app->get('/', function($request, $response, $args) {
    $string = '<h2>Select your route:</h2>
              <ul>
              <li><strong>/news</strong> = shows all news</li>
              <li><strong>/orari/{paesePartenza}/{idDestinazione}</strong> = shows all times</li>
              </ul>
              ';
    $response->write($string);
    return $response;
});
?>
