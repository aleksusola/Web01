<?php
    header('Content-Type: text/plain');
    
    $email = isset($_GET['email']) ? $_GET['email'] : '';

    if ($email) 
    {
        $file_name = dirname(__FILE__) . '/data/' . $email . '.txt';

        if (is_file($file_name) && function_exists('file_get_contents')) 
        {
            $data = unserialize(file_get_contents($file_name));
            
            echo 'Email: ' . $data['email'] . "\r\n";
            echo 'First name: ' . $data['first_name'] . "\r\n";
            echo 'Last name: ' . $data['last_name'] . "\r\n";
            echo 'Age: ' . $data['age'] . "\r\n";
        }
    }
	
	buildLayout('survey.html', $vars); 