<?php
function redirect($location) {
    header("Location: " . URLROOT . $location);
}

function sanitize($str) {
    return htmlspecialchars(trim($str));
}

function formatDate($date) {
    return date("m-d-Y", strtotime($date));
}