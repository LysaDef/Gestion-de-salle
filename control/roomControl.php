<?php
function roomControl($userAction){
    switch ($userAction){
        //code à ajouter quand il y aura des actions
        default:
            roomControl_defaultAction();
        break;

    }
}

function roomControl_defaultAction()
{
    $tabTitle="Listing des salles";

    $salles=salleData_getAll();


    include('../page/roomPage_default.php');
}

//$tabTitle="Listing des salles";

//$salles=salleData_getAll();


//include('../page/roomPage_default.php');