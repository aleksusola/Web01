<?php
    function Last($str = '') 
	
    {
		$lastsymbol = $str{strlen($str)-1};
		return $lastsymbol;
	}
	
    function WithoutLast($str = '') 
	
    {
        $bezlast = substr($str,0,-1);
		return $bezlast;
    }
	
    function Revers($str = '') 
	
    {
         $kuvyrok = strrev($str);
        return $kuvyrok;
    }