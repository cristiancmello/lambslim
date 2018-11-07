<?php

namespace LambSlim\Application;

use Bref\Bridge\Slim\SlimAdapter;
use function Composer\Autoload\includeFile;

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

        Route::setHttpHandler($slim);

        includeFile(__DIR__.'/../Routes/api.php');

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