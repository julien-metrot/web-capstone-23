<?php
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

function flash($name, $message = "", $class = "alert alert-success")
{
    if (!empty($name)) {
        if (!empty($message) && empty($_SESSION[$name])) {
            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }
            $_SESSION[$name] = $message;
            if (!empty($_SESSION[$name . "_class"])) {
                unset($_SESSION[$name . "_class"]);
            }
            $_SESSION[$name . "_class"] = $class;
        } else if (empty($message) && !empty($_SESSION[$name])) {
            if (!empty($_SESSION[$name . "_class"])) {
                $class = $_SESSION[$name . "_class"];
            } else {
                $class = "";
            }
            echo '<div class="container"><div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div></div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }
}

function getTimeOfDayMessage() {
    date_default_timezone_set('America/Chicago');
    $date = date("H");
    if ($date >= 5 && $date < 12) {
        return "morning";
    }
    if ($date >= 12 && $date < 17) {
        return "afternoon";
    }
    if ($date >= 17 && $date < 22) {
        return "evening";
    }
    if ($date >= 22) {
        return "night";
    }
    if ($date < 5) {
        return "night";
    }
}



function isLoggedIn() {
    return isset($_SESSION["user_id"]) && isset($_SESSION["user_firstname"]) && isset($_SESSION["user_lastname"]) && isset($_SESSION["user_email"]);
}