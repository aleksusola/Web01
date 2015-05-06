<?php
    header('Content-Type: text/plain');
    require_once ('include/string.inc.php');

    if (isset($_GET['str']) && $_GET['str'])
    {
        $str = $_GET['str'];
        echo Last($str);
    }