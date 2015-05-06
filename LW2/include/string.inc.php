<?php
    function Last($string = '') 
    {
        if (function_exists('mb_substr')) 
        {
            return mb_substr($string, -1, null, 'UTF-8');
        } 
        else 
        {
            return substr($string, -1);
        }
    }
    function WithoutLast($string = '') 
    {
        if (function_exists('mb_substr')) 
        {
            return mb_substr($string, 0, -1, 'UTF-8');
        } 
        else 
        {
            return substr($string, 0, -1);
        }
    }
    if (!function_exists('mb_strrev') && function_exists('mb_detect_encoding') && function_exists('mb_strlen') && function_exists('mb_substr')) 
    {
        function mb_strrev ($string, $encoding = null) 
        {
            if ($encoding === null) 
            {
                $encoding = mb_detect_encoding($string);
            }
            $length   = mb_strlen($string, $encoding);
            $reversed = '';
            while ($length-- > 0) 
            {
                $reversed .= mb_substr($string, $length, 1, $encoding);
            }
            return $reversed;
        }
    }
    function Revers($string = '') 
    {
        if (function_exists('mb_strrev')) 
        {
            return mb_strrev($string, 'UTF-8');
        } 
        else 
        {
            return strrev($string);
        }
    }