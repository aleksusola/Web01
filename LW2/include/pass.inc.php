<?php
    function CheckPass($pass)
    {
        if (preg_replace('/[^a-zA-Z0-9]/', "", $pass) != $pass)
        {
            return;
        }
        else
        {
            return $pass;
        }
    }
    
    function PassStrength($pass)
    {
        $strength = 0;
        
        $strength += CalcStrengthForLength($pass);
        $strength += CalcStrengthForDigt($pass);
        $strength += CalcStrengthForUpperCase($pass);
        $strength += CalcStrengthForLowerCase($pass);
        $strength -= CalcStrengthOnlyDigt($pass);
        $strength -= CalcStrengthOnlyLetter($pass);
        $strength -= CalcStrengthRepSymbol($pass);
            
        return $strength;
    }
    
    function CalcStrengthForLength($pass)
    {
        $n = strlen($pass);
        return 4*$n;
    }  
    
    function CalcStrengthForDigt($pass)
    {
        $n = strlen(preg_replace('/[^0-9]/', '', $pass));
        return $n*4;
    }   
    
    function CalcStrengthForUpperCase($pass)
    {
        $n = strlen(preg_replace('/[^A-Z]/', '', $pass));        
        return (strlen($pass)-$n)*2;
    }   

    function CalcStrengthForLowerCase($pass)
    {
        $n = strlen(preg_replace('/[^a-z]/', '', $pass));
        return (strlen($pass)-$n)*2;
    }   

    function CalcStrengthOnlyDigt($pass)
    {
        if (strlen($pass) == strlen(preg_replace('/[^0-9]/', '', $pass)))
        {
            return strlen($pass);
        }
    }   
    
    function CalcStrengthOnlyLetter($pass)
    {        
        if (strlen($pass) == strlen(preg_replace('/[^A-Za-z]/', '', $pass)))
        {
            return strlen($pass);
        }
    }
        
    function CalcStrengthRepSymbol($pass)
    {
        $count = 0; 
        foreach (count_chars($pass, 1) as $i => $val)
        {
            if ($val > 1)
            {
                $count += $val;
            }            
        }
        return $cont;
    }