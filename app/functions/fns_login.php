<?php

/**
 * Checks if user is logged in by checking the PHP Session vars
 * @return bool
 */
function isUserLoggedIn() {
    if (!isset($_SESSION['user']) || !isset($_SESSION['user']['username'])) {
        return false;
    }
    return true;
}

/**
 * Enforces user login by checking if token and user vars are present in session
 * @return void
 */
function require_login() {
    if (!isset($_SESSION['user']) || !isset($_SESSION['user']['username'])) {
        header("Location: index.php?c=login");
    }
}
