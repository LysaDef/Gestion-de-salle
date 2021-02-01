<?php 
session_start();
include ('../config/env.php');
include ('../data/Connection.php');
include ('../data/salleData.php');
include ('../data/reserverData.php');
include ('../control/authenticateControl.php');
include ('../control/dashboardControl.php');
include ('../control/settingsControl.php');
include ('../control/bookingControl.php');
include ('../control/roomControl.php');
include ('../data/userData.php');



$route='';

if (isset($_GET['route'])) {
    $route=$_GET['route'];
}

$action='';
if (isset($_GET['action'])) {
    $action=$_GET['action'];
}

if (!isset($_SESSION['id'])){
    $route='authenticate';
}

switch($route){

    case 'dashboard':
        dashboardControl($action);
    break;

    case 'room':
        roomControl($action);
    break;

    case 'booking':
        bookingControl($action);
    break;

    case 'settings':
        settingsControl($action);
    break;

    case 'authenticate':
        authenticateControl($action);
    break;

    default:
    echo "La route spécifiée n'existe pas";
    break;
}



//include('../control/dashboardControl.php');
//include('../control/roomControl.php');