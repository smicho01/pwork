<?php

function sessionLoginUser($userData) {
    unset($_SESSION['user']);
    $_SESSION['user']['loggedin'] = 1;
    $_SESSION['user']['username'] = $userData['username'];
}

function sessionLogOutUser() {
    unset($_SESSION['user']);
}