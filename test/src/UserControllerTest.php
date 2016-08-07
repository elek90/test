<?php
use App\HomeController;

/**
 * Created by PhpStorm.
 * User: elek
 * Date: 28/07/16
 * Time: 17:50
 */

class UserControllerTest extends PHPUnit_Framework_TestCase {
    private $action;

    public function setUp() {
        // instantiate action
        $mockLogger = new \Monolog\Logger('test');
        $this->action = new HomeController($mockLogger);
    }


    public function testHello() {
        // We need a request and response object to invoke the action
        $environment = \Slim\Http\Environment::mock([
                'REQUEST_METHOD' => 'GET',
                'REQUEST_URI' => '/api/v1/home/hello'
        ]);

        $request = \Slim\Http\Request::createFromEnvironment($environment);
        $response = new \Slim\Http\Response();

        // run the controller action and test it
        $response = $this->action->hello($request, $response);
        $this->assertEquals(200, $response->getStatusCode());
    }
}