<?php

use LambSlim\Application\Route;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

Route::get('/dev/hello', function (Request $request, Response $response) {
    $response->getBody()->write('Hello, World!');
    return $response;
});

Route::post('/dev/hello', function (Request $request, Response $response) {
    $response->getBody()->write('Hello, World!');
    return $response;
});