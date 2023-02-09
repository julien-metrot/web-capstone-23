<?php
// Define site-wide variables
define("APPROOT", dirname(__FILE__, 2));

if($_SERVER["HTTP_HOST"] == "localhost") {
    $debug = true;
    define("URLROOT", "http://localhost/web-capstone/web"); // Change to whatever the current project is
} else {
    $debug = false;
    define("URLROOT", "https://". $_SERVER["HTTP_HOST"]);
}

define("SITENAME", "Project Name Goes Here");

require('../../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 3));
$dotenv->safeLoad();

define("DB_HOST", $_ENV['DB_HOST']);
define("DB_PORT", $_ENV['DB_PORT']);
define("DB_USER", $_ENV['DB_USER']);
define("DB_PASS", $_ENV['DB_PASS']);
define("DB_NAME", $_ENV['DB_NAME']);