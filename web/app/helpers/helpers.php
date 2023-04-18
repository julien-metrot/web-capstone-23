<?php
function redirect($location) {
    header("Location: " . URLROOT . $location);
}


function sanitize($str) {
    return htmlspecialchars(trim($str));
}