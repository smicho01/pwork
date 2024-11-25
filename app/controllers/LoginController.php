<?php

$VIEW = isset($VIEW) ? $VIEW : 'index';

switch ($VIEW) {

        case 'index':

                break;

        case 'process':
                $username = trim($_POST['username']);
                $password = trim($_POST['password']);
                $logUser = dbUserLogin($username, $password);
                if (count($logUser) == 1) {
                        sessionLoginUser($logUser[0]);
                        header("Location: index.php");
                }
                break;

        default:

                break;
}