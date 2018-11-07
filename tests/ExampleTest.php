<?php

use PHPUnit\Framework\TestCase;

use Slim\Http\Environment;
use Slim\Http\Request;
use LambSlim\Application\App;

class ExampleTest extends TestCase
{
    /**
     * @var \Slim\App
     */
    protected $httpHandler;

    protected function setUp()
    {
        $this->httpHandler = (new App())->getHttpHandler();
    }

    public function testCanGet()
    {
        $env = Environment::mock([
            'REQUEST_METHOD' => 'GET',
            'REQUEST_URI'    => '/dev/hello',
        ]);

        $req = Request::createFromEnvironment($env);
        $this->httpHandler->getContainer()['request'] = $req;
        $response = $this->httpHandler->run(true);
        $this->assertSame($response->getStatusCode(), 200);
        $this->assertSame((string)$response->getBody(), "Hello, World!");
    }

    public function testCanPost()
    {
        $env = Environment::mock([
            'REQUEST_METHOD' => 'POST',
            'REQUEST_URI'    => '/dev/hello',
        ]);

        $req = Request::createFromEnvironment($env);
        $this->httpHandler->getContainer()['request'] = $req;
        $response = $this->httpHandler->run(true);
        $this->assertSame($response->getStatusCode(), 200);
        $this->assertSame((string)$response->getBody(), "Hello, World!");
    }
}