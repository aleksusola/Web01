<?php
    header('Content-Type: text; charset=utf-8');
    $email = isset($_GET['email']) ? $_GET['email'] : '';

    if ($email) 
    {
        $file_name = dirname(__FILE__) . '/data/' . $email . '.txt';

        if (is_file($file_name) && function_exists('file_get_contents')) 
        {
            echo file_get_contents($file_name);
        }
    }