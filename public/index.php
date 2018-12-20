<?php

require '../vendor/autoload.php';
require '../app/settings.php';

use \Slim\Http\Request;
use \Slim\Http\Response;

$app = new \Slim\App;

// -- Home

$app->get('/', function (Request $request, Response $response) {
    return $response->write("Bonjour !");
});

// -- Articles

$app->get('/articles/{id}', function (Request $request, Response $response, $args) {
    return $response->write("Article " . $args['id']);
});

// -- Exec Slim

$app->run();