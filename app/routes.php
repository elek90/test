<?php

$baseUrlV1 = '/api/v1/';

// -----------------------------------------------------------------------------
//  Authentication
// -----------------------------------------------------------------------------
$app->get($baseUrlV1 . 'home/hello{z:[/]*}', 'App\HomeController:hello')->setName('hello');