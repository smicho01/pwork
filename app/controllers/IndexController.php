<?php

$VIEW = isset($VIEW) ? $VIEW : 'index';

switch ($VIEW) {

	case 'index': 
        require_login();
        break;

    default:

    break;
}
