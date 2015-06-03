<?php
    if(isset($_FILES['filename']) && $_FILES['filename']['error'] == 0)
	{
        $dir = '/uploads/images/';
        $arrType = array('image/jpeg','image/gif','image/png',);
        $arrExt = array('png', 'jpg', 'jpeg', 'gif');
        $text = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
        $type = false;
        if (function_exists('finfo')) 
	    {
			$finfo = new finfo(FILEINFO_MIME_TYPE);
			$type = $finfo->file($_FILES['filename']['tmp_name']);
		}
        if (!$type || (in_array($type, $arrType) && in_array($text, $arrtext)))
	    {
			$filepath = $dir.uniqid().'.'.$text;
			if(move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$filepath))
		    {
			    echo"Загружено изображение ".$_FILES['filename']['name']."<br/><img src='".$name."'/>";
            } else 
		    {
		    	echo 'Изображение не загружено';
		    }
        }
    }
?>


<html>
  <head>
    <title>Фopмa для загрузки файлов на cepвep</title>
  </head>
  <body>
    <form method='post' enctype='multipart/form-data'>
    Выберите файл:<input type='file' name='filename'/>
    <input type='submit' value='Загрузить' />
    </form>
  </body>
</html>