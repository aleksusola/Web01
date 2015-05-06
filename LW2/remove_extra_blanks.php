<?php
    header('Content-Type: text/plain');
    $text = isset($_GET['text']) ? $_GET['text'] : '';
	$text = trim($_GET["text"]);
    $text = preg_replace('/ {2,}/',' ', $text);
    echo $text;
    /* text =  1  2   3    4     5   ;
    */