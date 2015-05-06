<?php
    header('Content-Type: text/plain');

    $first_name = isset($_GET['first_name']) ? $_GET['first_name'] : '';
    $last_name = isset($_GET['last_name']) ? $_GET['last_name'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $age = isset($_GET['age']) ? $_GET['age'] : '';

    if ($email) 
    {
        $file_name = dirname(__FILE__) . '/data/' . $email . '.txt';
        $data = "First name: $first_name\r\nLast name: $last_name\r\nEmail: $email\r\nAge: $age\r\n";

        if (function_exists('file_put_contents')) 
        {
            file_put_contents($file_name, $data);
        } else 
        {
            $handle = fopen($file_name, 'a');
            fwrite($handle, $data);
            fclose($handle);
        } 
    }