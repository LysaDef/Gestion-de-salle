<?php
function settingsControl($userAction){
    switch ($userAction){
        //code à ajouter quand il y aura des actions
        default:
            settingsControl_defaultAction();
        break;

    }
}

function settingsControl_defaultAction()
{
    $tabTitle="Paramètres";

    include('../page/settingsPage_default.php');
}
