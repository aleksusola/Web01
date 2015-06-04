<?php

    $dir = '/uploads/images/';
    if (isset($_GET['action']) && isset($_GET['file']) && $_GET['action'] == 'delete' && is_file(dirname(__FILE__) . $dir . $_GET['file'])) 
	{
        @unlink(dirname(__FILE__) . $dir . $_GET['file']);
    }
    
	$files = scandir (dirname(__FILE__) . $dir);
    
    foreach($files as $file) 
	{
        if (is_file(dirname(__FILE__) . $dir . $_GET['file']))
		{
            echo "<a target='_blank' href=" . $dir . $file . ">" . $file . "</a>&nbsp;<a href='images.php?action=delete&file=" . $file . "'>Óäàëèòü</a><br />";
        }
    }