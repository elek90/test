<?php
// DIC configuration

$container = $app->getContainer();
// -----------------------------------------------------------------------------
// Service providers
// -----------------------------------------------------------------------------

// -----------------------------------------------------------------------------
// Logger
// -----------------------------------------------------------------------------

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings');
    $logger = new \Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['logger']['path'], \Monolog\Logger::DEBUG));
    return $logger;
};

// -----------------------------------------------------------------------------
// Controllers
// -----------------------------------------------------------------------------
$container['App\HomeController'] = function($c) {
    return new \App\HomeController($c->get('logger'));
};