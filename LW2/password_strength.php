<?php
    $password = isset($_GET['password']) ? $_GET['password'] : '';
    $strength = 0;
    $password = preg_replace ( '/[^a-zA-Z0-9]/', '', $password);
    
    if ($password) 
    {
		$password_length = strlen($password);
        //$strength += 4 * $password_length;
        $digits_count = strlen(preg_replace('/[^\d]/', '', $password));
        //$strength += 4 * $digits_count;
        $low_count = strlen(preg_replace('/[^a-z0-9]/', '', $password));
        //$strength += ($password_length - $low_count) * 2;
        $upp_count = strlen(preg_replace('/[^A-Z0-9]/', '', $password));
        //$strength += ($password_length - $upp_count) * 2;
		$strength = 4 * $password_length + 4 * $digits_count + ($password_length - $low_count) * 2 + ($password_length - $upp_count) * 2;
        if (preg_replace('/[^0-9]/', '', $password) != $password)
        {
            $strength -= $password_length;
        }
        if (preg_replace('/[^a-zA-Z]/', '', $password) != $password) 
        {
            $strength -= $password_length;
        }
        $chars_array = count_chars($password);
        if (is_array($chars_array) && count($chars_array) > 0) 
        {  
            foreach($chars_array as $counter)
            {
                if ($counter > 1) 
                {
                    $strength -= $counter;
                }
            }  
        }
    }
    echo "Мощность пароля равна ".$strength //.$password_length .$digits_count .$low_count .$upp_count;