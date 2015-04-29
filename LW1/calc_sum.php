<?php
    $arg1 = isset($_GET['arg1']) ? $_GET['arg1'] : '';
    $arg2 = isset($_GET['arg2']) ? $_GET['arg2'] : '';
    $summa = $arg1 + $arg2;
    echo $summa;
    /* запрос: /calc_sum.php?arg1=10&arg2=15
    */  