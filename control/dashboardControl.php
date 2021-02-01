<?php
function dashboardControl($userAction){
    switch ($userAction){
        //code à ajouter quand il y aura des actions
        default:
            dashboardControl_defaultAction();
        break;

    }
}

function dashboardControl_defaultAction()
{
    $tabTitle="Tableau de bord";

    include('../page/dashboardPage_default.php');
}
