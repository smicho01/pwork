<?php
include_once('init.php');

/* Intercept controller and view name from the URL */
$CONTROLLER = isset($_GET['c']) ? $_GET['c'] : 'index';
$VIEW = isset($_GET['v']) ? $_GET['v'] : 'index';

/* Create Controller file name */
$ControllerName = ucfirst($CONTROLLER) . "Controller";

/* Include controller file */
include_once(CTRL_DIR . DS . $ControllerName . ".php");