<?php

// PHP

error_reporting(0);

date_default_timezone_set('Europe/Brussels');

ini_set('session.gc_maxlifetime', '10800'); // set the lifetime of a session to 3h

// SQL

$dbHost   = 'localhost';
$dbUser   = 'root';
$dbPsw    = '';
$dbName   = '';

// Application

$path     = 'http://127.0.0.1/lepacte-be/'; // absolute url with a ending slash, ie. http://example.com/
$language = 'fr';

?>