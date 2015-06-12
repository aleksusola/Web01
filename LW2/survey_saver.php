<?php
    require_once(dirname(__FILE__) . '/include/request.inc.php');
    header('Content-Type: text/plain');
    require_once ('include/user.inc.php');
	
    $survey = GetSurveyFromRequest();
	$email= GetSurveyFilePath($email);
	
	if ( $survey['email'] == '')
    {
        exit();
    } 
    
    if (!empty($survey))
    {
        SaveSurveyToFile($survey);
    }