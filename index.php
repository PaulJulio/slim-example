<?php

require_once('vendor/autoload.php');

$app = new \Slim\App();
$app->add(\PaulJulio\SlimExample\JSON::class);

$app->any('/', function($request, $response, $args){
    $body = $response->getBody();
    $body->offsetSet('c',3);
    return $response->withBody($body);
});

$app->add(\PaulJulio\SlimExample\Author::class);

$app->run();
