<?php
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

function flash($firstname, $message = "", $class = "alert alert-success") {
    if (!empty($firstname)) {
        if (!empty($message) && empty($_SESSION[$firstname])) {
            if (!empty($_SESSION[$firstname])) {
                unset($_SESSION[$firstname]);
            }
            $_SESSION[$firstname] = $message;
            if (!empty($_SESSION[$firstname . "_class"])) {
                unset($_SESSION[$firstname . "_class"]);
            }
            $_SESSION[$firstname . "_class"] = $class;
        } else if(empty($message) && !empty($_SESSION[$firstname])) {
            if (!empty($_SESSION[$firstname . "_class"])) {
                $class = $_SESSION[$firstname . "_class"];
            } else {
                $class = "";
            }
            echo '<div class="container"><div class="' . $class . '" id="msg-flash">' . $_SESSION[$firstname] . '</div></div>';
            unset($_SESSION[$firstname]);
            unset($_SESSION[$firstname . "_class"]);
        }
    }
}

function isLoggedIn() {
    return isset($_SESSION["user_id"]) && isset($_SESSION["user_firstname"]) && isset($_SESSION["user_lastname"]) && isset($_SESSION["user_email"]);
}