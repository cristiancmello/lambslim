<?php

namespace LambSlim\Application;

use Bref\Bridge\Slim\SlimAdapter;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class App
{
    /**
     * @var \Slim\App
     */
    private $httpHandler;

    /**
     * @var \Bref\Application
     */
    private $app;

    /**
     * App constructor.
     */
    public function __construct()
    {
        $slim = new \Slim\App();

        $slim->get('/dev', function (Request $request, Response $response) {
            $response->getBody()->write('Hello, World!');
            return $response;
        });

        $app = new \Bref\Application;
        $app->httpHandler(new SlimAdapter($slim));

        $this->app = $app;
        $this->httpHandler = $slim;
    }

    /**
     * Get Bref Application.
     *
     * @return \Bref\Application
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Get Slim Request Http Handler.
     *
     * @return \Slim\App
     */
    public function getHttpHandler()
    {
        return $this->httpHandler;
    }
}