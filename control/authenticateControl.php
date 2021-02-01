<?php

function authenticateControl($userAction){
    switch ($userAction){
        case "login":
            authenticateControl_loginAction();
            break;
        case "logout":
            authenticateControl_logoutAction();
            break;

        default:
            authenticateControl_defaultAction();
            break;

    }
}

function authenticateControl_defaultAction()
{
    $tabTitle="Connexion";
    $message='';
    include('../page/authenticatePage_default.php');
}
function authenticateControl_loginAction()
{
    $mail=$_POST['mail'];
    $pwd=hash('sha1',$_POST['pwd']);
    

    $user=userData_findOneWithCredentials($mail,$pwd);

    if (empty($user)){
        $message="Vos identifiants sont incorrects. Merci de réessayer";
        $tabTitle="Connexion";
        include('../page/authenticatePage_default.php');
        
    }
    else{
        if ($user[0]['acces']){
            $_SESSION['id']=$user[0]['id'];
            $_SESSION['email']=$user[0]['email'];
            $_SESSION['nom']=$user[0]['nom'];
            $_SESSION['prenom']=$user[0]['prenom'];
            $_SESSION['ligue_id']=$user[0]['ligue_id'];
            header('location:?route=dashboard');
        }
        else{
            $message="Vous n'êtes pas autorisé à accéder à l'application. Veuillez contacter votre administrateur.";
            $tabTitle="Connexion";
            include('../page/authenticatePage_default.php');
        }
    }
   


}
function authenticateControl_logoutAction(){
    unset($_SESSION);
    session_destroy();
    header('location:?route=authenticate');  
}