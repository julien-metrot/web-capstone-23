<?php
// Define site-wide variables
define("APPROOT", dirname(__FILE__, 2));
if($_SERVER["HTTP_HOST"] == "localhost") {
    // localhost
    $debug = true;
    define("URLROOT", "http://localhost/mvc"); // Change mvc to whatever the current project is
} else {
    // siteground or heroku
    $debug = false;
    define("URLROOT", "https://". $_SERVER["HTTP_HOST"]); // Remove /mvc if this is the only project on the server
} 
define("SITENAME", "Project Name Goes Here");