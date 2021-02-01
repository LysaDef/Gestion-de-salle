<?php

function userData_findOneWithCredentials($userMail,$userPwd){
    $request="SELECT * FROM user WHERE email=? AND mdp=?";
    $requestParams=array($userMail,$userPwd);
    
    $result=Connection::safeQuery($request,$requestParams);
    return $result;
}