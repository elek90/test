<?php
/**
 * Created by PhpStorm.
 * User: elek
 * Date: 24/02/16
 * Time: 20:37
 */

// -----------------------------------------------------------------------------
// Environment
// -----------------------------------------------------------------------------
if(getenv('APP_ENV') != 'dev') { //Live server
    error_reporting(null);
    ini_set('display_errors', 'Off');
    define('SLIM_ERRORS',  false);
    define('LIVE', true);
}
else { //dev environment
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    define('SLIM_ERRORS',  true);
    define('LIVE', false);
}

// -----------------------------------------------------------------------------
// Session
// -----------------------------------------------------------------------------
session_start();

// -----------------------------------------------------------------------------
// Time
// -----------------------------------------------------------------------------
date_default_timezone_set('Europe/Copenhagen');