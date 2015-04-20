<?php
    header("Content-Type: text/plain");
    $text = trim($_GET["text"]);
    $text = preg_replace("/\s+/"," ",$text);
    echo $text;