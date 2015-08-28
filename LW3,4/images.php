<?php
    require_once('include/common.inc.php');
    
    $folder = ROOT_DIR . '/uploads/images/';
    
    if (isset($_GET['deleteFile']))
    {
        unlink ($folder . '/' . $_GET['deleteFile']);       
    }
    
    $files = scandir($folder);
    unset($files[0], $files[1]);
    
    $vars = array(
        'folder' => $folder,
        'files' => $files, 
    );

    buildLayout('images.html', $vars);