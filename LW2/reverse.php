<?php
    header('Content-Type: text/html; charset=utf-8');
    require_once ('include/string.inc.php');

    if (isset($_GET['str']) && $_GET['str']) 
    {
        $str = $_GET['str'];
        echo Revers($str);
    }