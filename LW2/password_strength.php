<?php
    require_once(dirname(__FILE__) . '/include/request.inc.php');
    header('Content-Type: text/plain');
    require_once ('include/pass.inc.php');
    
    $pass = GetParamFromGet('password');
    if ($pass == "") 
    {
        echo "Password not specified";
        exit;
    } 
  
    $pass = CheckPass($pass);
    if (!$pass) 
    {
        echo "Password contains invalid characters";
        exit;
    }

    $strength = PassStrength($pass);

    echo ("Password = {$pass} <br>");
    echo ("Password strength = {$strength}");