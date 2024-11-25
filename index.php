<?php
include_once('init.php');

/* Intercept controller and view name from the URL */
$CONTROLLER = isset($_GET['c']) ? $_GET['c'] : 'index';
$VIEW = isset($_GET['v']) ? $_GET['v'] : 'index';

/* Create Controller file name */
$ControllerName = ucfirst($CONTROLLER) . "Controller";

/* Include controller file */
include_once(CTRL_DIR . DS . $ControllerName . ".php");


/* Select different layouts for selected controllers */
switch ($ControllerName) {
  case 'ErrorController':
      //include_once(LAYOUT_DIR . DS . "404.php");
      include_once(LAYOUT_DIR . DS . "layout.php");
      break;
  case 'LoginController':
      include_once(LAYOUT_DIR . DS . "login_layout.php");
      break;
  default:
      include_once(LAYOUT_DIR . DS . "layout.php");
      break;
}