<?php
namespace App;
use LessQL\Database;
use Psr\Log\LoggerInterface;
use Raven_Client;
use Slim\Http\Response;

/**
 * Created by PhpStorm.
 * User: elek
 * Date: 24/01/16
 * Time: 00:08
 */

class Controller {

    protected $logger;
    protected $sentry;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    protected function json(Response $response, $httpStatus, $message) {
        $newResponse = $response;
        $newResponse = $newResponse->withHeader('Content-type', 'application/json');
        $newResponse = $newResponse->withStatus($httpStatus);
        $newResponse = $newResponse->write(json_encode($message));
        return $newResponse;
    }
}