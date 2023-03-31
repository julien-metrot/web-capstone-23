<?php
// Define site-wide variables
define("APPROOT", dirname(__FILE__, 2));

if($_SERVER["HTTP_HOST"] == "localhost") {
    $debug = true;
    define("URLROOT", "http://localhost/web-capstone-23/web");
} else {
    $debug = false;
    define("URLROOT", "https://". $_SERVER["HTTP_HOST"]);
}
require('../../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 3));
$dotenv->safeLoad();

define("DB_HOST", $_ENV['DB_HOST']);
define("DB_PORT", $_ENV['DB_PORT']);
define("DB_USER", $_ENV['DB_USER']);
define("DB_PASS", $_ENV['DB_PASS']);
define("DB_NAME", $_ENV['DB_NAME']);

define("SITENAME", "Pawfect Adoption");
define("ADDRESS", "6301 Kirkwood Blvd - Cedar Rapids");
define("EMAIL_ADDRESS", "staff@pawfectadoption.com");
define("PHONE", "(123) 456-7890");
define("GITHUB_URL", "https://github.com/julien-metrot/web-capstone-23.git");
define("TWITTER_URL", "https://twitter.com/kirkwoodcc");
define("INSTAGRAM_URL", "https://www.instagram.com/kirkwoodlife/");