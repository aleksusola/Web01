<?php
    header ("Content-Type: text/plain");
    echo 'Hello, Dear' . (isset($_GET['name']) ? $_GET['name'] : '') . '!'; //������ HTTP/1.1 GET/print_name.php?name=Sarah