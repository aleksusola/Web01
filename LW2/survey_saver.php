<?php
    require_once(dirname(__FILE__) . '/include/request.inc.php');
    header('Content-Type: text/plain');
    require_once ('include/string.inc.php');
	
	$email= GetSurveyFilePath($email);
    $survey = GetSurveyFromRequest();
    
    if (!empty($survey))
    {
         SaveSurveyToFile($survey);
    }