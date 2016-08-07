<?php

namespace App;

use Firebase\JWT\JWT;
use Model\UserQuery;
use Psr\Log\LoggerInterface;
use Raven_Client;
use Slim\Http\Request;
use Slim\Http\Response;
use Util\ErrorHelper;

class HomeController extends Controller {

    public function __construct(LoggerInterface $logger) {
        parent::__construct($logger);
    }

    public function hello(Request $request, Response $response) {
        return $this->json($response, 200, 'Hello World');
    }
}