<?php
    header ("Content-Type: text/plain");
    echo "Query string = '".$_SERVER["QUERY_STRING"]."'";
    /*  HTTP/1.1 GET/print_query_string.php?my_name=Sarah&my_surname=Rever&message=British+are+coming+by+sea.
    */
    