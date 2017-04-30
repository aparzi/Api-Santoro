<?php
$app->get('/', function($request, $response, $args) {
    $string = '<h2>Select your route:</h2>
              <ul>
              <li><strong>/news</strong> = shows all news</li>
              </ul>
              ';
    $response->write($string);
    return $response;
});
?>
